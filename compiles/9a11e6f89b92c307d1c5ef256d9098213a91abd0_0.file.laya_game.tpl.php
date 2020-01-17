<?php
/* Smarty version 3.1.34-dev-7, created on 2020-01-17 12:17:01
  from 'D:\phpstudy_pro\WWW\projects\www.laya.io\views\home\laya_game.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e21353d91d2d9_19722184',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9a11e6f89b92c307d1c5ef256d9098213a91abd0' => 
    array (
      0 => 'D:\\phpstudy_pro\\WWW\\projects\\www.laya.io\\views\\home\\laya_game.tpl',
      1 => 1579234619,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./header.tpl' => 1,
    'file:./footer.tpl' => 1,
  ),
),false)) {
function content_5e21353d91d2d9_19722184 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:./header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<link rel="stylesheet" href="./static/home/css/laya_game.css">

    <!-- banner -->
    <div class="container-fluid banner">
        <div class="row">
            <div class="banner-img">
                <img src="./static/home/images/game-slider-01.jpg" class="img-responsive center-block" alt="">
            </div>
        </div>
    </div>

    <!-- game-1 -->
    <section>
        <div class="container-fluid game-1">
            <div class="container">
                <div class="row">
                    <div class="media">
                        <div class="media-left col-xs-12 col-sm-4">
                            <a href="#">
                                <img class="media-object img-responsive" src="./static/home/images/game_bg_02.png"
                                    class="img-responsive" alt="...">
                            </a>
                        </div>
                        <div class="media-body col-xs-12 col-sm-8">
                            <h4 class="media-heading text-right">猎刃2</h4>
                            <p class="text-right">
                                2015年Q版魔幻手游诚心之作，超魔幻ARPG之作! ! !无可挑剔的简单操作,无与伦比的爽快打击感,无处不在的惊
                                喜!无穷无尽的回忆!全部技能100%还原,高清华丽特效,体验视觉盛宴;超写实画风,完美重现经典副本;让我们一
                                起来，挑战恶魔,乱斗魔兽!</p>
                            <div class="row">
                                <?php
$__section_imgs1_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['imgs1']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_imgs1_0_total = $__section_imgs1_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_imgs1'] = new Smarty_Variable(array());
if ($__section_imgs1_0_total !== 0) {
for ($__section_imgs1_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_imgs1']->value['index'] = 0; $__section_imgs1_0_iteration <= $__section_imgs1_0_total; $__section_imgs1_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_imgs1']->value['index']++){
?>
                                    <div class="media col-xs-6">
                                        <div class="media-left">
                                            <a href="#">
                                                <img class="media-object img-responsive" src="./$imgs1[imgs1]"
                                                    alt="...">
                                            </a>
                                        </div>
                                    </div>

                                <?php
}
}
?>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- game-2 -->
    <section>
        <div class="container-fluid game-2">
            <div class="container">
                <div class="row">
                    <div class="media">
                        <div class="media-body col-xs-12 col-sm-8">
                            <h4 class="media-heading text-left">上吧公主</h4>
                            <p class="text-left">
                                《上吧主公》是一款以三国为背景Q版 卡牌游戏,游戏与普通三国题材不同,它以萌萌哒猫咪为三国众名将构筑出别具一
                                格的游戏世界观。画面Q萌, 技能华丽炫酷,集养成、收集、策略、卡牌于-体.三国初始群雄争霸，奇妙的名将会帮
                                你掌握胜算左右战况</p>
                            <div class="row">
                                <div class="media col-xs-6">
                                    <div class="media-left">
                                        <a href="#">
                                            <img class="media-object img-responsive center-block"
                                                src="./static/home/images/1449475125524497.jpg" alt="...">
                                        </a>
                                    </div>
                                </div>
                                <div class="media col-xs-6">
                                    <div class="media-left">
                                        <a href="#">
                                            <img class="media-object img-responsive" src="./static/home/images/1449475113979819.jpg"
                                                alt="...">
                                        </a>
                                    </div>
                                </div>
                                <div class="media col-xs-6">
                                    <div class="media-left">
                                        <a href="#">
                                            <img class="media-object img-responsive" src="./static/home/images/1449475097365981.jpg"
                                                alt="...">
                                        </a>
                                    </div>
                                </div>
                                <div class="media col-xs-6">
                                    <div class="media-left">
                                        <a href="#">
                                            <img class="media-object img-responsive" src="./static/home/images/1449025042590541.jpg"
                                                alt="...">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="media-right col-xs-12 col-sm-4">
                            <a href="#">
                                <img class="media-object img-responsive center-block" src="./static/home/images/game_bg_01.png"
                                    class="img-responsive" alt="...">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- game-items -->
    <section>
        <div class="container-fluid games">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 games-title">
                        <h1>更多案例</h1>
                    </div>
                    <div class="col-xs-4 games-items text-center">
                        <img src="./static/home/images/1448711275495130.jpg" class="img-responsive center-block" alt="">
                        <div class="p">《醉西游》是一款以西游记题材为背景的ARPG游
                            戏，采用Layabox引擎开发，唯美的画面、音乐悠
                            扬，极具神话感；流畅的战斗，有趣的剧情、炫酷的
                            职业、华丽的技能、神秘的副本、激烈的仙战……</div>
                        <span>醉西游</span>
                    </div>
                    <div class="col-xs-4 games-items text-center">
                        <img src="./static/home/images/1445781266689695.jpg" class="img-responsive center-block" alt="">
                        <span>魔卡幻想</span>
                    </div>
                    <div class="col-xs-4 games-items text-center">
                        <img src="./static/home/images/1449476978942516.jpg" class="img-responsive center-block" alt="">
                        <span>超能战队</span>
                    </div>
                    <div class="col-xs-4 games-items text-center">
                        <img src="./static/home/images/1445781097892921.jpg" class="img-responsive center-block" alt="">
                        <span>轰三国</span>
                    </div>
                    <div class="col-xs-4 games-items text-center">
                        <img src="./static/home/images/1448710962936495.jpg" class="img-responsive center-block" alt="">
                        <span>刀塔大菠萝</span>
                    </div>
                    <div class="col-xs-4 games-items text-center">
                        <img src="./static/home/images/1448862166573514.jpg" class="img-responsive center-block" alt="">
                        <span>迷你猎人</span>
                    </div>
                    <div class="col-xs-4 games-items text-center">
                        <img src="./static/home/images/1445781183162355.jpg" class="img-responsive center-block" alt="">
                        <span>萌挂三国</span>
                    </div>
                    <div class="col-xs-4 games-items text-center">
                        <img src="./static/home/images/1449025078167894.jpg" class="img-responsive center-block" alt="">
                        <span>战争之门</span>
                    </div>
                    <div class="col-xs-4 games-items text-center">
                        <img src="./static/home/images/1448862365599311.jpg" class="img-responsive center-block" alt="">
                        <span>英雄争霸</span>
                    </div>
                    <div class="col-xs-4 games-items text-center">
                        <img src="./static/home/images/1448970577815762.jpg" class="img-responsive center-block" alt="">
                        <span>二战传奇</span>
                    </div>
                    <div class="col-xs-4 games-items text-center">
                        <img src="./static/home/images/1449024632900176.jpg" class="img-responsive center-block" alt="">
                        <span>龙吟三国</span>
                    </div>
                    <div class="col-xs-4 games-items text-center">
                        <img src="./static/home/images/1449475033640275.jpg" class="img-responsive center-block" alt="">
                        <span>哟狐狸精</span>
                    </div>
                    <div class="col-xs-4 games-items text-center">
                        <img src="./static/home/images/1449487618343671.jpg" class="img-responsive center-block" alt="">
                        <span>熊来啦</span>
                    </div>
                    <div class="col-xs-4 games-items text-center">
                        <img src="./static/home/images/1445781290642012.jpg" class="img-responsive center-block" alt="">
                        <span>我爱我家</span>
                    </div>
                    <div class="col-xs-4 games-items text-center">
                        <img src="./static/home/images/1449024989678035.jpg" class="img-responsive center-block" alt="">
                        <span>夺塔三国</span>
                    </div>
                    <div class="col-xs-4 games-items text-center">
                        <img src="./static/home/images/1449487782878473.jpg" class="img-responsive center-block" alt="">
                        <span>西游快跑</span>
                    </div>
                    <div class="col-xs-4 games-items text-center">
                        <img src="./static/home/images/1449576752718244.jpg" class="img-responsive center-block" alt="">
                        <span>德州扑克</span>
                    </div>
                    <div class="col-xs-4 games-items text-center">
                        <img src="./static/home/images/1452242709170717.png" class="img-responsive center-block" alt="">
                        <span>神魔快打</span>
                    </div>
                    <div class="col-xs-4 games-items text-center">
                        <img src="./static/home/images/1449477510961384.jpg" class="img-responsive center-block" alt="">
                        <span>鬼吹灯</span>
                    </div>
                    <div class="col-xs-4 games-items text-center">
                        <img src="./static/home/images/1449480093386784.jpg" class="img-responsive center-block" alt="">
                        <span>挂机三国</span>
                    </div>
                    <div class="col-xs-4 games-items text-center">
                        <img src="./static/home/images/1449480490476231.jpg" class="img-responsive center-block" alt="">
                        <span>三国仙侠传</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php $_smarty_tpl->_subTemplateRender("file:./footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
