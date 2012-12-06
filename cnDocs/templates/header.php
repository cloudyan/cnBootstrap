<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title><?php echo $title; ?> · Oricode - Twitter Bootstrap</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="<?php echo $description; ?>">
<!--<link rel="icon" href="/favicon/favicon.ico" type="image/x-icon" />
<link rel="shortcut icon" href="/favicon/favicon.ico" type="image/x-icon" />
<link href="/Oricode/mbase/css/reset-min.css" rel="stylesheet" />
<link href="/Oricode/mbase/css/common-min.css" rel="stylesheet" />

<link href="/Oricode/mbase/css/topbar.css" rel="stylesheet" />

<link href="/Oricode/mbase/css/ui-lvmama.css" rel="stylesheet" />
<link href="/Oricode/mbase/css/ui-components.css" rel="stylesheet" />
<link href="/Oricode/mbase/css/lv-bought.css" rel="stylesheet" />
<link href="/Oricode/mbase/css/artDialog.css" rel="stylesheet" />-->

<meta name="author" content="Authors of Bootstrap">
<link href="assets/css/reset.css" rel="stylesheet">
<link href="assets/css/common.css" rel="stylesheet">
<!-- Le styles -->
<link href="assets/css/bootstrap.css" rel="stylesheet">
<link href="assets/css/bootstrap-responsive.css" rel="stylesheet">
<link href="assets/css/docs.css" rel="stylesheet">
<link href="assets/js/google-code-prettify/prettify.css" rel="stylesheet">
<link href="assets/js/jscrollpane/jquery.jscrollpane.css" rel="stylesheet">
<!--<link href="assets/css/icons-pure-css.css" rel="stylesheet">-->
<link href="assets/css/custom.css" rel="stylesheet">
<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<!-- Le fav and touch icons -->
<link rel="shortcut icon" href="assets/ico/favicon.ico">
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
<link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
</head>
<body data-spy="scroll" data-target=".bs-docs-sidebar">
<!-- Navbar
================================================== -->

<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container">
            <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
			</button>
			<a class="brand" href="./index.php">Bootstrap</a>
            <div class="nav-collapse collapse">
                <ul class="nav">
                    <li <?php if(isset($page) && $page == 'home') echo 'class="active"' ?>> <a href="./index.php">Home</a> </li>
                    <li <?php if(isset($page) && $page == 'getting') echo 'class="active"' ?>> <a href="./getting-started.php">Get started</a> </li>
                    <li <?php if(isset($page) && $page == 'scaffolding') echo 'class="active"' ?>> <a href="./scaffolding.php">Scaffolding</a> </li>
                    <li <?php if(isset($page) && $page == 'base-css') echo 'class="active"' ?>> <a href="./base-css.php" title="基础样式">Base CSS</a> </li>
                    <li <?php if(isset($page) && $page == 'components') echo 'class="active"' ?>> <a href="./components.php" title="交互组件">Components</a> </li>
                    <li <?php if(isset($page) && $page == 'javascript') echo 'class="active"' ?>> <a href="./javascript.php">Javascript</a> </li>
                    <li <?php if(isset($page) && $page == 'customize') echo 'class="active"' ?>> <a href="./customize.php" title="定制">Customize</a> </li>
                    <li class="divider-vertical"></li>
                    <li <?php if(isset($page) && $page == 'bugs-fixed') echo 'class="active"' ?>> <a href="./bugs-and-fixed.php">Bugs and Fixed</a> </li>
                    <li <?php if(isset($page) && $page == 'project') echo 'class="active"' ?>> <a href="./project.php">Project</a> </li>
                    <li <?php if(isset($page) && $page == 'update') echo 'class="active"' ?>> <a href="./update-log.php">Update log</a> </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- 
===============================================
===============================================
-------------------- 分割线 --------------------
===============================================
===============================================
-->