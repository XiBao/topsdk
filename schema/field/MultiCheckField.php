<?php 
namespace Top\schema\field;
use Top\schema\enums\FieldType;
use Top\schema\util\StringUtil;
use Top\schema\exception\TopSchemaException;
use Top\schema\enums\TopSchemaErrorCode;

class MultiCheckField extends OptionsField{
    
    protected $_defaultValues = array();
    protected $_values = array();
    
    public function __construct(){
        $this->_type = FieldType::MULTICHECK;
    }
    
    public function addDefaultValues($value){
        $this->setDefaultValue($value);
        $this->_defaultValues[] = $this->getDefaultValue();    
    }
    
    public function setDefaultValues($values){
        $this->_defaultValues = $values;
    }
    
    public function getDefaultValues(){
        return $this->_defaultValues;
    }
    
    public function addValues($value){
        $this->setValue($value);
        $this->_values[] = $this->getValue();
    }
    
    public function setValues($values){
        $this->_values = $values;
    }
    
    public function getValues(){
        return $this->_values;
    }
    
    /**
     * 如果当前值为空,用默认值覆盖当前值
     */
    public function setValueWithDefault(){
        if(!$this->_values && $this->_defaultValues){
            $this->_values = $this->_defaultValues;
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
        $valuesElem = $fieldElem->addChild("values");
        if($this->_values){
            foreach($this->_values as $value){
                if(!StringUtil::isEmpty($value)){
                    $valuesElem->addChild("value",StringUtil::format($value));
                }
            }
        }
        return $fieldElem;
    }
    
    public function toDefaultValueElement($fieldElem){
        if($this->_defaultValues){
            $defaultValuesElem = $fieldElem->addChild("default-values");
            foreach($this->_defaultValues as $defaultValue){
                if(!StringUtil::isEmpty($defaultValue)){
                    $defaultValuesElem->addChild("default-value",StringUtil::format($defaultValue));
                }
            }
        }
    }
    
}
?>