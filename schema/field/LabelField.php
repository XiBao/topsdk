<?php 
namespace Top\schema\field;
use Top\schema\enums\FieldType;
use Top\schema\label\LabelGroup;
use Top\schema\label\Label;
use Top\schema\util\StringUtil;
use Top\schema\exception\TopSchemaException;
use Top\schema\enums\TopSchemaErrorCode;

class LabelField extends Field{
    protected $_labelGroup;
    
    public function __construct(){
        $this->_type = FieldType::LABEL;
        $this->_labelGroup = new LabelGroup();
    }
    
    public function addLabel(Label $label){   
        $this->_labelGroup->addLabel($label);
    }
    
    public function setLabelGroup(LabelGroup $labelGroup){
        $this->_labelGroup = $labelGroup;
    }
    
    public function toParamElement($fieldElem = null){
        if(is_null($fieldElem)){
            $fieldElem = new \SimpleXMLElement("<?xml version='1.0' encoding='utf-8'?><itemParam><field></field></itemParam>");
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
        if(!StringUtil::isEmpty($name)){
            $fieldElem->addAttribute("name",$name);
        }
        $fieldElem->addAttribute("type",$type);
        return $fieldElem;
    }
    
    public function toElement($fieldElem = null){
        $fieldElem = parent::toElement($fieldElem);
        if($this->_labelGroup){
            $this->_labelGroup->toElement($fieldElem->addChild("label-group"));
        }
        return $fieldElem;
    }
    
    public function setValueWithDefault(){
        return null;
    }
    
    public function toDefaultValueElement($fieldElem){
        /** LabelField has not default value */
        return null;
    }
}
?>