<?php 
/**
 * PHP version 5
 * 
 * @author 欢乐逛:yuyang <yuyang.huanleguang.com> 
 * @copyright 2014-09-15
 */
namespace Top\schema\factory;
use Top\schema\field\Field;

class SchemaWriter{
    public $coverWithDefault = false;
    
    public function writeRuleXml($fields,$saveFile = null){
        if($fields){
            $xml = "<itemRule>";
            foreach($fields as $field){
                if($field instanceof Field){
                    $xml .= $field->toElement()->asXML();
                }
            }
            $xml .= "</itemRule>";
            if($saveFile){
                file_put_contents($saveFile, $xml);
                return;
            }
            return $xml;
        }
        return null;
    }
    
    public function writeParamXml($fields,$saveFile = null){
        if($fields){
            $xml = "<itemParam>";
            foreach($fields as $field){
                if($field instanceof Field){
                    if($this->coverWithDefault){
                        $field->setValueWithDefault();
                    }
                    $xml .= $field->toParamElement()->asXML();
                }
            }
            $xml .= "</itemParam>";
            if($saveFile){
                file_put_contents($saveFile, $xml);
                return;
            }
            return $xml;
        }
        return null;
    }
}
?>
