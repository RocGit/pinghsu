<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="<?php $this->options->charset(); ?>">
    <?php if ($this->options->DnsPrefetch): ?>

    <meta http-equiv="x-dns-prefetch-control" content="on">
    <?php if ($this->options->cdn_add): ?>

    <link rel="dns-prefetch" href="<?php $this->options->cdn_add(); ?>" />
    <?php endif; ?>

    <link rel="dns-prefetch" href="//cdn.bootcss.com" />
    <link rel="dns-prefetch" href="//secure.gravatar.com" />
    <?php endif; ?>

    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
    <meta name="renderer" content="webkit">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="Cache-Control" content="no-transform"/>
    <meta http-equiv="Cache-Control" content="no-siteapp"/>
    <link rel="shortcut icon" href="<?php if($this->options->favicon): $this->options->favicon(); else: $this->options->themeUrl('images/favicon.png');endif; ?>">
    <link rel="apple-touch-icon" href="<?php if($this->options->iosicon): $this->options->iosicon(); else: $this->options->themeUrl('images/apple-touch-icon.png');endif; ?>">
    <title><?php $this->archiveTitle(array(
    'category'  =>  _t(' %s '),
    'search'    =>  _t(' %s '),
    'tag'       =>  _t(' %s '),
    'author'    =>  _t(' %s '),
    'date'      =>  _t(' %s ')
    ), '', ' - '); ?><?php $this->options->title(); ?></title>
    <meta name="keywords" content="<?php $this->keywords() ?>" />
    <?php $this->header('keywords=&generator=&template=&pingback=&xmlrpc=&wlw=&commentReply=&rss1=&rss2=&atom='); ?>
    <link href="//cdn.bootcss.com/highlight.js/9.9.0/styles/xcode.min.css" rel="stylesheet">
    <link href="<?php $this->options->themeUrl('style.css'); ?>" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="//cdn.bootcss.com/html5shiv/r29/html5.min.js"></script>
    <script src="//cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="<?php if (array_key_exists('archive',unserialize($this->___fields()))): ?>bg-grey<?php elseif($this->is('archive')): ?>bg-grey<?php elseif(!$this->is('single')): ?>bg-grey<?php endif; ?>" gtools_scp_screen_capture_injected="true">
<!--[if lt IE 8]>
<div class="browsehappy" role="dialog">
    当前网页 <strong>不支持</strong> 你正在使用的浏览器. 为了正常的访问, 请 <a href="http://browsehappy.com/" target="_blank">升级你的浏览器</a>。
</div>
<![endif]-->
<header id="header" class="header bg-white">
    <div class="navbar-container">
        <a href="<?php $this->options->siteUrl(); ?>" class="navbar-logo">
            <img src="<?php if($this->options->logoUrl): $this->options->logoUrl(); else: $this->options->themeUrl('images/logo.png');endif; ?>" alt="<?php $this->options->title() ?>" />
        </a>
        <div class="navbar-menu">
            <?php $this->widget('Widget_Contents_Page_List')->to($pages); ?>
            <?php while($pages->next()): ?>

            <a<?php if($this->is('page', $pages->slug)): ?> class="current"<?php endif; ?> href="<?php $pages->permalink(); ?>"><?php $pages->title(); ?></a>
            <?php endwhile; ?>

        </div>
        <div class="navbar-search" onclick="">
            <span class="icon-search"></span>
            <form id="search" method="post" action="/" role="search">
                <span class="search-box">
                    <input type="text" id="input" class="input" name="s" required="true" placeholder="Search..." maxlength="30" autocomplete="off">
                </span>
            </form>
        </div>
        <div class="navbar-mobile-menu" onclick="">
            <span class="icon-menu cross"><span class="middle"></span></span>
            <ul>
                <?php $this->widget('Widget_Contents_Page_List')->to($pages); ?>
                <?php while($pages->next()): ?>

                <li><a<?php if($this->is('page', $pages->slug)): ?> class="current"<?php endif; ?> href="<?php $pages->permalink(); ?>"><?php $pages->title(); ?></a></li>
                <?php endwhile; ?>

            </ul>
        </div>
    </div>
</header>