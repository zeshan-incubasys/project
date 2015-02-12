<?php
if($_SERVER['HTTP_HOST']=='localhost'||$_SERVER['SERVER_NAME']=='localhost')
{
<<<<<<< HEAD
    $project_name="project/spacefynd";
    define('BASE_URL',"http://localhost/$project_name/");
}else
{
    define('BASE_URL','http://incubasys.info/spacefynd/');// http://sitename.com/
=======
    $project_name="spacefynd";
    define('BASE_URL',"http://localhost/project/$project_name/");
}
else
{
    $project_name="spacefynd";
    define('BASE_URL',"http://192.168.1.46/project/$project_name/");    
>>>>>>> e49aa4eb2121698ea69e861d3835c8c8524f7a2e
}
define('CSS_URL',BASE_URL."css/");
define('IMAGE_URL',BASE_URL."images/");
define('JS_URL',BASE_URL."js/");
?>
