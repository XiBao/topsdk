<?php 

class TopSdk
{
    public static function autoloader_base($name) {
        //echo "Want to load $name.\n";
        //global $api_home;
        try{
            include_once APPPATH.'vendor/topsdk/'.$name.'.php';;
        }catch(Exception $e) {
            try{
                include_once APPPATH.'vendor/topsdk/request/'.$name.'.php';;
            }catch(Exception $e) {
                echo $e->getMessage(), "\n";
                throw new Exception("Unable to load $name.");
            }
        }
    }
}
spl_autoload_register(array('TopSdk', 'autoloader_base'));