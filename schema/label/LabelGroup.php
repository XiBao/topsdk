<?php 
namespace Top\schema\label;

class LabelGroup{
    protected $_name;
    protected $_labelList = array();
    protected $_labelGroupList = array();
    
    public function addLabel(Label $label){
        $this->_labelList[] = $label;
    }
    
    public function getLabelList(){
        return $this->_labelList;
    }
    
    public function setName($name){
        $this->_name = $name;
    }
    
    public function getName(){
        return $this->_name;
    }
    
    public function addLabelGroup($labelGroup){
        $this->_labelGroupList[] = $labelGroup;
    }
    
    public function getLabelGroupList(){
        return $this->_labelGroupList;
    }
    
    public function toElement($labelGroupElem){
        $labelGroupElem->addAttribute("name",$this->getName());
        if($this->_labelList){
            foreach($this->_labelList as $label){
                $labelElem = $labelGroupElem->addChild("label");
                $labelElem->addAttribute("name",$label->getName());
                $labelElem->addAttribute("value",$label->getValue());
                $labelElem->addAttribute("desc",$label->getDesc());
            }
        }
        
        if($this->_labelGroupList){
            foreach($this->_labelGroupList as $labelGroup){
                $subLabelGroupElem = $labelGroupElem->addChild("label-group");
                $labelGroup->toElement($subLabelGroupElem);
            }
        }
        return $labelGroupElem;
    }
}
?>