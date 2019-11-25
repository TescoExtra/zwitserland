

<head>
<link rel="shortcut icon" type="image/png" href="http://localhost/projecten/wp-content/themes/shsite/css/images/36.png"/>
</head>

<body class="home page-template page-template-page-home page-template-page-home-php page page-id-257">
<header>
<div class="container">
<nav class="navbar navbar-default">
<div class="navbar-header">
<div class="pull-left">
</div>
<a class="navbar-brand" href="#">
<img src="http://localhost/projecten/wp-content/themes/shsite/css/images/fg.png" class="logo-big" width="150" height="150" alt="Logo">
<img src="http://localhost/projecten/wp-content/themes/shsite/css/images/fg-small.png" class="logo-small" width="160" height="55" alt="Logo">
</a>
<div class="pull-right">
<button class="hamburger hamburger-animation" data-target="#menu">
<span class="sr-only">Toggle navigation</span>
<span>Menu</span>
</button>
</div>
</div>
<div id="menu" class="navbar-collapse">
<ul id="menu-menu" class="nav navbar-nav"><li id="menu-item-260" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-257 current_page_item menu-item-260"><a href="http://localhost/projecten/home/">Home</a></li>
<li id="menu-item-261" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-261"><a href="http://localhost/projecten/nieuwsbrief">Nieuwsbrief</a></li>
<li id="menu-item-258" class="btn outline menu-item menu-item-type-post_type menu-item-object-page menu-item-258"><a href="http://localhost/projecten/Contact/">Contact</a></li>
</ul></div>
</nav>
</div>
</header>

<div class="content">
<div class="banner">
<div class="banner-content">
<div class="container">
<div class="title">Portfolio</div>
<div class="subtitle vidaloka">Een aantal fotos van oude projecten!</div>
<div class="btn-group">
<a href="http://localhost/projecten/home/" class="btn btn-primary">Home</a>
<a href="http://localhost/projecten/contact/" class="btn btn-darkgreen">Contact</a>
</div>
<i class="fa fa-chevron-down" aria-hidden="true"></i>
</div>
</div>
<div class="banner-image">
<img src="http://localhost/projecten/wp-content/themes/shsite/css/images/soma2.jpg" alt="">
</div>
</div>

<body>





<div class="workwith" id="work">
    <div class="work_text">
        <h1> Portfolio Fotos </h1>
    </div>
    <div class="container" style="text-align: center;">
    <?php if( have_rows('slides') ): ?>

	<div class="work_logos d-flex flex-wrap">

	<?php while( have_rows('slides') ): the_row(); 

		// vars
		$image = get_sub_field('image');

		?>
        <div class="work_logo">
            <img src="<?php echo $image; ?>"/>
        </div>

	<?php endwhile; ?>
    </div>
	</div>

<?php endif; ?>
</div>

<style>

.workwith {
  width: 100%;
  padding: 2em;
}

  .workwith .work_text {
    justify-content: center;
    display: flex;
    margin: 1em 0 2em 0;
    color: black;
    text-transform: uppercase;
    text-align: center;
  }

    .workwith .work_text h1 {
      font-weight: 600;
    }

    .workwith .work_logos {
    width: 100%;
    max-width: 1400px;
    margin: auto;
    justify-content: center;
    }

    .workwith .work_logos .work_logo {
      justify-content: center;
      display: inline-flex;
      flex-direction: column;
      width: 26em;
      color: black;
      margin: 1em 0;
    }

      .workwith .work_logos .work_logo img {
        width: auto;
        max-width: 100%;
        margin: 1em;
      }

</style>

















</body>
<br/>
<br/>

<link rel="dns-prefetch" href="//maxcdn.bootstrapcdn.com"/>
<link rel="stylesheet" href="http://localhost/projecten/wp-content/themes/shsite/css/front-min.css" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" id="plugin-css" href="http://localhost/projecten/wp-content/themes/shsite/css/plugin.css" type="text/css" media="all"/>
<link rel="stylesheet" id="theme-css" href="http://localhost/projecten/wp-content/themes/shsite/css/theme.css" type="text/css" media="all"/>
<link rel="stylesheet" id="responsive-css" href="http://localhost/projecten/wp-content/themes/shsite/css/responsive.css" type="text/css" media="all"/>
<link rel="stylesheet" id="fontawesome-css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css" media="all"/>
<?php include 'footer.php';?>