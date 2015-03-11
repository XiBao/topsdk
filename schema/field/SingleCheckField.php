<?php 
namespace Top\schema\field;
use Top\schema\enums\FieldType;
use Top\schema\util\StringUtil;
use Top\schema\exception\TopSchemaException;
use Top\schema\enums\TopSchemaErrorCode;

class SingleCheckField extends OptionsField{
    public function __construct(){
        $this->_type = FieldType::SINGLECHECK;
    }
    
    /**
     * 如果当前值为空,用默认值覆盖当前值
     */
    public function setValueWithDefault(){
        if(StringUtil::isEmpty($this->_value) && !StringUtil::isEmpty($this->_defaultValue)){
            $this->_value = $this->_defaultValue;
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
        $value = $this->getValue();
        if(StringUtil::isEmpty($value)){
            $fieldElem->addChild("value");
        }else{
            $fieldElem->addChild("value",StringUtil::format($value));
        }
        return $fieldElem;
    }
    
    public function toDefaultValueElement($fieldElem){
        $defaultValue = $this->getDefaultValue();
        if(!StringUtil::isEmpty($defaultValue)){
            $fieldElem->addChild("default-value",StringUtil::format($defaultValue));
        }
    }
}
?>