<?php 
/**
 * PHP version 5
 * 
 * @author 欢乐逛:yuyang <yuyang.huanleguang.com> 
 * @copyright 2014-09-15
 */
namespace Top\schema\factory;
use Top\schema\enums\FieldType;
use Top\schema\enums\RuleType;
use Top\schema\property\Property;
use Top\schema\option\Option;
use Top\schema\label\Label;
use Top\schema\label\LabelGroup;
use Top\schema\depend\DependExpress;
use Top\schema\depend\DependGroup;
use Top\schema\value\ComplexValue;
use Top\schema\exception\TopSchemaException;
use Top\schema\enums\TopSchemaErrorCode;
use Top\schema\util\StringUtil;

class SchemaReader{
    
    public function readXmlFileForList($file,$loadFields = array()){
        $fieldList = array();
        $xmlEle = simplexml_load_file($file);
        $fieldElems = $xmlEle->children();
        foreach($fieldElems as $elem){
            $id = (string)$elem['id'];
            $loadPart = false;
            if($loadFields && !in_array($id,$loadFields)){
                $loadPart = true;
            }
            $field = $this->elementToField($elem,$loadPart);
            if($field){
                $fieldList[] = $field;
            }
        }
        return $fieldList;
    }
    
    public function readXmlFileForMap($file,$loadFields = array()){
        $fieldMap = array();
        $xmlEle = simplexml_load_file($file);
        $fieldElems = $xmlEle->children();
        foreach($fieldElems as $elem){
            $id = (string)$elem['id'];
            $loadPart = false;
            if($loadFields && !in_array($id,$loadFields)){
                $loadPart = true;
            }
            $field = $this->elementToField($elem,$loadPart);
            if($field){
                $fieldMap[$field->getId()] = $field;
            }
        }
        return $fieldMap;
    }
    
    public function readXmlForList($xml,$loadFields = array()){
        $fieldList = array();
        $xmlEle = simplexml_load_string($xml);
        $fieldElems = $xmlEle->children();
        foreach($fieldElems as $elem){
            $id = (string)$elem['id'];
            $loadPart = false;
            if($loadFields && !in_array($id,$loadFields)){
                $loadPart = true;
            }
            $field = $this->elementToField($elem,$loadPart);
            if($field){
                $fieldList[] = $field;
            }
        }
        return $fieldList;
    }
    
    function readXmlForMap($xml,$loadFields = array()){
        $fieldMap = array();
        $xmlEle = simplexml_load_string($xml);
        $fieldElems = $xmlEle->children();
        foreach($fieldElems as $elem){
            $id = (string)$elem['id'];
            $loadPart = false;
            if($loadFields && !in_array($id,$loadFields)){
                $loadPart = true;
            }
            $field = $this->elementToField($elem,$loadPart);
            if($field){
                $fieldMap[$field->getId()] = $field;
            }
        }
        return $fieldMap;
    }
    
    public function elementToField($fieldElem,$loadPart = false){
        $attributes = $fieldElem->attributes();
        $id = (string)$attributes["id"];
        if(StringUtil::isEmpty($id)){
            throw new TopSchemaException(30001, TopSchemaErrorCode::ERROR_CODE_30001,$id);
        }
        $name = (string)$attributes["name"];
        $type = (string)$attributes["type"];
        if(StringUtil::isEmpty($type)){
            throw new TopSchemaException(30002, TopSchemaErrorCode::ERROR_CODE_30002,$id);
        }
        switch($type){
        	case FieldType::INPUT:
        	    $field = $this->elemToInputField($id, $name, $fieldElem, $loadPart);break;
        	case FieldType::SINGLECHECK:
        	    $field = $this->elemToSingleCheck($id,$name,$fieldElem, $loadPart);break;
        	case FieldType::MULTICHECK:
        	    $field = $this->elemToMulitCheck($id, $name, $fieldElem, $loadPart);break;
        	case FieldType::COMPLEX:
        	    $field = $this->elemToComplexField($id, $name, $fieldElem, $loadPart);break;
        	case FieldType::MULTICOMPLEX:
        	    $field = $this->elemToMultiComplexField($id, $name, $fieldElem, $loadPart);break;
        	case FieldType::MULTIINPUT:
        	    $field = $this->elemToMultiInputField($id, $name, $fieldElem,$loadPart);break;
        	case FieldType::LABEL:
        	    $field = $this->elemToLabelField($id,$name,$fieldElem);break;
        	default:
        	    return;
        }
        return $field;
    }
    
