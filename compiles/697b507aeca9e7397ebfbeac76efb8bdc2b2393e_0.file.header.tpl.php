<?php
/* Smarty version 3.1.34-dev-7, created on 2020-01-17 08:59:00
  from 'D:\phpstudy_pro\WWW\projects\www.laya.io\views\home\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e2106d49616e8_29024096',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '697b507aeca9e7397ebfbeac76efb8bdc2b2393e' => 
    array (
      0 => 'D:\\phpstudy_pro\\WWW\\projects\\www.laya.io\\views\\home\\header.tpl',
      1 => 1579222738,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e2106d49616e8_29024096 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="zh-CN">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <title>laya</title>

    <!-- Bootstrap -->
    <!-- <link rel="stylesheet" href="resources/bootstrap/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="./static/home/css/normalize.css">
    <link href="./static/home/css/bootstrap.css" rel="stylesheet">


    <!-- HTML5 shim 和 Respond.js 是为了让 IE8 支持 HTML5 元素和媒体查询（media queries）功能 -->
    <!-- 警告：通过 file:// 协议（就是直接将 html 页面拖拽到浏览器中）访问页面时 Respond.js 不起作用 -->
    <!--[if lt IE 9]>
    <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/html5shiv@3.7.3/dist/html5shiv.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/respond.js@1.4.2/dest/respond.min.js"><?php echo '</script'; ?>
>
    <![endif]-->
</head>

<body>
<!-- 导航条 -->
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">
                <img src="./static/home/images/logo.png" class="img-responsive" alt="">
            </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="active"><a href="index.php">首页 <span class="sr-only">(current)</span></a></li>
                <li><a href="family.php">Laya家族</a></li>
                <li><a href="laya_game.php">游戏</a></li>
                <li><a href="new.php">新闻动态</a></li>
                <li><a href="#">开发者中心</a></li>
                <li><a href="#">开发者社区</a></li>
                <li><a href="#">开放平台</a></li>
                <li><a href="about.php">关于我们</a></li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                       aria-expanded="false">Language <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">中文</a></li>
                        <li><a href="#">English</a></li>
                    </ul>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav><?php }
}
