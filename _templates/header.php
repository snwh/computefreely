<?php
if (!isset($page['path'])) {
    $page['path'] = str_replace($sitewide['root'], '/', $sitewide['path']);
}
if (!isset($page['name'])) {
    $page['name'] = trim(preg_replace('#\.php$#', '', $page['path']), '/');
    if (empty($page['name'])) {
        $page['name'] = 'index';
    }
}
?>
<!doctype html>
<html>
<head>
    <!--

    Hello there, the best web developers always look at the source of other webpages. ;)

    -->

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="description" content="<?php echo !empty($page['description']) ? $page['description'] : $sitewide['description']; ?>">
    <meta name="author" content="<?php echo !empty($page['author']) ? $page['author'] : $sitewide['author']; ?>">
    <meta name="keywords" content="<?php echo !empty($page['keywords']) ? $page['keywords'] : $sitewide['keywords']; ?>">
    <meta name="theme-color" content="<?php echo !empty($page['theme-color']) ? $page['theme-color'] : $sitewide['theme-color']; ?>">

    <!-- Social Metadata -->
    <?php if ( !empty($page['image']) ) { ?>
<meta name="twitter:card" content="summary_large_image">
    <?php } else { ?>
<meta name="twitter:card" content="summary">
    <?php } ?>

    <meta name="twitter:title" content="<?php echo !empty($page['title']) ? $page['title'] : $sitewide['title']; ?>">
    <meta name="twitter:description" content="<?php echo !empty($page['description']) ? $page['description'] : $sitewide['description']; ?>">
    <meta name="twitter:image" content="<?php echo !empty($page['image']) ? $page['image'] : $sitewide['image']; ?>" />
    <meta name="twitter:site" content="@snwh">
    <meta name="twitter:creator" content="@snwh">

    <meta property="og:title" content="<?php echo !empty($page['title']) ? $page['title'] : $sitewide['title']; ?>" />
    <meta property="og:description" content="<?php echo !empty($page['description']) ? $page['description'] : $sitewide['description']; ?>" />
    <meta property="og:image" content="<?php echo !empty($page['image']) ? $page['image'] : $sitewide['image']; ?>" />

    <meta itemprop="name" content="<?php echo !empty($page['title']) ? $page['title'] : $sitewide['title']; ?>" />
    <meta itemprop="description" content="<?php echo !empty($page['description']) ? $page['description'] : $sitewide['description']; ?>" />
    <meta itemprop="image" content="<?php echo !empty($page['image']) ? $page['image'] : $sitewide['image']; ?>" />

    <meta name="apple-mobile-web-app-title" content="Compute Freely">

    <title><?php echo !empty($page['title']) ? $page['title'] : $sitewide['title']; ?></title>

    <base href="<?php echo $sitewide['root']; ?>">

    <link rel="shortcut icon" href="/img/favicon.png">
    <link rel="icon" type="image/png" href="/img/icon.png" sizes="144x144">

    <!-- Apple Touch Icon -->
    <link rel="apple-touch-icon-precomposed" href="/img/apple-touch-icon-57x57-precomposed.png"><!--57x57-->
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="/img/apple-touch-icon-72x72-precomposed.png"><!--72x72-->
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="/img/apple-touch-icon-114x114-precomposed.png"><!--114x114-->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="/img/apple-touch-icon-144x144-precomposed.png"><!--144x144-->

    <!-- Stylesheets -->
    <link rel="stylesheet" type="text/css" href="/css/normalize.css">
    <link rel="stylesheet" type="text/css" href="/css/style.css">

    <!-- Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600%7CSlabo+27px:400%7COswald' rel='stylesheet' type='text/css' />
    <link rel="stylesheet" type="text/css" media="all" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    
    <!-- Scripts -->
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="/js/popover.js"></script>
    <script type="text/javascript" src="/js/smooth-scrolling.js"></script>

    <?php echo !empty($page['js']) ? $page['js'] : false; ?>

    <!-- Google Analytics -->
    <?php if ( $trackme ) { ?>
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-58890488-1', 'auto');
        ga('send', 'pageview');
    </script>
    <?php } ?>
<!-- End Head -->
</head>
<body>
