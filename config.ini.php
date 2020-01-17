<?php
define('ROOT', str_replace('\\', '/', dirname(__FILE__)).'/');
//echo ROOT;

include ROOT.'includes/libs/Smarty.class.php';
include ROOT.'includes/MySqlDb.class.php';

$smarty = new Smarty();

//设置模板文件目录
$smarty->setTemplateDir(ROOT.'views/');

//设置编译文件目录
$smarty->setCompileDir(ROOT.'compiles/');

//设置缓存文件目录
$smarty->setCacheDir(ROOT.'smarty_cache/');

//设置配置文件目录
//$smarty->setConfigDir(ROOT.'conf');

$smarty->caching = false; 	//是否使用缓存，项目在调试期间，不建议启用缓存
//$smarty->cache_lifetime=60*60*24; // 设置缓存时间

//左右边界符，默认为{}
//$smarty->left_delimiter = "<{";
//$smarty->right_delimiter = "}>";

//推荐
$smarty->setLeftDelimiter("<{");
$smarty->setRightDelimiter("}>");

//配置数据库
$config = [
    'host'=>'localhost',
    'user'=>'root',
    'pwd'=>123456,
    'dbname'=>'laya',
    'prefix'=>'laya_'
];
//实例化数据库对象
$db = MySqlDb::getInstance($config);

