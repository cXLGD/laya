<?php
include './config.ini.php';

$model_cond = "WHERE game_model IS NOT NULL";
$model = $db->selectAll('games', '*', $model_cond, 'assoc');
$imgs1 = explode('、', $model[0]['game_img']);
$imgs2 = explode('、', $model[1]['game_img']);

$smarty->assign('imgs1', $imgs1);
$smarty->assign('imgs2', $imgs2);

//echo '<pre>';
//print_r($imgs1);die;


$smarty->display('home/laya_game.tpl');