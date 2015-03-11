<?php 
namespace Top\schema\enums;

class TopSchemaErrorCode{
    const ERROR_CODE_10001 = "Cannot find File!Please check your file path!";
    const ERROR_CODE_10002 = "Create Document Exception!ParserConfigurationException!";
    const ERROR_CODE_20010 = "Illegal Value,MaxLengthRule check failed!";
    const ERROR_CODE_20020 = "Illegal Value,MinLengthRule check failed!";
    const ERROR_CODE_20030 = "Illegal Value,ValueTypeRule check failed!Field's value is not a decimal!";
    const ERROR_CODE_20031 = "Illegal Value,ValueTypeRule check failed!Field's value is not a integer!";
    const ERROR_CODE_20032 = "Illegal Value,ValueTypeRule check failed!Field's value is not a date!";
    const ERROR_CODE_20033 = "Illegal Value,ValueTypeRule check failed!Field's value is not a time!";
    const ERROR_CODE_20034 = "Illegal Value,ValueTypeRule check failed!Field's value is not a url!";
    const ERROR_CODE_20040 = "RequiredRule check failed!Field's value should not be null!";
    const ERROR_CODE_20050 = "MaxValueRule check failed!Field's value is not a Number!";
    const ERROR_CODE_20051 = "MaxValueRule check failed!";
    const ERROR_CODE_20060 = "MinValueRule check failed!Field's value is not a Number!";
    const ERROR_CODE_20061 = "MinValueRule check failed!";
    const ERROR_CODE_20070 = "MaxCheckNumRule check failed!";
    const ERROR_CODE_20080 = "MinCheckNumRule check failed!";
    const ERROR_CODE_20090 = "InputRule check failed!FieldValue is not from fieldOptions!";
    const ERROR_CODE_20100 = "RegexRule check failed!FieldValue not matches regex!";
    const ERROR_CODE_30001 = "Field format error!Field's id should not be null!";
    const ERROR_CODE_30002 = "Field format error!Field's type should not be null!";
    const ERROR_CODE_30003 = "Field format error!Field's type is illegal!";
    const ERROR_CODE_31001 = "Rule format error!Rule's name should not be null!";
    const ERROR_CODE_31002 = "Rule format error!Rule's value should not be null!";
    const ERROR_CODE_31003 = "Rule format error!Rule's value is illegal!";
    const ERROR_CODE_32001 = "Depend format error!Depend's fieldId should not be null!";
    const ERROR_CODE_32002 = "Depend format error!Depend's value should not be null!";
    const ERROR_CODE_33001 = "Option format error!Option's displayName should not be null!";
    const ERROR_CODE_33002 = "Option format error!Option's value should not be null!";
    const ERROR_CODE_30010 = "MaxLengthRule format error!MaxLengthRule is not an Integer!";
    const ERROR_CODE_30020 = "MinLengthRule format error!MinLengthRule is not an Integer!";
    const ERROR_CODE_30030 = "ValueTypeRule format error!ValueType is illegal!";
    const ERROR_CODE_30050 = "MaxValueRule format error!MaxValueRule is not an Integer!";
    const ERROR_CODE_30060 = "MinValueRule format error!MinValueRule is not an Integer!";
    const ERROR_CODE_30070 = "MaxCheckNumRule format error!MaxCheckNumRule is not an Integer!";
    const ERROR_CODE_30080 = "MinCheckNumRule format error!MinCheckNumRule is not an Integer!";
    const ERROR_CODE_40000 = "Util Error!";
    
}
?>