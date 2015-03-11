<?php 
namespace Top\schema\field;
use Top\schema\option\Option;
use Top\schema\util\StringUtil;
use Top\schema\exception\TopSchemaException;
use Top\schema\enums\TopSchemaErrorCode;

abstract class OptionsField extends Field{
    protected $_options = array();
    
    public function addOption(Option $option){
        if($option == null){
            return;
        }
        $this->_options[] = $option;
    }
    
    public function setOptions($options){
        if(!$options) return ;
        $this->_options = $options;
    }
    
    public function getOptions(){
        return $this->_options;
    }
    
    public function toElement($fieldElem = null){
        if(is_null($fieldElem)){
            $fieldElem = new \SimpleXMLElement("<?xml version='1.0' encoding='utf-8'?><itemRule><field></field></itemRule>");
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
        $fieldElem->addAttribute("name",$name);
        $fieldElem->addAttribute("type",$type);
        if($this->_rules){
            $rulesElem = $fieldElem->addChild("rules");
            foreach($this->_rules as $rule){
                $rule->toElement($rulesElem->addChild("rule"));
            }
        }
        if($this->_options){
            $optionsElem = $fieldElem->addChild("options");
            foreach($this->_options as $option){
                $option->toElement($optionsElem->addChild("option"));
            }
        }
        $this->toDefaultValueElement($fieldElem);
        if($this->_properties){
            $propertiesElem = $fieldElem->addChild("properties");
            foreach($this->_properties as $property){
                $propertyElem = $propertiesElem->addChild("property");
                $propertyElem->addAttribute("key",$property->getKey());
                $propertyElem->addAttribute("value",$property->getValue());
            }
        }
        return $fieldElem;
    }
}
?>