    public function elemToInputField($id,$name,$fieldElem,$loadPart = false){
        $inputField = SchemaFactory::createField(FieldType::INPUT);
        $inputField->setId($id);
        $inputField->setName($name);
        if(!$loadPart){
            //部分加载不用解析rules及properties
            if(property_exists($fieldElem, "rules")){
                $rules = $fieldElem->rules->rule;
                foreach($rules as $ruleElem){
                    $rule = $this->elemToRule($ruleElem,$id);
                    $inputField->addRule($rule);
                }
            }
            
            if(property_exists($fieldElem, "properties")){
                $properties = $fieldElem->properties->property;
                foreach($properties as $property){
                    $prop = $this->elemToProperty($property,$id);
                    $inputField->addProperty($prop);
                }
            }
        }
        if(property_exists($fieldElem, "default-value")){
            $defaultValue = $fieldElem->{"default-value"};
            $inputField->setDefaultValue($defaultValue);
        }
        if(property_exists($fieldElem, "value")){
            $value = $fieldElem->value;
            $inputField->setValue($value);
        }
        return $inputField;
    }
    
    public function elemToLabelField($id,$name,$fieldElem,$loadPart = false){
        $labelField = SchemaFactory::createField(FieldType::LABEL);
        $labelField->setId($id);
        $labelField->setName($name);
        if(!$loadPart){
            //部分加载不用解析rules及properties
            if(property_exists($fieldElem, "rules")){
                $rules = $fieldElem->rules->rule;
                foreach($rules as $ruleElem){
                    $rule = $this->elemToRule($ruleElem,$id);
                    $labelField->addRule($rule);
                }
            }
            if(property_exists($fieldElem, "properties")){
                $properties = $fieldElem->properties->property;
                foreach($properties as $property){
                    $prop = $this->elemToProperty($property,$id);
                    $labelField->addProperty($prop);
                }
            }
            if(property_exists($fieldElem, "label-group")){
                $labelGroupElem = $fieldElem->{"label-group"};
                $labelGroup = $this->elemToLabelGroup($labelGroupElem,$id);
                $labelField->setLabelGroup($labelGroup);
            }
        }
        return $labelField;
    }
    
    public function elemToSingleCheck($id,$name,$fieldElem,$loadPart = false){
        $singleCheckField = SchemaFactory::createField(FieldType::SINGLECHECK);
        $singleCheckField->setId($id);
        $singleCheckField->setName($name);
        if(!$loadPart){
            //部分加载不用解析rules及properties
            if(property_exists($fieldElem, "rules")){
                $rules = $fieldElem->rules->rule;
                foreach($rules as $ruleElem){
                    $rule = $this->elemToRule($ruleElem,$id);
                    $singleCheckField->addRule($rule);
                }
            }
            if(property_exists($fieldElem, "options")){
                $options = $fieldElem->options->option;
                foreach($options as $optionElem){
                    $option = $this->elemToOption($optionElem,$id);
                    $singleCheckField->addOption($option);
                }
            }
            if(property_exists($fieldElem, "properties")){
                $properties = $fieldElem->properties->property;
                foreach($properties as $property){
                    $prop = $this->elemToProperty($property,$id);
                    $singleCheckField->addProperty($prop);
                }
            }
        }
        if(property_exists($fieldElem, "default-value")){
            $defaultValue = $fieldElem->{"default-value"};
            $singleCheckField->setDefaultValue($defaultValue);
        }
        if(property_exists($fieldElem, "value")){
            $value = $fieldElem->value;
            $singleCheckField->setValue($value);
        }
        return $singleCheckField;
    }
    
