<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head> 
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
        <title><?php echo $seo['title']?></title>
        <meta name="keywords" content="<?php echo $seo['keywords']?>" /> 
        <meta name="description" content="<?php echo $seo['description']?>" /> 
        <link rel="shortcut icon" href="Public/images/favicon.ico" type="image/x-icon" /> 
        <link rel="stylesheet" href="<?php echo css_js_url('style.css','www')?>" type="text/css" /> 
                
    </head> 
    <body> 
        <div id="site_nav">
            <div  class="sn_container clearfix">
                <ul class="tg_tools fr">
                    <li class="no-hover">
                        <a href="member_pay.html" class="head_pay_btn">充值</a>
                    </li>
                    <li class="no-hover">
                        <a id="msg_notify" class="msg_notify" href="member_message.html"></a>
                    </li>
                    <li class='box_color nav_home'>
                        <span><a href="member_info.html">个人中心</a></span><b class="icon"></b>
                        <ul>
                            <li><a href="member_info.html"><span>我的主页</span></a></li>
                            <li><a href="member_set.html"><span>个人设置</span></a></li>
                            <li><a href="member_downloads.html"><span>下载记录</span></a></li>
                            
                            <li><a href="member_sign.html"><span>我的签到</span></a></li>
                            <li><a href="/Download/logout?r="><span>退出登录</span></a></li>
                        </ul>
                    </li>
                    <li class="tg-line icon"></li>
                    <li class='box_color'>
                        <span>帮助中心</span><b class="icon"></b>
                        <ul>
                            <li><a href="help.html"><span>扒模板</span></a></li>
                            <li><a href="help.html"><span>积分获取</span></a></li>
                            <li><a href="help.html"><span>联系我们</span></a></li>
                            <li><a href="help.html"><span>关于我们</span></a></li>
                            <li><a href="help.html"><span>招纳贤士</span></a></li>
                        </ul>
                    </li>
                </ul>
                <ul class="tg_tools fl" id="login_area" >
                    <li class="tg_tools_home no-hover"><i class="icon-more"></i><span><a href="index.html"><?php echo $seo['title']?>首页</a></span></li>
                    <li class="no-hover nologin"><span><a href="/Index/login/type/qq.html"><img alt="Connect_logo_6.png" src="http://qzonestyle.gtimg.cn/qzone/vas/opensns/res/img/Connect_logo_6.png" style="position: relative;top:3px;"/></a></span></li>
                </ul>
            </div>
        </div>
        <div id="header">
            <div class="tg_tools_home">
                <div class="bbs_enter">
                    <a class="bbs-banner"  href="help.html" target="_blank"><img src="Public/images/other/banner.jpg" alt="扒模板"/></a>
                </div>
                <div class="logo">
                    <a class="logo-bd" href="index.html"><img style="width:200px;hight:71px" src="<?php echo $domain['static']['url'].'/www/images/logo.jpg';?>" alt="<?php echo $seo['title']?>"/></a>
                </div>
                <form action="search.html" method="GET" id="form_search" onsubmit="return searchSub()">
                    <div id='search'>
                        <div class="search_area">
                            <input type='submit' value='搜 索' class='btn_search'/>
                            <div class="search_select">
                                <span class="icon-search"></span>
                            </div>
                            <input type='text' value='请输入搜索内容'  class="search_input"  autocomplete="off" id="search_input" data-default="请输入搜索内容" onblur="checkInputBlur($(this))" onfocus="checkInputFocus($(this))" />
                            <input type="hidden" name="keyword"/>
                        </div>
                        <div class="search_box hide" id="search_box"></div>
                        <div class='search_keywords' >
                            <span>热门搜索：</span>
                            <a href="/search/search.html?keyword=手机" class="red">手机</a>
                            <a href="js.html?/8-0-0-0">导航菜单</a>
                            <a href="/search/search.html?keyword=bootstrap">bootstrap</a>
                            <a href="/search/search.html?keyword=后台">后台</a>
                            <a href="/search/search.html?keyword=上传"class="red">上传</a>
                            <a href="/search/search.html?keyword=购物车">购物车</a>
                            <a href="js.html?/106-0-0-0" class="red">日期时间</a>
                            <a href="/search/search.html?keyword=弹出层">弹出层</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div id='nav' class='nav'>
            <div class='nav_main clearfix'>
                <a href='' class="menu current">首 页</a>
                <a href='js.html?' class="menu">jQuery特效</a>
                <a href='js.html?' class="menu">PHP</a>
                <a href='js.html?' class="menu">网站模板</a>
                <!--                <a href='/psd' class="menu">网站psd</a>-->
                                <a href='topic.html' class="menu">话题社区</a>
                <a href='js.html?' class="menu">精选网址</a>
                <a href='tool.html?' class="menu">工具箱</a>
                <a href='help.html' class="menu">扒模板</a>
                <!--                <a href='' class="menu" target="_blank">服务器</a>-->
                <span class='icon_hot'></span>
            </div>
        </div>
