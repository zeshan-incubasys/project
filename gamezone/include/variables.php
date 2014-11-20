<?php
if($_SERVER['HTTP_HOST']=='localhost'||$_SERVER['SERVER_NAME']=='localhost')
{
    $project_name="template";
    define('BASE_URL',"http://localhost/project/$project_name/");
}else
{
    define('BASE_URL','http://incubasys.com/');// http://sitename.com/
}
define('CSS_URL',BASE_URL."css/");
define('IMAGE_URL',BASE_URL."images/");
define('JS_URL',BASE_URL."js/");
?>