    public function elemToMulitCheck($id,$name,$fieldElem,$loadPart = false){
        $multiCheckField = SchemaFactory::createField(FieldType::MULTICHECK);
        $multiCheckField->setId($id);
        $multiCheckField->setName($name);
        if(!$loadPart){
            if(property_exists($fieldElem, "rules")){
                $rules = $fieldElem->rules->rule;
                foreach($rules as $ruleElem){
                    $rule = $this->elemToRule($ruleElem,$id);
                    $multiCheckField->addRule($rule);
                }
            }
            if(property_exists($fieldElem, "options")){
                $options = $fieldElem->options->option;
                foreach($options as $optionElem){
                    $option = $this->elemToOption($optionElem,$id);
                    $multiCheckField->addOption($option);
                }
            }
            if(property_exists($fieldElem, "properties")){
                $properties = $fieldElem->properties->property;
                foreach($properties as $property){
                    $prop = $this->elemToProperty($property,$id);
                    $multiCheckField->addProperty($prop);
                }
            }
        }
        if(property_exists($fieldElem, "default-values")){
            $defaultValues = $fieldElem->{"default-values"}->{"default-value"};
            foreach($defaultValues as $defaultValue){
                $multiCheckField->addDefaultValues($defaultValue);
            }
        }
        if(property_exists($fieldElem, "values")){
            $values = $fieldElem->values->value;
            foreach($values as $value){
                $multiCheckField->addValues($value);
            }
        }
        return $multiCheckField;
    }
    
    public function elemToMultiComplexField($id,$name,$fieldElem,$loadPart = false){
        $multiComplexField = SchemaFactory::createField(FieldType::MULTICOMPLEX);
        $multiComplexField->setId($id);
        $multiComplexField->setName($name);
        if(!$loadPart){
            if(property_exists($fieldElem, "fields")){
                $fields = $fieldElem->fields->field;
                foreach($fields as $fieldsElem){
                    $field = $this->elementToField($fieldsElem);
                    $multiComplexField->addField($field);
                }
            }
            if(property_exists($fieldElem, "rules")){
                $rules = $fieldElem->rules->rule;
                foreach($rules as $ruleElem){
                    $rule = $this->elemToRule($ruleElem,$id);
                    $multiComplexField->addRule($rule);
                }
            }
            if(property_exists($fieldElem, "properties")){
                $properties = $fieldElem->properties->property;
                foreach($properties as $property){
                    $prop = $this->elemToProperty($property,$id);
                    $multiComplexField->addProperty($prop);
                }
            }
        }
        if(property_exists($fieldElem, "default-values")){
            $complexValues = $fieldElem->{"default-values"}->{"default-complex-values"};
            foreach($complexValues as $complexValue){
                $complexFields = $complexValue->field;
                $complexValue = new ComplexValue();
                foreach($complexFields as $complexField){
                    $subComplexField = $this->elementToField($complexField);
                    $complexValue->put($subComplexField);
                }
                $multiComplexField->addDefaultComplexValues($complexValue);
            }
        }
    
        if(property_exists($fieldElem, "complex-values")){
            $complexValues = $fieldElem->{"complex-values"};
            foreach($complexValues as $complexValue){
                $complexFields = $complexValue->field;
                $complexValue = new ComplexValue();
                foreach($complexFields as $subComplexField){
                    $subComplexField = $this->elementToField($subComplexField);
                    $complexValue->put($subComplexField);
                }
                $multiComplexField->addComplexValues($complexValue);
            }
        }
        return $multiComplexField;
    }
    
