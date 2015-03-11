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
use Top\schema\rule\DefaultRule;

class SchemaFactory{

    public static function createField($type,$id = null){
        $field = FieldType::createField($type);
        if($id){
            $field->setId($id);
        }
        return $field;
    }
    
    public static function createRule($type){
        return RuleType::createRule($type);
    }
    
    public static function createCustomRule($ruleName,$ruleValue,$exProperty = null){
        return new DefaultRule($ruleName,$ruleValue,$exProperty);
    }
}
?>
