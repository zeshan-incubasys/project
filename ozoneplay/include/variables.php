<?php
if($_SERVER['HTTP_HOST']=='localhost'||$_SERVER['SERVER_NAME']=='localhost')
{
    $project_name="ozoneplay";
    define('BASE_URL',"http://localhost/$project_name/");
}else
{

	  define('BASE_URL','http://192.168.0.102/ozoneplay/');// http://sitename.com/
}
//die(BASE_URL);
define('CSS_URL',BASE_URL."css/");
define('IMAGE_URL',BASE_URL."images/");
define('JS_URL',BASE_URL."js/");
?>
