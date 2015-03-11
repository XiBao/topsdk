<?php 
namespace Top\schema\value;
use Top\schema\field\Field;

class ComplexValue{
    protected $_fieldMap = array();
    
    public function put(Field $field){
        $this->_fieldMap[$field->getId()] = $field;
    }
    
    public function getValue($fieldId){
        if(isset($this->_fieldMap[$fieldId])){
            return $this->_fieldMap[$fieldId];
        }
        return null;
    }
    
    public function getValues(){
        return $this->_fieldMap;
    }
}
?>