<div class="container">
    <div class="index_per index_first clearfix">
        <div class="sidebar_per sidebar_first">
            <dl>
                <dt>
                <a href="js.html?/" class="more">更多&nbsp;<span class="more-sign">&gt;</span></a>
                <strong>最新更新 <span class="name-en">/New</span></strong>
                </dt>
                <dd class="sidebar_articles">
                        <span>03-04</span>
                        <a target="_blank"  href="js.html?/712.html">Thinkphp定时执行任务</a>
                    </dd><dd class="sidebar_articles">
                        <span>02-04</span>
                        <a target="_blank"  href="js.html?/442.html">英锐芯全套蓝色企业模板下载</a>
                    </dd><dd class="sidebar_articles">
                        <span>02-04</span>
                        <a target="_blank"  href="js.html?/441.html">基于ace的CRM项目管理系统后台</a>
                    </dd><dd class="sidebar_articles">
                        <span>02-03</span>
                        <a target="_blank"  href="js.html?/437.html">投票任务服务平台bootstrap响应式微信模板</a>
                    </dd><dd class="sidebar_articles">
                        <span>02-03</span>
                        <a target="_blank"  href="js.html?/440.html">联途旅游网全套bootstrap网站模板</a>
                    </dd><dd class="sidebar_articles">
                        <span>02-03</span>
                        <a target="_blank"  href="js.html?/439.html">eteams协同办公OA管理系统模板</a>
                    </dd><dd class="sidebar_articles">
                        <span>02-03</span>
                        <a target="_blank"  href="js.html?/438.html">投票任务平台手机版</a>
                    </dd>            </dl>
        </div>
        <div class="index_left clearfix">
            <div class="banner" id="banner">
                <ul id="index_banner">
                    <!--                    <li>
                                            <a target="_blank" href="http://idc.sucaihuo.com/">
                                                <img alt="素材火服务器" src="Public/images/other/service.jpg">
                                            </a>
                                        </li>-->
                    <li>
                        <a target="_blank" href="js.html?/0-0-52-0-0-0">
                            <img alt="响应式模板" src="Public/images/other/mobile.jpg">
                        </a>
                    </li>
                    <li>
                        <a target="_blank" href="js.html?/22-0-0-0-0-0">
                            <img alt="商城,特卖模板" src="Public/images/other/mall.jpg">
                        </a>
                    </li>
                    <li>
                        <a target="_blank" href="js.html?/53-0-0-0-0-0">
                            <img alt="404模板" src="Public/images/other/404.jpg">
                        </a>
                    </li>
                </ul>
                <div class="banner_page" id="banner_page"></div>
                <a class="banner_page_btn banner_page_left" id="banner_page_left"></a>
                <a class="banner_page_btn banner_page_right" id="banner_page_right"></a>
            </div>
            <div class='merchant_cats'>
                <div class='head'><h3>网站快速导航</h3></div>
                <div class="content" id="merchant_cats_menus"> 
                    <a href="js.html?"><i class="merchant_arrow merchant_arrow_right"></i><span class="icon_merchant icon_merchant_fire"></span><span class="name">网站模板</span><i class="merchant_arrow_left"></i> </a> 
                    <a href="js.html?/0-0-52-0-0-0"><i class="merchant_arrow merchant_arrow_right"></i><span class="icon_merchant icon_merchant_mobile"></span><span class="name">手机模板</span><i class="merchant_arrow_left"></i></a>
                    <a href="js.html?"><i class="merchant_arrow merchant_arrow_right"></i><span class="icon_merchant icon_merchant_js"></span><span class="name">网页特效</span><i class="merchant_arrow_left"></i></a>
                    <a href="js.html?"><i class="merchant_arrow merchant_arrow_right"></i><span class="icon_merchant icon_merchant_png"></span><span class="name">PHP</span><i class="merchant_arrow_left"></i></a>
                    <a href="js.html?"><i class="merchant_arrow merchant_arrow_right"></i><span class="icon_merchant icon_merchant_typeface"></span><span class="name">精品网址</span><i class="merchant_arrow_left"></i></a>
                    <a href="js.html?/124-0-0-0"><i class="merchant_arrow merchant_arrow_right"></i><span class="icon_merchant icon_merchant_code"></span><span class="name">Ajax</span><i class="merchant_arrow_left"></i></a>
                </div> 
            </div>
        </div>
    </div>
    <div class="index_per clearfix">
        <div class="sidebar_per sidebar_second">
            <dl>
                <dt>
                <a href="js.html?/0-0-0-6-0-0" class="more" target="_blank">更多&nbsp;<span class="more-sign">&gt;</span></a>
                <strong>推荐模板 <span class="name-en">/Template</span></strong>
                </dt>
                <dd class="sidebar_articles">
                        <span>02-02</span>
                        <a target="_blank"  href="js.html?/436.html">58同城多城市切换单页模板</a>
                    </dd><dd class="sidebar_articles">
                        <span>02-02</span>
                        <a target="_blank"  href="js.html?/435.html">一号店 - walmart沃尔玛网上商城模板</a>
                    </dd><dd class="sidebar_articles">
                        <span>01-26</span>
                        <a target="_blank"  href="js.html?/408.html">英盛网蓝色简洁大气的教育培训网站模板</a>
                    </dd><dd class="sidebar_articles">
                        <span>01-26</span>
                        <a target="_blank"  href="js.html?/407.html">可做跳转提示或404的蓝天白云主题动画模板</a>
                    </dd><dd class="sidebar_articles">
                        <span>01-24</span>
                        <a target="_blank"  href="js.html?/400.html">享笑网有图有音乐有文章网站模板下载</a>
                    </dd><dd class="sidebar_articles">
                        <span>11-22</span>
                        <a target="_blank"  href="js.html?/390.html">knewone2016最新分享购物网站模板</a>
                    </dd><dd class="sidebar_articles">
                        <span>11-17</span>
                        <a target="_blank"  href="js.html?/385.html">丹东本地生活社区模板</a>
                    </dd><dd class="sidebar_articles">
                        <span>11-11</span>
                        <a target="_blank"  href="js.html?/379.html">合肥一加一美容医院模板</a>
                    </dd><dd class="sidebar_articles">
                        <span>11-02</span>
                        <a target="_blank"  href="js.html?/370.html">小娱儿心理测试模版</a>
                    </dd><dd class="sidebar_articles">
                        <span>11-01</span>
                        <a target="_blank"  href="js.html?/369.html">游戏中心官网模版</a>
                    </dd><dd class="sidebar_articles">
                        <span>10-26</span>
                        <a target="_blank"  href="js.html?/363.html">51talk学习社区论坛模版</a>
                    </dd><dd class="sidebar_articles">
                        <span>10-25</span>
                        <a target="_blank"  href="js.html?/362.html">51talk企业招聘模版</a>
                    </dd><dd class="sidebar_articles">
                        <span>10-24</span>
                        <a target="_blank"  href="js.html?/361.html">美到家化妆造型手机版模版</a>
                    </dd><dd class="sidebar_articles">
                        <span>10-23</span>
                        <a target="_blank"  href="js.html?/360.html">apicloud响应式bootstrap论坛模版</a>
                    </dd>            </dl>
            <!--            <div class="apply"><a href="help.html" target="_blank" class="btn">申请扒模板</a></div>-->
        </div>
        <div class="index_recommend" id='index_recommend_0'>
            <div class="head clearfix">
                <strong>网站模板</strong>
                <a class="more" href="js.html?" target="_blank">更多&nbsp;<span class="more-sign">></span></a>
                <ul class="clearfix index-coupon-menus">
                    <li class="current index-coupon-menus-first">
                        全部
                        <span class="arrow-up-menu arrow"></span>
                    </li>
                    <li>
                            行业                            <span class="arrow-up-menu arrow"></span>
                        </li><li>
                            商城                            <span class="arrow-up-menu arrow"></span>
                        </li><li>
                            企业                            <span class="arrow-up-menu arrow"></span>
                        </li><li>
                            专题                            <span class="arrow-up-menu arrow"></span>
                        </li><li>
                            后台                            <span class="arrow-up-menu arrow"></span>
                        </li><li>
                            其他                            <span class="arrow-up-menu arrow"></span>
                        </li>                </ul>
            </div>
            <div class="content clearfix">
                <div class="per current">
                    <ul class="ul_pics">
                        <li><a target="_blank"  href="js.html?/440.html">
                                    <img src="Public/images/grey.gif" original="/modals/4/440/small.jpg" alt="联途旅游网全套bootstrap网站模板" class="lazy"  />
                                    联途旅游网全套bootstrap网站模板                                </a></li><li><a target="_blank"  href="js.html?/438.html">
                                    <img src="Public/images/grey.gif" original="/modals/4/438/small.jpg" alt="投票任务平台手机版" class="lazy"  />
                                    投票任务平台手机版                                </a></li><li><a target="_blank"  href="js.html?/437.html">
                                    <img src="Public/images/grey.gif" original="/modals/4/437/small.jpg" alt="投票任务服务平台bootstrap响应式微信模板" class="lazy"  />
                                    投票任务服务平台bootstrap响应式微信模板                                </a></li>                    </ul>
                    <ul class="ul_words">
                        <li><a target="_blank"  href="js.html?/442.html">英锐芯全套蓝色企业模板下载</a></li><li><a target="_blank"  href="js.html?/441.html">基于ace的CRM项目管理系统后台</a></li><li><a target="_blank"  href="js.html?/439.html">eteams协同办公OA管理系统模板</a></li><li><a target="_blank"  href="js.html?/436.html">58同城多城市切换单页模板</a></li><li><a target="_blank"  href="js.html?/435.html">一号店 - walmart沃尔玛网上商城模板</a></li><li><a target="_blank"  href="js.html?/434.html">一千零一夜个性化餐厅模板</a></li><li><a target="_blank"  href="js.html?/433.html">Twenty响应式模板</a></li><li><a target="_blank"  href="js.html?/432.html">成都尚狐网络网站建设企业模板</a></li><li><a target="_blank"  href="js.html?/431.html">Shamcey蓝色通用的bootstrap响应式后台管理模板</a></li><li><a target="_blank"  href="js.html?/430.html">se7en一个bootstrap手机后台模板</a></li><li><a target="_blank"  href="js.html?/429.html">北京旭云鸿商贸有限公司企业模板</a></li><li><a target="_blank"  href="js.html?/428.html">国外blessing祝福企业模板</a></li><li><a target="_blank"  href="js.html?/427.html">奇葩灯谜会手机选择测试模板</a></li><li><a target="_blank"  href="js.html?/426.html">一款适合Mac苹果电脑的Bootstrap响应式模版</a></li><li><a target="_blank"  href="js.html?/425.html">雅梦莎床上用品简洁企业模板</a></li><li><a target="_blank"  href="js.html?/424.html">Look别墅响应式产品图片展示企业模板</a></li><li><a target="_blank"  href="js.html?/423.html">为科多模板在首页完成的交通安防企业模板</a></li><li><a target="_blank"  href="js.html?/422.html">adminLTE2设计精致的国外响应式后台模板</a></li>                    </ul>
                </div>
                <div class="per">
                        <ul class="ul_pics">
                            <li><a target="_blank"  href="js.html?/440.html">
                                        <img src="Public/images/grey.gif" original="/modals/4/440/small.jpg" alt="联途旅游网全套bootstrap网站模板" class="lazy"  />
                                        联途旅游网全套bootstrap网站模板                                    </a></li><li><a target="_blank"  href="js.html?/369.html">
                                        <img src="Public/images/grey.gif" original="/modals/3/369/small.jpg" alt="游戏中心官网模版" class="lazy"  />
                                        游戏中心官网模版                                    </a></li><li><a target="_blank"  href="js.html?/362.html">
                                        <img src="Public/images/grey.gif" original="/modals/3/362/small.jpg" alt="51talk企业招聘模版" class="lazy"  />
                                        51talk企业招聘模版                                    </a></li>                        </ul>
                        <ul class="ul_words">
                            <li><a target="_blank"  href="js.html?/440.html">联途旅游网全套bootstrap网站模板</a></li><li><a target="_blank"  href="js.html?/439.html">eteams协同办公OA管理系统模板</a></li><li><a target="_blank"  href="js.html?/434.html">一千零一夜个性化餐厅模板</a></li><li><a target="_blank"  href="js.html?/411.html">安居客房屋租赁后台管理模板</a></li><li><a target="_blank"  href="js.html?/393.html">亲子旅游模板下载</a></li><li><a target="_blank"  href="js.html?/369.html">游戏中心官网模版</a></li><li><a target="_blank"  href="js.html?/362.html">51talk企业招聘模版</a></li><li><a target="_blank"  href="js.html?/359.html">51talk教育培训企业模版</a></li><li><a target="_blank"  href="js.html?/342.html">多皮肤响应式酒店模版</a></li><li><a target="_blank"  href="js.html?/297.html">蓝色完美的中文网址导航网页模板</a></li><li><a target="_blank"  href="js.html?/285.html">116灰绿色中文网址大全</a></li><li><a target="_blank"  href="js.html?/274.html">仿好163经典绿色网址导航</a></li><li><a target="_blank"  href="js.html?/272.html">拉勾网求职招聘网站模板</a></li><li><a target="_blank"  href="js.html?/267.html">三亚婚纱摄影模板</a></li><li><a target="_blank"  href="js.html?/266.html">米娅婚纱摄影工作室模板</a></li><li><a target="_blank"  href="js.html?/264.html">婚纱摄影工作室模板</a></li><li><a target="_blank"  href="js.html?/208.html">路趣网 - 简单绿色的旅游模板</a></li><li><a target="_blank"  href="js.html?/197.html">拉拉勾 - 手机wap旅游模板</a></li>                        </ul>
                    </div><div class="per">
                        <ul class="ul_pics">
                            <li><a target="_blank"  href="js.html?/435.html">
                                        <img src="Public/images/grey.gif" original="/modals/4/435/small.jpg" alt="一号店 - walmart沃尔玛网上商城模板" class="lazy"  />
                                        一号店 - walmart沃尔玛网上商城模板                                    </a></li><li><a target="_blank"  href="js.html?/390.html">
                                        <img src="Public/images/grey.gif" original="/modals/3/390/small.jpg" alt="knewone2016最新分享购物网站模板" class="lazy"  />
                                        knewone2016最新分享购物网站模板                                    </a></li><li><a target="_blank"  href="js.html?/361.html">
                                        <img src="Public/images/grey.gif" original="/modals/3/361/small.jpg" alt="美到家化妆造型手机版模版" class="lazy"  />
                                        美到家化妆造型手机版模版                                    </a></li>                        </ul>
                        <ul class="ul_words">
                            <li><a target="_blank"  href="js.html?/435.html">一号店 - walmart沃尔玛网上商城模板</a></li><li><a target="_blank"  href="js.html?/410.html">蓝色的中国移动手机商城模板</a></li><li><a target="_blank"  href="js.html?/405.html">高仿苏宁易购电子商务首页模板</a></li><li><a target="_blank"  href="js.html?/404.html">简洁大气的蓝色通用商城模板</a></li><li><a target="_blank"  href="js.html?/403.html">橙色可爱风格的幼教品商城模板</a></li><li><a target="_blank"  href="js.html?/399.html">手机商城B2B模板下载</a></li><li><a target="_blank"  href="js.html?/394.html">我想要手机全套商城模板下载</a></li><li><a target="_blank"  href="js.html?/390.html">knewone2016最新分享购物网站模板</a></li><li><a target="_blank"  href="js.html?/361.html">美到家化妆造型手机版模版</a></li><li><a target="_blank"  href="js.html?/354.html">三九手机网手机响应式模版</a></li><li><a target="_blank"  href="js.html?/353.html">三九妈咪网商城模版下载</a></li><li><a target="_blank"  href="js.html?/352.html">三九手机网商城模版</a></li><li><a target="_blank"  href="js.html?/350.html">Aditii绿色响应式服装商城模版</a></li><li><a target="_blank"  href="js.html?/345.html">珂兰电子商务钻石模版</a></li><li><a target="_blank"  href="js.html?/343.html">国外html5响应式眼镜商城模版</a></li><li><a target="_blank"  href="js.html?/337.html">医疗器械电商系统瀑布流首页模版</a></li><li><a target="_blank"  href="js.html?/331.html">京东最新商品分类手机版</a></li><li><a target="_blank"  href="js.html?/330.html">易果生鲜微信手机版全套模板</a></li>                        </ul>
                    </div><div class="per">
                        <ul class="ul_pics">
                            <li><a target="_blank"  href="js.html?/408.html">
                                        <img src="Public/images/grey.gif" original="/modals/4/408/small.jpg" alt="英盛网蓝色简洁大气的教育培训网站模板" class="lazy"  />
                                        英盛网蓝色简洁大气的教育培训网站模板                                    </a></li><li><a target="_blank"  href="js.html?/379.html">
                                        <img src="Public/images/grey.gif" original="/modals/3/379/small.jpg" alt="合肥一加一美容医院模板" class="lazy"  />
                                        合肥一加一美容医院模板                                    </a></li><li><a target="_blank"  href="js.html?/357.html">
                                        <img src="Public/images/grey.gif" original="/modals/3/357/small.jpg" alt="传奇游戏官网首页模版" class="lazy"  />
                                        传奇游戏官网首页模版                                    </a></li>                        </ul>
                        <ul class="ul_words">
                            <li><a target="_blank"  href="js.html?/442.html">英锐芯全套蓝色企业模板下载</a></li><li><a target="_blank"  href="js.html?/432.html">成都尚狐网络网站建设企业模板</a></li><li><a target="_blank"  href="js.html?/429.html">北京旭云鸿商贸有限公司企业模板</a></li><li><a target="_blank"  href="js.html?/425.html">雅梦莎床上用品简洁企业模板</a></li><li><a target="_blank"  href="js.html?/424.html">Look别墅响应式产品图片展示企业模板</a></li><li><a target="_blank"  href="js.html?/423.html">为科多模板在首页完成的交通安防企业模板</a></li><li><a target="_blank"  href="js.html?/419.html">世邦同创简洁通用的企业站模板</a></li><li><a target="_blank"  href="js.html?/417.html">响应式全屏单页企业模板</a></li><li><a target="_blank"  href="js.html?/416.html">冷元宝全屏响应式室内设计模板</a></li><li><a target="_blank"  href="js.html?/415.html">深圳巨擘影视营销文化企业模板</a></li><li><a target="_blank"  href="js.html?/414.html">黑色设备仪器企业网站模板</a></li><li><a target="_blank"  href="js.html?/413.html">白龙桥自动化企业产品展示模板</a></li><li><a target="_blank"  href="js.html?/412.html">古典家具企业模板</a></li><li><a target="_blank"  href="js.html?/408.html">英盛网蓝色简洁大气的教育培训网站模板</a></li><li><a target="_blank"  href="js.html?/406.html">小猪pigcms微信企业模板</a></li><li><a target="_blank"  href="js.html?/402.html">律师事务所全套企业模板</a></li><li><a target="_blank"  href="js.html?/401.html">京广视讯简单的广告传媒网站模板</a></li><li><a target="_blank"  href="js.html?/397.html">妇产科医院手机响应式模板</a></li>                        </ul>
                    </div><div class="per">
                        <ul class="ul_pics">
                            <li><a target="_blank"  href="js.html?/436.html">
                                        <img src="Public/images/grey.gif" original="/modals/4/436/small.jpg" alt="58同城多城市切换单页模板" class="lazy"  />
                                        58同城多城市切换单页模板                                    </a></li><li><a target="_blank"  href="js.html?/370.html">
                                        <img src="Public/images/grey.gif" original="/modals/3/370/small.jpg" alt="小娱儿心理测试模版" class="lazy"  />
                                        小娱儿心理测试模版                                    </a></li><li><a target="_blank"  href="js.html?/358.html">
                                        <img src="Public/images/grey.gif" original="/modals/3/358/small.jpg" alt="好友送你3次抽奖机会" class="lazy"  />
                                        好友送你3次抽奖机会                                    </a></li>                        </ul>
                        <ul class="ul_words">
                            <li><a target="_blank"  href="js.html?/436.html">58同城多城市切换单页模板</a></li><li><a target="_blank"  href="js.html?/427.html">奇葩灯谜会手机选择测试模板</a></li><li><a target="_blank"  href="js.html?/418.html">腾讯众创空间专题模板</a></li><li><a target="_blank"  href="js.html?/378.html">网站倒计时上线单页专题模板</a></li><li><a target="_blank"  href="js.html?/370.html">小娱儿心理测试模版</a></li><li><a target="_blank"  href="js.html?/358.html">好友送你3次抽奖机会</a></li><li><a target="_blank"  href="js.html?/332.html">红色大气的转盘抽奖活动模板专题</a></li><li><a target="_blank"  href="js.html?/300.html">万圣节Halloween专题模板</a></li><li><a target="_blank"  href="js.html?/296.html">55海淘圣诞送礼活动主题模板</a></li><li><a target="_blank"  href="js.html?/284.html">红色喜庆的圣诞+元旦活动专题模板</a></li><li><a target="_blank"  href="js.html?/174.html">幼儿园投票专题手机模板下载</a></li><li><a target="_blank"  href="js.html?/62.html">腾讯互动娱乐跟随鼠标滚动全屏展示专题模板</a></li><li><a target="_blank"  href="js.html?/61.html">全屏鼠标滚动动画专题模板</a></li>                        </ul>
                    </div><div class="per">
                        <ul class="ul_pics">
                            <li><a target="_blank"  href="js.html?/438.html">
                                        <img src="Public/images/grey.gif" original="/modals/4/438/small.jpg" alt="投票任务平台手机版" class="lazy"  />
                                        投票任务平台手机版                                    </a></li><li><a target="_blank"  href="js.html?/437.html">
                                        <img src="Public/images/grey.gif" original="/modals/4/437/small.jpg" alt="投票任务服务平台bootstrap响应式微信模板" class="lazy"  />
                                        投票任务服务平台bootstrap响应式微信模板                                    </a></li><li><a target="_blank"  href="js.html?/351.html">
                                        <img src="Public/images/grey.gif" original="/modals/3/351/small.jpg" alt="Admin Lab响应式后台管理模版" class="lazy"  />
                                        Admin Lab响应式后台管理模版                                    </a></li>                        </ul>
                        <ul class="ul_words">
                            <li><a target="_blank"  href="js.html?/441.html">基于ace的CRM项目管理系统后台</a></li><li><a target="_blank"  href="js.html?/439.html">eteams协同办公OA管理系统模板</a></li><li><a target="_blank"  href="js.html?/438.html">投票任务平台手机版</a></li><li><a target="_blank"  href="js.html?/437.html">投票任务服务平台bootstrap响应式微信模板</a></li><li><a target="_blank"  href="js.html?/431.html">Shamcey蓝色通用的bootstrap响应式后台管理模板</a></li><li><a target="_blank"  href="js.html?/430.html">se7en一个bootstrap手机后台模板</a></li><li><a target="_blank"  href="js.html?/426.html">一款适合Mac苹果电脑的Bootstrap响应式模版</a></li><li><a target="_blank"  href="js.html?/422.html">adminLTE2设计精致的国外响应式后台模板</a></li><li><a target="_blank"  href="js.html?/421.html">Notebook价值18$的响应式后台模板</a></li><li><a target="_blank"  href="js.html?/396.html">前后台通用的登录注册表单模板</a></li><li><a target="_blank"  href="js.html?/391.html">stilearn灰色响应式bootstrap后台模板</a></li><li><a target="_blank"  href="js.html?/375.html">flatlab响应式支持移动端的后台模版</a></li><li><a target="_blank"  href="js.html?/374.html">Fides响应式后台管理系统</a></li><li><a target="_blank"  href="js.html?/373.html">Slick Admin国外响应式后台模版</a></li><li><a target="_blank"  href="js.html?/368.html">Blue Moon蓝月亮响应式后台模版</a></li><li><a target="_blank"  href="js.html?/364.html">Archon响应式后台admin管理模版</a></li><li><a target="_blank"  href="js.html?/351.html">Admin Lab响应式后台管理模版</a></li><li><a target="_blank"  href="js.html?/349.html">acme灰色响应式boostrap后台模版</a></li>                        </ul>
                    </div><div class="per">
                        <ul class="ul_pics">
                            <li><a target="_blank"  href="js.html?/407.html">
                                        <img src="Public/images/grey.gif" original="/modals/4/407/small.jpg" alt="可做跳转提示或404的蓝天白云主题动画模板" class="lazy"  />
                                        可做跳转提示或404的蓝天白云主题动画模板                                    </a></li><li><a target="_blank"  href="js.html?/400.html">
                                        <img src="Public/images/grey.gif" original="/modals/4/400/small.jpg" alt="享笑网有图有音乐有文章网站模板下载" class="lazy"  />
                                        享笑网有图有音乐有文章网站模板下载                                    </a></li><li><a target="_blank"  href="js.html?/385.html">
                                        <img src="Public/images/grey.gif" original="/modals/3/385/small.jpg" alt="丹东本地生活社区模板" class="lazy"  />
                                        丹东本地生活社区模板                                    </a></li>                        </ul>
                        <ul class="ul_words">
                            <li><a target="_blank"  href="js.html?/420.html">页面齐全的橙色响应式手机端个人中心模板</a></li><li><a target="_blank"  href="js.html?/409.html">404您访问的页面被外星人掳走了</a></li><li><a target="_blank"  href="js.html?/407.html">可做跳转提示或404的蓝天白云主题动画模板</a></li><li><a target="_blank"  href="js.html?/400.html">享笑网有图有音乐有文章网站模板下载</a></li><li><a target="_blank"  href="js.html?/396.html">前后台通用的登录注册表单模板</a></li><li><a target="_blank"  href="js.html?/395.html">粉红色简单的用户登录界面</a></li><li><a target="_blank"  href="js.html?/385.html">丹东本地生活社区模板</a></li><li><a target="_blank"  href="js.html?/363.html">51talk学习社区论坛模版</a></li><li><a target="_blank"  href="js.html?/360.html">apicloud响应式bootstrap论坛模版</a></li><li><a target="_blank"  href="js.html?/341.html">国外响应式黑色手机模版</a></li><li><a target="_blank"  href="js.html?/329.html">expoon网展企业模板带个人中心</a></li><li><a target="_blank"  href="js.html?/315.html">灰白色html5博客模版</a></li><li><a target="_blank"  href="js.html?/265.html">163灰色系列网站导航</a></li><li><a target="_blank"  href="js.html?/241.html">响应式企业博客模板</a></li><li><a target="_blank"  href="js.html?/223.html">Metronic英文商务模板</a></li><li><a target="_blank"  href="js.html?/166.html">杨青个人博客手机模板下载</a></li><li><a target="_blank"  href="js.html?/161.html">html5超炫个人简历模板下载</a></li><li><a target="_blank"  href="js.html?/158.html">国外coolblue个人主题模板下载</a></li>                        </ul>
                    </div>            </div>
        </div>
        <div class="sidebar_per sidebar_second">
            <dl>
                <dt>
                <a href="js.html?/0-0-6-0" class="more" target="_blank">更多&nbsp;<span class="more-sign">&gt;</span></a>
                <strong>推荐特效 <span class="name-en">/jQuery</span></strong>
                </dt>
                <dd class="sidebar_articles">
                        <span>01-09</span>
                        <a target="_blank"  href="js.html?/660.html">bootstrap-treeview.js多级下拉树菜单</a>
                    </dd><dd class="sidebar_articles">
                        <span>01-02</span>
                        <a target="_blank"  href="js.html?/637.html">Thinkphp原创Ajax分页加搜索查询</a>
                    </dd><dd class="sidebar_articles">
                        <span>12-26</span>
                        <a target="_blank"  href="js.html?/618.html">PHP+jQuery+Ajax无刷新分页加搜索</a>
                    </dd><dd class="sidebar_articles">
                        <span>11-25</span>
                        <a target="_blank"  href="js.html?/574.html">cxSelect多级省市区联动插件</a>
                    </dd><dd class="sidebar_articles">
                        <span>11-24</span>
                        <a target="_blank"  href="js.html?/573.html">jQuery省市区三级和四级联动演示</a>
                    </dd><dd class="sidebar_articles">
                        <span>11-18</span>
                        <a target="_blank"  href="js.html?/567.html">jQuery+Ajax打开弹出分页层并保存多选框选中数据</a>
                    </dd><dd class="sidebar_articles">
                        <span>11-16</span>
                        <a target="_blank"  href="js.html?/565.html">php快递运单号接口查询</a>
                    </dd><dd class="sidebar_articles">
                        <span>01-07</span>
                        <a target="_blank"  href="js.html?/563.html">Thinkphp仿淘宝分页跳转</a>
                    </dd><dd class="sidebar_articles">
                        <span>11-10</span>
                        <a target="_blank"  href="js.html?/559.html">jQuery自动输入email、时间和域名</a>
                    </dd><dd class="sidebar_articles">
                        <span>11-08</span>
                        <a target="_blank"  href="js.html?/557.html">Thinkphp带表情的无限评论回复</a>
                    </dd><dd class="sidebar_articles">
                        <span>11-02</span>
                        <a target="_blank"  href="js.html?/551.html">jQuery仿京东检测验密码强度</a>
                    </dd><dd class="sidebar_articles">
                        <span>12-29</span>
                        <a target="_blank"  href="js.html?/550.html">PHP检测中文验证码实例演示</a>
                    </dd><dd class="sidebar_articles">
                        <span>12-29</span>
                        <a target="_blank"  href="js.html?/547.html">PHP自定义图片水印类并且支持中文</a>
                    </dd><dd class="sidebar_articles">
                        <span>10-27</span>
                        <a target="_blank"  href="js.html?/545.html">PHP+jQuery年会在线拍照抽奖</a>
                    </dd>            </dl>
        </div>
        <div class="index_recommend" id='index_recommend_1'>
            <div class="head clearfix">
                <strong>网页特效</strong>
                <a class="more" href="js.html?" target="_blank">更多&nbsp;<span class="more-sign">></span></a>
                <ul class="index-coupon-menus clearfix">
                    <li class="current index-coupon-menus-first">
                        全部
                        <span class="arrow-up-menu arrow"></span>
                    </li>
                    <li>
                                图片代码                                <span class="arrow-up-menu arrow"></span>
                            </li><li>
                                导航菜单                                <span class="arrow-up-menu arrow"></span>
                            </li><li>
                                选项卡/滑动门                                <span class="arrow-up-menu arrow"></span>
                            </li><li>
                                文字特效                                <span class="arrow-up-menu arrow"></span>
                            </li><li>
                                表单代码                                <span class="arrow-up-menu arrow"></span>
                            </li><li>
                                悬浮层/弹出层                                <span class="arrow-up-menu arrow"></span>
                            </li>                </ul>
            </div>
            <div class="content clearfix">
                <div class="per current">
                    <ul class="ul_pics">
                        <li><a target="_blank"  href="js.html?/712.html">
                                    <img src="Public/images/grey.gif" original="/jquery/7/712/small.jpg" alt="Thinkphp定时执行任务" class="lazy"  />
                                    Thinkphp定时执行任务                                </a></li><li><a target="_blank"  href="js.html?/684.html">
                                    <img src="Public/images/grey.gif" original="/jquery/6/684/small.jpg" alt="PHP支持手势的手机端图片裁剪上传" class="lazy"  />
                                    PHP支持手势的手机端图片裁剪上传                                </a></li><li><a target="_blank"  href="js.html?/669.html">
                                    <img src="Public/images/grey.gif" original="/jquery/6/669/small.jpg" alt="jQuery仿win10桌面QQ聊天ui" class="lazy"  />
                                    jQuery仿win10桌面QQ聊天ui                                </a></li>                    </ul>
                    <ul class="ul_words">
                        <li><a target="_blank"  href="js.html?/714.html">css仿京东底部菜单按钮悬浮层</a></li><li><a target="_blank"  href="js.html?/713.html">jQuery仿京东手机版头部菜单</a></li><li><a target="_blank"  href="js.html?/711.html">PHP+jQuery二级分类单选和多选弹出层</a></li><li><a target="_blank"  href="js.html?/710.html">jquery无限级城市多选弹出层</a></li><li><a target="_blank"  href="js.html?/709.html">jQuery仿天猫手机站信息提示弹出层</a></li><li><a target="_blank"  href="js.html?/708.html">deck.js演示花式扑克牌</a></li><li><a target="_blank"  href="js.html?/707.html">jQuery+Cookie引导用户操作插件</a></li><li><a target="_blank"  href="js.html?/706.html">EmojiPicker表情插件</a></li><li><a target="_blank"  href="js.html?/705.html">jQuery10种不同动画效果的响应式全屏遮罩层</a></li><li><a target="_blank"  href="js.html?/704.html">rcswitcher将radio和checkbox转换成多皮肤开关按钮</a></li><li><a target="_blank"  href="js.html?/703.html">纯CSS3写的10种不同的酷炫图片遮罩层效果</a></li><li><a target="_blank"  href="js.html?/702.html">纯css实现照片墙效果</a></li><li><a target="_blank"  href="js.html?/701.html">cbpContentSlider滑动切换对应内容</a></li><li><a target="_blank"  href="js.html?/700.html">colpick又一款rgb颜色选择器插件</a></li><li><a target="_blank"  href="js.html?/699.html">minicolors颜色选择器插件</a></li><li><a target="_blank"  href="js.html?/698.html">Fancy Sliding Form花哨的表单滑动插件</a></li><li><a target="_blank"  href="js.html?/697.html">hideseek输入框搜索查询插件</a></li><li><a target="_blank"  href="js.html?/696.html">calendario两款记录日志新闻的响应式日历插件</a></li>                    </ul>
                </div>
                <div class="per">
                        <ul class="ul_pics">
                            <li><a target="_blank"  href="js.html?/521.html">
                                        <img src="Public/images/grey.gif" original="/jquery/5/521/small.jpg" alt="elevateZoom仿京东商品详情放大镜功能" class="lazy"  />
                                        elevateZoom仿京东商品详情放大镜功能                                    </a></li><li><a target="_blank"  href="js.html?/456.html">
                                        <img src="Public/images/grey.gif" original="/jquery/4/456/small.jpg" alt="jQuery仿QQ空间相册插件" class="lazy"  />
                                        jQuery仿QQ空间相册插件                                    </a></li><li><a target="_blank"  href="js.html?/453.html">
                                        <img src="Public/images/grey.gif" original="/jquery/4/453/small.jpg" alt="slide.js演示6种不同的幻灯片效果" class="lazy"  />
                                        slide.js演示6种不同的幻灯片效果                                    </a></li>                        </ul>
                        <ul class="ul_words">
                            <li><a target="_blank"  href="js.html?/705.html">jQuery10种不同动画效果的响应式全屏遮罩层</a></li><li><a target="_blank"  href="js.html?/703.html">纯CSS3写的10种不同的酷炫图片遮罩层效果</a></li><li><a target="_blank"  href="js.html?/691.html">gridrotator.js响应式图片画廊插件</a></li><li><a target="_blank"  href="js.html?/689.html">jQuery支持鼠标滚动的垂直滚动手风琴</a></li><li><a target="_blank"  href="js.html?/688.html">EasyZoom.js图片平移缩小放大插件</a></li><li><a target="_blank"  href="js.html?/687.html">纯css3实现的手风琴</a></li><li><a target="_blank"  href="js.html?/685.html">jQuery展开标题和描述的手风琴</a></li><li><a target="_blank"  href="js.html?/681.html">Baraja演示15种不同的洗牌特效</a></li><li><a target="_blank"  href="js.html?/680.html">rowGrid.js响应式图片水平对齐插件</a></li><li><a target="_blank"  href="js.html?/679.html">flipshow.js各个方向翻转图片</a></li><li><a target="_blank"  href="js.html?/676.html">fancyzoom.js画廊弹出层插件</a></li><li><a target="_blank"  href="js.html?/670.html">jquery滑动图片显示标题遮罩层</a></li><li><a target="_blank"  href="js.html?/668.html">jQuery.Slidorion.js手风琴图片滑动插件</a></li><li><a target="_blank"  href="js.html?/665.html">jquery.nanogallery.js可自定义配置的画廊插件</a></li><li><a target="_blank"  href="js.html?/658.html">bpHS.js+bootstrap响应式触屏滑动幻灯片</a></li><li><a target="_blank"  href="js.html?/655.html">als.js演示4种不同的标题和图片滚动方式</a></li><li><a target="_blank"  href="js.html?/654.html">jQuery响应式手机触屏滑动插件</a></li><li><a target="_blank"  href="js.html?/653.html">jQuery支持鼠标滚动的3D拉窗帘分页特效</a></li>                        </ul>
                    </div><div class="per">
                        <ul class="ul_pics">
                            <li><a target="_blank"  href="js.html?/660.html">
                                        <img src="Public/images/grey.gif" original="/jquery/6/660/small.jpg" alt="bootstrap-treeview.js多级下拉树菜单" class="lazy"  />
                                        bootstrap-treeview.js多级下拉树菜单                                    </a></li><li><a target="_blank"  href="js.html?/143.html">
                                        <img src="Public/images/grey.gif" original="/jquery/1/143/small.jpg" alt="clueTip简单实用的信息提示框" class="lazy"  />
                                        clueTip简单实用的信息提示框                                    </a></li><li><a target="_blank"  href="js.html?/52.html">
                                        <img src="Public/images/grey.gif" original="/jquery/0/52/small.jpg" alt="jQuery仿天猫左侧分类导航" class="lazy"  />
                                        jQuery仿天猫左侧分类导航                                    </a></li>                        </ul>
                        <ul class="ul_words">
                            <li><a target="_blank"  href="js.html?/660.html">bootstrap-treeview.js多级下拉树菜单</a></li><li><a target="_blank"  href="js.html?/659.html">jQuery弹出侧边栏滑动菜单</a></li><li><a target="_blank"  href="js.html?/656.html">jQuery比bootstrap效果还帅的响应式模态窗口弹出层</a></li><li><a target="_blank"  href="js.html?/644.html">Bootstrap左侧下拉三级菜单导航</a></li><li><a target="_blank"  href="js.html?/643.html">Bootstrap手机端弹出隐藏的侧栏菜单</a></li><li><a target="_blank"  href="js.html?/642.html">jQuery响应式二级下拉导航菜单</a></li><li><a target="_blank"  href="js.html?/624.html">jQuery响应式菜单切换对应主题的手机模板</a></li><li><a target="_blank"  href="js.html?/619.html">catslider简单的多商品分类滑动</a></li><li><a target="_blank"  href="js.html?/615.html">jQuery手机各种下拉菜单效果加搜索输入框</a></li><li><a target="_blank"  href="js.html?/614.html">jQuery环状圆形菜单</a></li><li><a target="_blank"  href="js.html?/613.html">jQuery手机响应式全屏菜单从天而降</a></li><li><a target="_blank"  href="js.html?/612.html">jQuery以圆形动画打开菜单</a></li><li><a target="_blank"  href="js.html?/608.html">jQuery从顶部打开图标下拉导航菜单</a></li><li><a target="_blank"  href="js.html?/607.html">jQuery适合做点菜或打开贺卡的菜单插件</a></li><li><a target="_blank"  href="js.html?/606.html">jQuery带图标的手机面板菜单</a></li><li><a target="_blank"  href="js.html?/605.html">jQuery设置手机菜单自适应</a></li><li><a target="_blank"  href="js.html?/604.html">jQuery滚动条滚动显示手机菜单</a></li><li><a target="_blank"  href="js.html?/603.html">jQuery两种响应式手机打开菜单酷炫效果演示</a></li>                        </ul>
                    </div><div class="per">
                        <ul class="ul_pics">
                            <li><a target="_blank"  href="js.html?/197.html">
                                        <img src="Public/images/grey.gif" original="/jquery/1/197/small.jpg" alt="tabulous.js效果酷炫的Tab选项卡插件" class="lazy"  />
                                        tabulous.js效果酷炫的Tab选项卡插件                                    </a></li><li><a target="_blank"  href="js.html?/16.html">
                                        <img src="Public/images/grey.gif" original="/jquery/0/16/small.jpg" alt="jquery.bxSlider响应式滑动插件" class="lazy"  />
                                        jquery.bxSlider响应式滑动插件                                    </a></li><li><a target="_blank"  href="js.html?/7.html">
                                        <img src="Public/images/grey.gif" original="/jquery/0/7/small.jpg" alt="SuperSlide焦点图_Tab切换_图片滚动_无缝滚动" class="lazy"  />
                                        SuperSlide焦点图_Tab切换_图片滚动_无缝滚动                                    </a></li>                        </ul>
                        <ul class="ul_words">
                            <li><a target="_blank"  href="js.html?/701.html">cbpContentSlider滑动切换对应内容</a></li><li><a target="_blank"  href="js.html?/504.html">tabs选项卡插件</a></li><li><a target="_blank"  href="js.html?/250.html">jQuery横向彩色手风琴菜单</a></li><li><a target="_blank"  href="js.html?/197.html">tabulous.js效果酷炫的Tab选项卡插件</a></li><li><a target="_blank"  href="js.html?/133.html">jQuery选项卡搜索框切换</a></li><li><a target="_blank"  href="js.html?/16.html">jquery.bxSlider响应式滑动插件</a></li><li><a target="_blank"  href="js.html?/7.html">SuperSlide焦点图_Tab切换_图片滚动_无缝滚动</a></li>                        </ul>
                    </div><div class="per">
                        <ul class="ul_pics">
                            <li><a target="_blank"  href="js.html?/214.html">
                                        <img src="Public/images/grey.gif" original="/jquery/2/214/small.jpg" alt="jQuery仿ace添加标签" class="lazy"  />
                                        jQuery仿ace添加标签                                    </a></li><li><a target="_blank"  href="js.html?/213.html">
                                        <img src="Public/images/grey.gif" original="/jquery/2/213/small.jpg" alt="jQuery间歇滚动跑马灯效果" class="lazy"  />
                                        jQuery间歇滚动跑马灯效果                                    </a></li>                        </ul>
                        <ul class="ul_words">
                            <li><a target="_blank"  href="js.html?/674.html">textillate演示N种不同的文字动画</a></li><li><a target="_blank"  href="js.html?/522.html">jquery文字上下滚动</a></li><li><a target="_blank"  href="js.html?/459.html">jQuery演示三种文字垂直滚动</a></li><li><a target="_blank"  href="js.html?/270.html">jQueryNotes仿QQ空间添加标记</a></li><li><a target="_blank"  href="js.html?/226.html">BreakingNews演示3种间歇滚动效果</a></li><li><a target="_blank"  href="js.html?/214.html">jQuery仿ace添加标签</a></li><li><a target="_blank"  href="js.html?/213.html">jQuery间歇滚动跑马灯效果</a></li>                        </ul>
                    </div><div class="per">
                        <ul class="ul_pics">
                            <li><a target="_blank"  href="js.html?/669.html">
                                        <img src="Public/images/grey.gif" original="/jquery/6/669/small.jpg" alt="jQuery仿win10桌面QQ聊天ui" class="lazy"  />
                                        jQuery仿win10桌面QQ聊天ui                                    </a></li><li><a target="_blank"  href="js.html?/618.html">
                                        <img src="Public/images/grey.gif" original="/jquery/6/618/small.jpg" alt="PHP+jQuery+Ajax无刷新分页加搜索" class="lazy"  />
                                        PHP+jQuery+Ajax无刷新分页加搜索                                    </a></li><li><a target="_blank"  href="js.html?/574.html">
                                        <img src="Public/images/grey.gif" original="/jquery/5/574/small.jpg" alt="cxSelect多级省市区联动插件" class="lazy"  />
                                        cxSelect多级省市区联动插件                                    </a></li>                        </ul>
                        <ul class="ul_words">
                            <li><a target="_blank"  href="js.html?/704.html">rcswitcher将radio和checkbox转换成多皮肤开关按钮</a></li><li><a target="_blank"  href="js.html?/698.html">Fancy Sliding Form花哨的表单滑动插件</a></li><li><a target="_blank"  href="js.html?/697.html">hideseek输入框搜索查询插件</a></li><li><a target="_blank"  href="js.html?/695.html">progression表单输入完成进度提示框插件</a></li><li><a target="_blank"  href="js.html?/694.html">jQuery表单输入验证并填充信用卡内容</a></li><li><a target="_blank"  href="js.html?/693.html">dropdown图标下拉插件</a></li><li><a target="_blank"  href="js.html?/682.html">jQuery自定义添加文本、表格、图表插件</a></li><li><a target="_blank"  href="js.html?/672.html">editableSelect可编辑搜索的下拉框插件</a></li><li><a target="_blank"  href="js.html?/669.html">jQuery仿win10桌面QQ聊天ui</a></li><li><a target="_blank"  href="js.html?/666.html">jquery.freezeheader.js表格thead随滚动条滚动</a></li><li><a target="_blank"  href="js.html?/618.html">PHP+jQuery+Ajax无刷新分页加搜索</a></li><li><a target="_blank"  href="js.html?/574.html">cxSelect多级省市区联动插件</a></li><li><a target="_blank"  href="js.html?/573.html">jQuery省市区三级和四级联动演示</a></li><li><a target="_blank"  href="js.html?/569.html">jQuery判断邮箱类型并跳转</a></li><li><a target="_blank"  href="js.html?/565.html">php快递运单号接口查询</a></li><li><a target="_blank"  href="js.html?/555.html">jQuery自定义下拉框插件</a></li><li><a target="_blank"  href="js.html?/551.html">jQuery仿京东检测验密码强度</a></li><li><a target="_blank"  href="js.html?/523.html">jQuery省市区三级联动</a></li>                        </ul>
                    </div><div class="per">
                        <ul class="ul_pics">
                            <li><a target="_blank"  href="js.html?/669.html">
                                        <img src="Public/images/grey.gif" original="/jquery/6/669/small.jpg" alt="jQuery仿win10桌面QQ聊天ui" class="lazy"  />
                                        jQuery仿win10桌面QQ聊天ui                                    </a></li><li><a target="_blank"  href="js.html?/567.html">
                                        <img src="Public/images/grey.gif" original="/jquery/5/567/small.jpg" alt="jQuery+Ajax打开弹出分页层并保存多选框选中数据" class="lazy"  />
                                        jQuery+Ajax打开弹出分页层并保存多选框选中数据                                    </a></li><li><a target="_blank"  href="js.html?/542.html">
                                        <img src="Public/images/grey.gif" original="/jquery/5/542/small.jpg" alt="jQuery仿京东登录弹出层" class="lazy"  />
                                        jQuery仿京东登录弹出层                                    </a></li>                        </ul>
                        <ul class="ul_words">
                            <li><a target="_blank"  href="js.html?/711.html">PHP+jQuery二级分类单选和多选弹出层</a></li><li><a target="_blank"  href="js.html?/710.html">jquery无限级城市多选弹出层</a></li><li><a target="_blank"  href="js.html?/671.html">Custombox+bootstrap演示20种不同的手机响应式弹出层modal特效</a></li><li><a target="_blank"  href="js.html?/669.html">jQuery仿win10桌面QQ聊天ui</a></li><li><a target="_blank"  href="js.html?/666.html">jquery.freezeheader.js表格thead随滚动条滚动</a></li><li><a target="_blank"  href="js.html?/665.html">jquery.nanogallery.js可自定义配置的画廊插件</a></li><li><a target="_blank"  href="js.html?/656.html">jQuery比bootstrap效果还帅的响应式模态窗口弹出层</a></li><li><a target="_blank"  href="js.html?/598.html">Portfolio缩略图滑动插件</a></li><li><a target="_blank"  href="js.html?/567.html">jQuery+Ajax打开弹出分页层并保存多选框选中数据</a></li><li><a target="_blank"  href="js.html?/564.html">Tocify动态生成左侧智能定位导航</a></li><li><a target="_blank"  href="js.html?/560.html">jQuery自定义月份选择插件</a></li><li><a target="_blank"  href="js.html?/542.html">jQuery仿京东登录弹出层</a></li><li><a target="_blank"  href="js.html?/506.html">toastr后台提示插件</a></li><li><a target="_blank"  href="js.html?/498.html">jQuery提示卡片插件</a></li><li><a target="_blank"  href="js.html?/491.html">Colorbox弹出层插件使用API与中文教程</a></li><li><a target="_blank"  href="js.html?/489.html">jQuery18种酷炫modal弹出层</a></li><li><a target="_blank"  href="js.html?/487.html">jspanel创建多功能浮动层</a></li><li><a target="_blank"  href="js.html?/485.html">Pirobox弹出层插件</a></li>                        </ul>
                    </div>            </div>
        </div>
    </div>
