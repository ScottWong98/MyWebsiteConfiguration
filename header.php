<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="<?php $this->options->charset(); ?>"><?php if ($this->options->DnsPrefetch): ?>
    <meta http-equiv="x-dns-prefetch-control" content="on"><?php if ($this->options->cdn_add): ?>
    <link rel="dns-prefetch" href="<?php $this->options->cdn_add(); ?>" /><?php endif; ?>
    <link rel="dns-prefetch" href="//cdn.bootcss.com" />
    <link rel="dns-prefetch" href="//secure.gravatar.com" /><?php endif; ?>
    <script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.min.js"></script>
    <script src="<?php $this->options->themeUrl('js/OwO.min.js?v20180718'); ?>"></script>
    <script src="<?php $this->options->themeUrl('js/blazy.js?v20180725'); ?>"></script>
    <?php if ($this->options->pjaxSet == 'able'): ?>
    <script src="<?php $this->options->themeUrl('js/instantclick.min.js?v20180705'); ?>" data-no-instant></script>
    <?php endif; ?>
    <link rel="stylesheet" href="<?php $this->options->themeUrl('css/OwO.min.css?v20180718'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
    <meta name="renderer" content="webkit">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="Cache-Control" content="no-transform"/>
    <meta http-equiv="Cache-Control" content="no-siteapp"/><?php if($this->options->favicon): ?>
    <link rel="shortcut icon" href="<?php $this->options->favicon(); ?>"><?php endif;?><?php if($this->options->iosicon): ?>
    <link rel="apple-touch-icon" href="<?php $this->options->iosicon();?>"><?php endif; ?>
    <title><?php $this->archiveTitle(array(
    'category'  =>  _t(' %s '),
    'search'    =>  _t(' %s '),
    'tag'       =>  _t(' %s '),
    'author'    =>  _t(' %s '),
    'date'      =>  _t(' %s ')
    ), '', ' - '); ?><?php $this->options->title(); ?></title>
    <meta name="keywords" content="<?php $this->keywords(); ?>" />
    <?php $this->header('keywords=&generator=&template=&pingback=&xmlrpc=&wlw=&commentReply=&rss1=&rss2=&atom='); ?>
    <link href="//cdn.bootcss.com/highlight.js/9.10.0/styles/xcode.min.css" rel="stylesheet">
    <link href="https://cdn.bootcss.com/emojify.js/1.1.0/css/basic/emojify.min.css" rel="stylesheet">
    <link href="<?php $this->options->themeUrl('css/style.min.css?20180619'); ?>" rel="stylesheet"> 
    <!--[百度统计]-->
    <script>
        var _hmt = _hmt || [];
        (function() {
              var hm = document.createElement("script");
              hm.src = "https://hm.baidu.com/hm.js?e1ef4971fb8dd58f8e32a57a9ecb0382";
              var s = document.getElementsByTagName("script")[0]; 
              s.parentNode.insertBefore(hm, s);
        })();
    </script>
</head>
<body class="<?php if (array_key_exists('archive',unserialize($this->___fields()))): ?>bg-grey<?php elseif($this->is('archive')&&($this->options->colorBgPosts == 'defaultColor')): ?>bg-grey<?php elseif($this->is('archive')&&($this->options->colorBgPosts == 'customColor')): ?>bg-white<?php elseif(!$this->is('single')): ?>bg-grey<?php endif; ?>" gtools_scp_screen_capture_injected="true">
<header id="header" class="header bg-white">
    <div class="navbar-container">
        <a href="<?php $this->options->siteUrl(); ?>" class="navbar-logo">
            <?php if($this->options->logoUrl): ?>
            <img src="<?php $this->options->logoUrl();?>" alt="<?php $this->options->title() ?>" />
            <?php else : ?>
            <?php $this->options->title() ?>
            <?php endif; ?>
        </a>
        <div class="navbar-menu">

            <?php $this->widget('Widget_Contents_Page_List')->to($pages); ?>
            <?php while($pages->next()): ?>

            <a<?php if($this->is('page', $pages->slug)): ?> class="current"<?php endif; ?> href="<?php $pages->permalink(); ?>"><?php $pages->title(); ?></a>
            <?php endwhile; ?>

        </div>
        <?php if($this->options->searchPage): ?>
        <a href="<?php $this->options->searchPage(); ?>" class="navbar-search">
            <span class="icon-search"></span>
        </a>
        <?php else: ?>
        <div class="navbar-search" onclick="">
            <span class="icon-search"></span>
            <form id="search" method="post" action="<?php $this->options->siteUrl(); ?>" role="search">
                <span class="search-box">
                    <input type="text" id="input" class="input" name="s" required="true" placeholder="Search..." maxlength="30" autocomplete="off">
                </span>
            </form>
        </div>
        <?php endif;?>
        <div class="navbar-mobile-menu" id="navbar-mobile-swith" onclick="">
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
