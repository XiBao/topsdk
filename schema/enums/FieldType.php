<?php 
namespace Top\schema\enums;
use Top\schema\field\InputField;
use Top\schema\field\MultiInputField;
use Top\schema\field\SingleCheckField;
use Top\schema\field\MultiCheckField;
use Top\schema\field\ComplexField;
use Top\schema\field\MultiComplexField;
use Top\schema\field\LabelField;


class FieldType{
    const INPUT = 'input';
    const MULTIINPUT = 'multiInput';
    const MULTICHECK = 'multiCheck';
    const SINGLECHECK = 'singleCheck';
    const COMPLEX = 'complex';
    const MULTICOMPLEX = 'multiComplex';
    const LABEL = 'label';
    
    public static function createField($type){
        switch($type){
            case self::INPUT:
                $field = new InputField();
                break;
            case self::MULTIINPUT:
                $field = new MultiInputField();
                break;
            case self::SINGLECHECK:
                $field = new SingleCheckField();
                break;
            case self::MULTICHECK:
                $field = new MultiCheckField();
                break;
            case self::COMPLEX:
                $field = new ComplexField();
                break;
            case self::MULTICOMPLEX:
                $field = new MultiComplexField();
                break;
            case self::LABEL:
                $field = new LabelField();
                break;
        }
        return $field;
    }
}
?>