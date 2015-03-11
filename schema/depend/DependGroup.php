<?php 
namespace Top\schema\depend;

class DependGroup{
    
    protected $_dependExpressList = array();
    protected $_dependGroupList = array();
    protected $_operator = 'and';
    
    const OPERATOR_AND = 'and';
    const OPERATOR_OR = 'or';
    
    public function addDependExpress(DependExpress $depend){
        $this->_dependExpressList[] = $depend;
    }
    
    public function addDependGroup(DependGroup $dependGroup){
        $this->_dependGroupList[] = $dependGroup;
    }
    
    public function getOperator() {
        return $this->_operator;
    }
    
    public function setOperator($operator) {
        $this->_operator = $operator;
    }
    
    public function toElement($dependElem){
        $operator = $this->getOperator();
        if(!empty($operator)){
            $dependElem->addAttribute("operator",$operator);
        }
        if($this->_dependExpressList){
            foreach($this->_dependExpressList as $dependExpress){
                $dependExpressElem = $dependElem->addChild("depend-express");
                $dependExpressElem->addAttribute("fieldId",$dependExpress->getFieldId());
                $dependExpressElem->addAttribute("value",$dependExpress->getValue());
                $dependExpressElem->addAttribute("symbol",$dependExpress->getSymbol());
            }
        }
        if($this->_dependGroupList){
            foreach($this->_dependGroupList as $dependGroup){
                $subDependGroupElem = $dependElem->addChild("depend-group");
                $dependGroup->toElement($subDependGroupElem);
            }
        }
        return $dependElem;
    }
}
?>