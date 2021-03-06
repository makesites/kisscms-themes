<!doctype html>
<!--[if lt IE 7 ]> <html class="no-js ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]>    <html class="no-js ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]>    <html class="no-js ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
	<title><? Meta::title() ?></title>
	<? Template::head(); ?>
    <link rel="stylesheet" href="<?=myUrl()?>/assets/css/main.css" type="text/css" media="screen" />
</head>

<body>

    <header>
    	<h1><a href="/"><?=$config['main']['site_name']?></a></h1>
	</header>

	<aside>
		<? Menu::ul(); ?>
	</aside>
    
    <? Breadcrumb::inline("id: path, h3: 'You are here:', delimiter: '&gt;'")?> 

    <div id="article">
        <? Template::body(); ?>
    </div>


<? Template::foot(); ?>

</body>
</html>
