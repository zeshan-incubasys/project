<?php
if($_SERVER['HTTP_HOST']=='localhost'||$_SERVER['SERVER_NAME']=='localhost')
{
    $project_name="jobportal";
    define('BASE_URL',"http://localhost/project/$project_name/");
}else
{
	$project_name="jobportal";
    define('BASE_URL',"http://192.168.1.32/project/$project_name/");// http://sitename.com/
}
define('CSS_URL',BASE_URL."css/");
define('IMAGE_URL',BASE_URL."images/");
define('JS_URL',BASE_URL."js/");
?>
