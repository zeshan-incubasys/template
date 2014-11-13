<?php
if($_SERVER['HTTP_HOST']=='localhost'||$_SERVER['SERVER_NAME']=='localhost')
{
    $project_name="template";
    define('BASE_URL',"http://localhost/$project_name/");
}else
{
    define('BASE_URL','http://incubasys.com/');// http://sitename.com/
}
?>