</div>

<div class="footer" id="footer" data-url="/" data-logout="/Download/logout?r=" data-id="" data-mtype=""> 
    <div class="footer_main clearfix">
        <div class="guide">
            <span class="guide_icon"></span>
            <ul class="ul_foot">
                <li><strong>网站模板</strong></li>
                <li><a href="js.html?/3-0-0-0-0-0">行业模板</a><a href="js.html?/7-0-0-0-0-0">专题模板</a></li>
                <li><a href="js.html?/4-0-0-0-0-0">商城模板</a><a href="js.html?/8-0-0-0-0-0">后台模板</a></li>
                <li><a href="js.html?/5-0-0-0-0-0">企业模板</a><a href="js.html?/9-0-0-0-0-0">其他模板</a></li>
                <li><a href="js.html?/31-0-0-0-96-0">求职招聘</a><a href="js.html?/22-0-0-0-96-0">订餐外送</a></li>
                <li><a href="js.html?/69-0-0-0-0-0">个人博客</a><a href="js.html?/0-0-0-0-96-0">中文模板</a></li>
            </ul>
        </div>
        <div class="stores">
            <span class="stores_icon"></span>
            <ul class="ul_foot">
                <li><strong>jquery特效</strong></li>
                <li><a href="js.html?/7-0-0-0">图片代码</a><a href="js.html?/7-0-0-0">悬浮层/弹出层</a></li>
                <li><a href="js.html?/8-0-0-0">导航菜单</a><a href="js.html?/14-0-0-0">其它特效</a></li>
                <li><a href="js.html?/9-0-0-0">选项卡/滑动门</a><a href="js.html?/53-0-0-0">PHP+Ajax</a></li>
                <li><a href="js.html?/11-0-0-0">表单代码</a><a href="js.html?/128-0-0-0">jQuery插件</a></li>
            </ul>
        </div>
        <div class="rebate">
            <span class="rebate_icon"></span>
            <ul class="ul_foot">
                <li><strong>推荐jQuery</strong></li>
                <li><a href="js.html?/177.html">datepicker</a><a href="js.html?/44.html">flowplayer</a></li>
                <li><a href="js.html?/1.html">jQuery购物车</a><a href="js.html?/85.html">jquery表单验证</a></li>
                <li><a href="js.html?/200.html">lightbox</a><a href="js.html?/125.html">jquery滚动条</a></li>
                <li><a href="js.html?/45.html">fancybox</a><a href="js.html?/268.html">WebUploader</a></li>
                <li><a href="js.html?/107.html">fullcalendar</a><a href="js.html?/3.html">上传</a></li>
            </ul>
        </div>
        <div class="follow">
            <span class="follow_icon"></span>
            <ul>
                <li>
                    <strong>联系我们</strong>
                </li>
                <li>
                    <a  class="qq-chat" href="http://wpa.qq.com/msgrd?v=3&uin=254274509&site=qq&menu=yes" target="_blank">
                        <img alt="QQ在线客服" src="Public/images/qq-chat.png">
                    </a>
                    
                </li>
                <li>qq群： 249197725</li>
                <li>邮箱：254274509@qq.com</li>
                <li>手机：18685504413</li>
            </ul>
        </div>
        <div class="friendly">
                        <div class="foot_menu">
                <a href="help.html" target="_blank">扒模板</a>
                <a href="help.html" target="_blank">联系我们</a>
                <a href="help.html" target="_blank">关于我们</a>
                <a href="help.html" target="_blank">招纳贤士</a>
                <a href="js.html?map.html" target="_blank">网站地图</a>
                <span class="address">Copyright&copy;2015-<?php echo date("Y")?> All Rights Reserved. 苏ICP备15009298</span>
            </div>
        </div>
    </div>
