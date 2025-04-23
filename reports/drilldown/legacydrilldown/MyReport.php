<?php
require_once "../../../common.php";

class MyReport extends \koolreport\KoolReport
{
    //use \koolreport\amazing\Theme;
    function settings()
    {
        //Get default connection from config.php
        $config = getConfig();
        return array(
            "dataSources"=>array(
                "automaker"=>$config["automaker"]
            )
        );

    }
    function setup()
    {

    }
}