    public function elemToComplexField($id,$name,$fieldElem,$loadPart = false){
        $complexField = SchemaFactory::createField(FieldType::COMPLEX);
        $complexField->setId($id);
        $complexField->setName($name);
        if(!$loadPart){
            if(property_exists($fieldElem, "fields")){
                $fields = $fieldElem->fields->field;
                foreach($fields as $fieldsElem){
                    $field = $this->elementToField($fieldsElem);
                    $complexField->addField($field);
                }
            }
            //部分加载不用解析rules及properties
            if(property_exists($fieldElem, "rules")){
                $rules = $fieldElem->rules->rule;
                foreach($rules as $ruleElem){
                    $rule = $this->elemToRule($ruleElem,$id);
                    $complexField->addRule($rule);
                }
            }
            if(property_exists($fieldElem, "properties")){
                $properties = $fieldElem->properties->property;
                foreach($properties as $property){
                    $prop = $this->elemToProperty($property,$id);
                    $complexField->addProperty($prop);
                }
            }
        }
        if(property_exists($fieldElem, "default-complex-values")){
            $complexFields = $fieldElem->{"default-complex-values"}->field;
            $complexValue = new ComplexValue();
            foreach($complexFields as $subComplexField){
                $subComplexField = $this->elementToField($subComplexField);
                $complexValue->put($subComplexField);
            }
            $complexField->setDefaultComplexValue($complexValue);
        }
        
        if(property_exists($fieldElem, "complex-values")){
            $complexFields = $fieldElem->{"complex-values"}->field;
            $complexValue = new ComplexValue();
            foreach($complexFields as $subComplexField){
                $subComplexField = $this->elementToField($subComplexField);
                $complexValue->put($subComplexField);
            }
            $complexField->setComplexValue($complexValue);
        }
        return $complexField;
    }
    
    public function elemToMultiInputField($id,$name,$fieldElem,$loadPart = false){
        $inputField = SchemaFactory::createField(FieldType::MULTIINPUT);
        $inputField->setId($id);
        $inputField->setName($name);
        if(!$loadPart){
            if(property_exists($fieldElem, "rules")){
                $rules = $fieldElem->rules->rule;
                foreach($rules as $ruleElem){
                    $rule = $this->elemToRule($ruleElem);
                    $inputField->addRule($rule);
                }
            }
            if(property_exists($fieldElem, "properties")){
                $properties = $fieldElem->properties->property;
                foreach($properties as $property){
                    $prop = $this->elemToProperty($property,$id);
                    $inputField->addProperty($prop);
                }
            }
        }
        if(property_exists($fieldElem, "default-values")){
            $defaultValues = $fieldElem->{"default-values"}->{"default-value"};
            foreach($defaultValues as $defaultValue){
                $inputField->addDefaultValues($defaultValue);
            }
        }
        if(property_exists($fieldElem, "values")){
            $values = $fieldElem->values->value;
            foreach($values as $value){
                $inputField->addValues($value);
            }
        }
        return $inputField;
    }
    
    public function elemToProperty($property,$id = null){
        $attributes = $property->attributes();
        $key = $this->getAttributes($attributes, "key");
        $value = $this->getAttributes($attributes, "value");
        return new Property($key, $value);   
    }
    
    public function elemToRule($ruleElem,$id = null){
        $attributes = $ruleElem->attributes();
        $ruleName = $this->getAttributes($attributes, "name");
        $ruleValue = $this->getAttributes($attributes, "value");
        $rule = SchemaFactory::createRule($ruleName);
        if(!$rule){
            $rule = SchemaFactory::createCustomRule($ruleName, $ruleValue);
        }
        if(StringUtil::isEmpty($ruleName)){
            throw new TopSchemaException(310001, TopSchemaErrorCode::ERROR_CODE_31001,$id);
        }
        if(StringUtil::isEmpty($ruleValue)){
            throw new TopSchemaException(31002, TopSchemaErrorCode::ERROR_CODE_31002,$id);
        }
        if($ruleName == RuleType::DEV_TIP_RULE && !empty($ruleValue)){
            $url = $this->getAttributes($attributes, "url");
            if(!empty($url)){
                $rule->setUrl($url);
            }
        }
        if($ruleName == RuleType::TIP_RULE){
            $url = $this->getAttributes($attributes, "url");
            if(!empty($url)){
                $rule->setUrl($url);
            }
        }
        if($ruleName == RuleType::MAX_TARGET_SIZE_RULE || $ruleName == RuleType::MIN_TARGET_SIZE_RULE){
            $unit = $this->getAttributes($attributes, "unit");
            if(!empty($unit)){
                $rule->setUnit($unit);
            }
        }
        
        $exProperty = $this->getAttributes($attributes, "exProperty");
        if(!empty($exProperty)){
            $rule->setExProperty($exProperty);
        }
        $rule->setValue($ruleValue);
        if(property_exists($ruleElem,"depend-group")){
            $deGroup = $this->elemToDependGroup($ruleElem->{"depend-group"},$id);
            $rule->setDependGroup($deGroup);
        }
        return $rule;
    }
    
