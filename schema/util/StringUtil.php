<?php 
namespace Top\schema\util;

class StringUtil{
    public static function isEmpty($str){
        if(is_numeric($str)){
            return false;
        }
        if(is_null($str) || (is_string($str) && empty($str))){
            return true;
        }
        return false;
    }
    
    /**
     * 格式化输出字符串 bool值转字符串,encode 支持
     * @param unknown $str
     * @return string
     */
    public static function format($str,$encode = true){
        $str === false && $str = 'false';
        $str === true && $str = 'true';
        if($encode){
            return htmlspecialchars($str);
        }else{
            return $str;
        }
    }
}
?>