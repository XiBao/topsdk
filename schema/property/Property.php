<?php 
namespace Top\schema\property;

class Property{
    protected $_key;
    protected $_value;
    
    public function __construct($key,$value){
        $this->_key = $key;
        $this->_value = $value;
    }
    
    public function getKey() {
        return $this->_key;
    }
    
    public function setKey($key) {
        $htis->_key = $key;
    }
    
    public function getValue() {
        return $this->_value;
    }
    
    public function setValue($value) {
        $htis->_value = $value;
    }
}
?>