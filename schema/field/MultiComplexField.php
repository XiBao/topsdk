<?php 
namespace Top\schema\field;
use Top\schema\value\ComplexValue;
use Top\schema\enums\FieldType;
use Top\schema\enums\TopSchemaErrorCode;
use Top\schema\util\StringUtil;
use Top\schema\exception\TopSchemaException;

class MultiComplexField extends Field{
    
    protected $_complexValues = array();
    protected $_defaultComplexValues = array();
    protected $_fields = array();
    
    public function __construct(){
        $this->_type = FieldType::MULTICOMPLEX;
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
    
    public function addComplexValues(ComplexValue $value){
        $this->_complexValues[] = $value;
    }
    
    public function setComplexValues($valueList){
        $this->_complexValues = $valueList;
    }
    
    public function getComplexValues(){
        return $this->_complexValues;
    }
     
    public function addDefaultComplexValues(ComplexValue $value){
        $this->_defaultComplexValues[] = $value;
    }
    
    public function setDefaultComplexValues($valueList){
        $this->_defaultComplexValues = $valueList;
    }
    
    public function getDefaultComplexValues(){
        return $this->_defaultComplexValues;
    }
    
    /**
     * 如果当前值为空,用默认值覆盖当前值
     */
    public function setValueWithDefault(){
        if(!$this->_complexValues && $this->_defaultComplexValues){
            $this->_complexValues = $this->_defaultComplexValues;
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
        if($this->_complexValues){
            foreach($this->_complexValues as $complexValue){
                $complexElem = $fieldElem->addChild("complex-values");
                $fieldMap = $complexValue->getValues();
                foreach($fieldMap as $field){
                    $field->toParamElement($complexElem->addChild("field"));
                }
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
        if($this->_defaultComplexValues){
            $defaultValueElem = $fieldElem->addChild("default-values");
            foreach($this->_defaultComplexValues as $defaultComplexValue){
                $defaultComplexElem = $defaultValueElem->addChild("default-complex-values");
                $fieldMap = $defaultComplexValue->getValues();
                foreach($fieldMap as $field){
                    $field->toParamElement($defaultComplexElem->addChild("field"));
                }
            }
        }
    }
   
}
?>