    public function elemToDependGroup($dependElem,$id = null){
        $attributes = $dependElem->attributes();
        $operator = $this->getAttributes($attributes, "operator");
        if(empty($operator)){
            $operator = "and";
        }
        $deGroup = new DependGroup();
        $deGroup->setOperator($operator);
        if(property_exists($dependElem, "depend-express")){
            foreach($dependElem->{"depend-express"} as $dependGroup){
                $de = new DependExpress();
                $attributes = $dependGroup->attributes();
                $fieldId = $this->getAttributes($attributes, "fieldId");
                $value = $this->getAttributes($attributes, "value");
                $symbol = $this->getAttributes($attributes, "symbol");
                $de->setFieldId($fieldId);
                $de->setValue($value);
                $de->setSymbol($symbol);
                $deGroup->addDependExpress($de);        
            }
        }
        if(property_exists($dependElem, "depend-group")){
            foreach($dependElem->{"depend-group"} as $subDependGroupElem){   
                $subGroup = $this->elemToDependGroup($subDependGroupElem);
                $deGroup->addDependGroup($subGroup);
            }
        }
        return $deGroup;
    }
    
    public function elemToLabelGroup($labelGroupEle,$id = null){
        $attributes = $labelGroupEle->attributes();
        $name = $this->getAttributes($attributes,"name");
        $labelGroup = new LabelGroup();
        $labelGroup->setName($name);
        if(property_exists($labelGroupEle,"label")){
            foreach($labelGroupEle->label as $labelEle){
                $attributes = $labelEle->attributes();
                $labelName = $this->getAttributes($attributes,"name");
                $labelValue = $this->getAttributes($attributes,"value");
                $labelDesc = $this->getAttributes($attributes,"desc");
                $label = new Label();
                $label->setName($labelName);
                $label->setValue($labelValue);
                $label->setDesc($labelDesc);
                $labelGroup->addLabel($label);
            }
        }
        if(property_exists($labelGroupEle, "label-group")){
            $subGroupList = $labelGroupEle->{"label-group"};
            foreach($subGroupList as $subGroupElem){
                $subLabelGroup = $this->elemToLabelGroup($subGroupElem);
                $labelGroup->addLabelGroup($subLabelGroup);
            }
        }
        return $labelGroup;
    }
    
    public function elemToOption($optionElem,$id = null){
        $attributes = $optionElem->attributes();
        $displayName = $this->getAttributes($attributes, "displayName");
        $value = $this->getAttributes($attributes, "value");
        if(StringUtil::isEmpty($displayName)){
            throw new TopSchemaException(33001, TopSchemaErrorCode::ERROR_CODE_33001,$id);
        }
        if(StringUtil::isEmpty($value)){
           throw new TopSchemaException(33002, TopSchemaErrorCodeEnum.ERROR_CODE_33002,$id);
        }
        $optionResult = new Option();
        $optionResult->setDisplayName($displayName);
        $optionResult->setValue($value);
        
        if(property_exists($optionElem,"depend-group")){
            $deGroup = $this->elemToDependGroup($optionElem->{"depend-group"});
            $optionResult->setDependGroup($deGroup);
        }
        return $optionResult;
    }
    
    public function getAttributes($attributes,$key){
        if(isset($attributes[$key])){
            $value = (string)$attributes[$key];
            $value === 'false' && $value = false;
            $value === 'true' && $value = true;
            return $value;
        }
        return "";
    }
}
?>
