<?php
$db = new mysqli("localhost", "root", "", "med");
require_once("./vendor/autoload.php");
$smarty = new Smarty();

$smarty->setTemplateDir('./templates');
$smarty->setCompileDir('./templates_c');
$smarty->setCacheDir('./cache');
$smarty->setConfigDir('./configs');

$smarty->display("test.tpl");


?>