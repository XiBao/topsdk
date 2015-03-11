<?php 
namespace Top\schema\rule;
use Top\schema\depend\DependGroup;
use Top\schema\enums\RuleType;
use Top\schema\util\StringUtil;

class Rule{
    protected $_name;
    protected $_value;
    protected $_dependGroup;
    protected $_exProperty;
    protected $_url;
    protected $_unit;
    
    public function __construct($name = null,$value = null,$exProperty = null){
        if($name){
            $this->setName($name);
        }
        if($value){
            $this->setValue($value);
        }
        if($exProperty){
            $this->_exProperty = $exProperty;
        }
    }
    
    public function toElement($ruleElem){
        $name = $this->getName();
        $value = $this->getValue();
        $exProperty = $this->getExProperty();
        $ruleElem->addAttribute("name",$name);
        $ruleElem->addAttribute("value",StringUtil::format($value,false));
        if(!empty($exProperty)){
            $ruleElem->addAttribute("exProperty",$exProperty);
        }
        if($name == RuleType::MAX_TARGET_SIZE_RULE || $name == RuleType::MIN_TARGET_SIZE_RULE){
            $unit = $this->getUnit();
            if(!empty($unit)){
                $ruleElem->addAttribute("unit",$unit);
            }
        }
        if($name == RuleType::DEV_TIP_RULE || $name == RuleType::TIP_RULE){
            $url = $this->getUrl();
            if(!empty($url)){
                $ruleElem->addAttribute("url",$url);
            }
        }
        $dependGroup = $this->getDependGroup();
        if($dependGroup){
            $dependElem = $ruleElem->addChild("depend-group");
            $dependGroup->toElement($dependElem);
        }
        return $ruleElem;
    }
    
    public function getName() {
        return $this->_name;
    }
    
    public function setName($name) {
        $this->_name = $name;
    }
    
    public function getValue() {
        return $this->_value;
    }
    
    public function setValue($value) {
        $value === 'false' && $value = false;
        $value === 'true' && $value = true;
        $this->_value = $value;
    }
    
    public function getExProperty() {
        return $this->_exProperty;
    }
    
    public function setExProperty($exProperty) {
        $this->_exProperty = $exProperty;
    }
    
    public function setValueIntervalInclude(){
        $this->_exProperty = "include";
    }
    public function setValueIntervalNotInclude(){
        $this->_exProperty = "not include";
    }
    
    public function getUrl() {
        return $this->_url;
    }
    
    public function setUrl($url) {
        $this->_url = $url;
    }
    
    public function getUnit() {
        return $this->_unit;
    }
    
    public function setUnit($unit) {
        $this->_unit = $unit;
    }
    
    public function setDependGroup(DependGroup $dependGroup) {
        $this->_dependGroup = $dependGroup;
    }
    
    public function getDependGroup(){
        return $this->_dependGroup;
    }
}
?>