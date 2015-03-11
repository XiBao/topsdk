<?php 
namespace Top\schema\field;
use Top\schema\rule\Rule;
use Top\schema\property\Property;
use Top\schema\util\StringUtil;
use Top\schema\exception\TopSchemaException;
use Top\schema\enums\TopSchemaErrorCode;

abstract class Field{
    protected $_id;
    protected $_name;
    protected $_rules;
    protected $_type;
    protected $_value;
    protected $_properties;
    protected $_defaultValue;
    
    function setId($id){
        $this->_id = $id;
    }
    
    function setName($name){
        $this->_name = $name;
    }
    
    function setType($type){
        $this->_type = $type;
    }
    
    function getId(){
        return $this->_id;
    }
    
    function getName(){
        return $this->_name;
    }
    
    function getType(){
        return $this->_type;
    }
    
    function setValue($value) {
        if(!is_string($value)) $value = (string)$value;
        $value === 'false' && $value = false;
        $value === 'true' && $value = true;
        $this->_value = $value;
    }
    
    function getValue() {
        return $this->_value;
    }
    
    function addRule(Rule $rule){
        $this->_rules[] = $rule;
    }
    
    function addProperty(Property $property){
        $this->_properties[] = $property;
    }
    
    function setProperties($properties){
        $this->_properties = $properties;
    }
    
    function getProperties($properties){
        return $this->_properties;
    }
    
    function setDefaultValue($value){
        if(!is_string($value)) $value = (string)$value;
        $value === 'false' && $value = false;
        $value === 'true' && $value = true;
        $this->_defaultValue = $value;
    }
    
    function getDefaultValue(){
        return $this->_defaultValue;
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
    
    /**
     * 如果当前值为空,用默认值覆盖当前值
     */
    abstract public function setValueWithDefault();
    
    abstract public function toDefaultValueElement($fieldElem);
}
?>