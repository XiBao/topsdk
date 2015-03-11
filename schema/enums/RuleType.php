<?php 
namespace Top\schema\enums;

use Top\schema\rule\Rule;

class RuleType{
    const MAX_LENGTH_RULE = "maxLengthRule";
    const MAX_VALUE_RULE = "maxValueRule";
    const MIN_VALUE_RULE = "minValueRule";
    const MAX_INPUT_NUM_RULE = "maxInputNumRule";
    const MIN_INPUT_NUM_RULE = "minInputNumRule";
    const VALUE_TYPE_RULE = "valueTypeRule";
    const REQUIRED_RULE = "requiredRule";
    const DISABLE_RULE = "disableRule";
    const MAX_DECIMAL_DIGITS_RULE = "maxDecimalDigitsRule";
    const MIN_DECIMAL_DIGITS_RULE = "minDecimalDigitsRule";
    const REGEX_RULE = "regexRule";
    const SET_RULE = "setRule";
    const TIP_RULE = "tipRule";
    const DEV_TIP_RULE = "devTipRule";
    const READ_ONLY_RULE = "readOnlyRule";
    const MAX_TARGET_SIZE_RULE = "maxTargetSizeRule";
    const MIN_TARGET_SIZE_RULE = "minTargetSizeRule";
    const MAX_IMAGE_SIZE_RULE = "maxImageSizeRule";
    const MIN_IMAGE_SIZE_RULE = "minImageSizeRule";
            
    public static function createRule($ruleType){
        switch($ruleType){
        	case self::MAX_LENGTH_RULE:
        	case self::MAX_VALUE_RULE:
        	case self::MIN_VALUE_RULE:
        	case self::MAX_INPUT_NUM_RULE:
    	    case self::MIN_INPUT_NUM_RULE:   
    	    case self::VALUE_TYPE_RULE:     
    	    case self::REQUIRED_RULE:	        
    	    case self::DISABLE_RULE:	       
    	    case self::MAX_DECIMAL_DIGITS_RULE:    	        
    	    case self::MIN_DECIMAL_DIGITS_RULE:    	       
    	    case self::REGEX_RULE:    	        
    	    case self::SET_RULE:    	        
    	    case self::TIP_RULE:    	        
    	    case self::DEV_TIP_RULE:    	        
    	    case self::READ_ONLY_RULE:    	       
    	    case self::MAX_TARGET_SIZE_RULE:  	        
    	    case self::MIN_TARGET_SIZE_RULE:    	        
    	    case self::MAX_IMAGE_SIZE_RULE:    	        
    	    case self::MIN_IMAGE_SIZE_RULE:
                $rule = new Rule();
                $rule->setName($ruleType);
                return $rule;    	        
    	    default:
    	        return null;
    	        break;
        }
    }
            
}
?>