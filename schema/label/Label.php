<?php 
namespace Top\schema\label;

class Label{
    private $_name;
    private $_value;
    private $_desc;
    
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
        $this->_value = $value;
    }
    public function getDesc() {
        return $this->_desc;
    }
    public function setDesc($desc) {
        $this->_desc = $desc;
    }
}
?>