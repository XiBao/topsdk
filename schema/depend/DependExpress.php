<?php
namespace Top\schema\depend;
 
class DependExpress{
    
    public function getFieldId() {
        return $this->_fieldId;
    }
    public function setFieldId($fieldId) {
        $this->_fieldId = $fieldId;
    }
    public function getValue() {
        return $this->_value;
    }
    public function setValue($value) {
        $this->_value = $value;
    }
    
    public function getSymbol() {
        return $this->_symbol;
    }
    
    public function setSymbol($symbol) {
        $this->_symbol = $symbol;
    }
}
?>