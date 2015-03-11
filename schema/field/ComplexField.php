<?php 
namespace Top\schema\field;
use Top\schema\enums\FieldType;
use Top\schema\value\ComplexValue;
use Top\schema\util\StringUtil;
use Top\schema\exception\TopSchemaException;
use Top\schema\enums\TopSchemaErrorCode;

class ComplexField extends Field{
    protected $_complexValue;
    protected $_defaultComplexValue;
    protected $_fields = array();
    
    function __construct(){
        $this->_type = FieldType::COMPLEX;
    }
    
    public function addField(Field $field){
       $this->_fields[$field->getId()] = $field;
    }
    
    public function getFieldList(){
        return $this->_fields;
    }
    
    public function getField($fieldId){
        if(isset($this->_fields[$fieldId])){
            return $this->_fields[$fieldId];
        }
        return null;
    }
   
    public function setComplexValue(ComplexValue $value){
        $this->_complexValue = $value;
    }
    
    public function getComplexValue(){
        return $this->_complexValue;
    }
     
    public function setDefaultComplexValue(ComplexValue $value){
        $this->_defaultComplexValue = $value;
    }
    
    public function getDefaultComplexValue(){
        return $this->_defaultComplexValue;
    }
    
    public function setValueWithDefault(){
        if(!$this->_complexValue && $this->_defaultComplexValue){
            $this->_complexValue = $this->_defaultComplexValue;
        }
    }
    
    public function toParamElement($fieldElem = null){
        if(is_null($fieldElem)){
            $fieldElem = new \SimpleXMLElement("<?xml version='1.0' encoding='utf-8'?><itemParam><field></field></itemParam>");
            $fieldElem = $fieldElem->field;
            //field外层加上itemRule，这样php会认为field不是根节点。因此asXML出来的结果带上xml version信息
        }
        $id = $this->getId();
        $name = $this->getName();
        $type = $this->getType();
        if(StringUtil::isEmpty($id)){
            throw new TopSchemaException(30001, TopSchemaErrorCode::ERROR_CODE_30001,$id);
        }
        if(StringUtil::isEmpty($type)){
            throw new TopSchemaException(30002, TopSchemaErrorCode::ERROR_CODE_30002,$id);
        }
        $fieldElem->addAttribute("id",$id);
        if(!StringUtil::isEmpty($name)){
            $fieldElem->addAttribute("name",$name);
        }
        $fieldElem->addAttribute("type",$type);
        $complexElem = $fieldElem->addChild("complex-values");
        if($this->_complexValue){
            $fieldMap = $this->_complexValue->getValues();
            foreach($fieldMap as $field){
                $field->toParamElement($complexElem->addChild("field"));
            }
        }
        return $fieldElem;
    }
    
    public function toElement($fieldElem = null){
        $fieldElem = parent::toElement($fieldElem);
        if($this->_fields){
            $fieldsElem = $fieldElem->addChild("fields");
            foreach($this->_fields as $field){
                $field->toElement($fieldsElem->addChild("field"));
            }
        }
        return $fieldElem;
    }
   
    public function toDefaultValueElement($fieldElem){
        if($this->_defaultComplexValue){
            $defaultComplexElem = $fieldElem->addChild("default-complex-values");
            $fieldMap = $this->_defaultComplexValue->getValues();
            foreach($fieldMap as $field){
                $field->toParamElement($defaultComplexElem->addChild("field"));
            }
        }
    }
}
?>