</div>

<div id="windown_box" class="modal fade">
    <div class="pop_title">
        <div class="pop_name">登录</div>
        <i class="pop_close" onclick="$('#windown_box').modal('hide')"></i>
    </div>
    <div class="pop_content">
        <div class="form_item">
            <div class="item_tip">用户名/邮箱</div>
            <input id="email" name="email"  class="form_input" type="text" autocomplete="off" tabindex="1" value="" onblur="blurInputLoginBox($(this))"  onfocus ="focusInputLoginBox($(this))"/>
        </div>
        <div class="form_item">
            <div class="item_tip">密码</div>
            <input name="pwd" id="pwd"class="form_input" type="password" tabindex="2" value="" onblur="blurInputLoginBox($(this))"  onfocus ="focusInputLoginBox($(this))" />
        </div>
        <div class="captchaBox">
            <div class="two_weeks">
                <input id="rememberme" class="ckeckBox" type="checkbox" name="rememberme">
                <label for="rememberme">两周内免登录</label>
                <a  href="/reg.html" target="_blank" class="loginbox_reg">免费注册</a>
            </div>
        </div>
        <p class="notice_error"></p>
        <input id="btn_login" class="btn" type="button" onclick="sublogin()" tabindex="4" value="登  录">
        <a class="a_underline" href="/forget.html">忘记密码？</a>
        <div class="co_login" style="margin:20px 0 0">
                联合登录
                <a class="a_underline" href="/Index/login/type/qq.html">腾讯QQ</a>
                <a class="a_underline" href="/Index/login/type/sina.html">新浪微博</a>
                <a class="a_underline" href="/Index/login/type/renren.html">人人网</a>
                绑定送<span class="red">200</span>积分
            </div>
    </div>
</div>
<div class="mmsg-box mmsg-box-info" id='msg-box' style="margin-top: -23.5px; margin-left: -96.5px;">
    <div class="mmsg-content">
        <i class="mmsg-icon"></i>
        <p id='msg-box-content'></p>
    </div>
    <div class="mmsg-background"></div>
</div>
    <script src="<?php echo css_js_url('jquery.js','www')?>" type="text/javascript"></script>
    <script src="<?php echo css_js_url('common.js','www')?>" type="text/javascript"></script>
    <script src="<?php echo css_js_url('other/jquery.SuperSlide.2.1.1.js','www')?>" type="text/javascript"></script>
</body>
</html>
