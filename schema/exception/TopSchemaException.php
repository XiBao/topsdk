<?php 
namespace Top\schema\exception;

class TopSchemaException extends \Exception{
    protected $_errorCode;
    protected $_errMsg;
    
    public function __construct($code,$message){
        $this->_errorCode = $code;
        $this->_errMsg = $message;
    }
    
    public function getErrorCode() {
        return $this->_errorCode;
    }
    
    public function setErrorCode($errorCode) {
        $this->_errorCode = $errorCode;
    }
    
    public function getErrorMsg() {
        return $this->_errorMsg;
    }
    
    public function setErrorMsg($errorMsg) {
        $this->_errorMsg = $errorMsg;
    }
    
    public function getFieldId() {
        return $this->_fieldId;
    }
    
    public function setFieldId($fieldId) {
        $this->_fieldId = $fieldId;
    }
}
?>