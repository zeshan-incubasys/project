<?php
if($_SERVER['HTTP_HOST']=='localhost'||$_SERVER['SERVER_NAME']=='localhost')
{
    $project_name="Etimad";
    define('BASE_URL',"http://localhost/project/$project_name/");
}else
{
    define('BASE_URL','http://incubasys.info/etimad/');// http://sitename.com/
}
define('CSS_URL',BASE_URL."css/");
define('IMAGE_URL',BASE_URL."images/");
define('JS_URL',BASE_URL."js/");
?>
