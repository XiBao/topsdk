<?php 
namespace Top\schema\option;
use Top\schema\depend\DependGroup;
use Top\schema\util\StringUtil;

class Option{
    protected $_displayName;
    protected $_value;
    protected $_dependGroup;
    
    public function getDisplayName() {
        return $this->_displayName;
    }
    
    public function setDisplayName($displayName) {
        $this->_displayName = $displayName;
    }
    
    public function DisplayName() {
        return $this->_displayName;
    }
    
    public function setValue($value) {
        $value === 'false' && $value = false;
        $value === 'true' && $value = true;
        $this->_value = $value;
    }
    
    public function getDependGroup() {
        return $this->_dependGroup;
    }
    
    public function setDependGroup(DependGroup $dependGroup) {
        $this->_dependGroup = $dependGroup;
    }
    
    public function getValue() {
        return $this->_value;
    }
    
    public function toElement($optionElem){
        $displayName = $this->getDisplayName();
        $value = $this->getValue();
        if(empty($displayName)){
            
        }
        if(empty($value)){
            
        }
        $optionElem->addAttribute("displayName",$displayName);
        $optionElem->addAttribute("value",StringUtil::format($value,false));
        if($this->_dependGroup){
            $dependElem = $optionElem->addChild("depend-group");
            $this->_dependGroup->toElement($dependElem);
        }
        return $optionElem;
    }
}
?>