<div style="display: none;">
{{--
  Template Name: home template
--}}

@extends('layouts.app')
@section('content')
  @while(have_posts()) @php the_post() @endphp
    @include('partials.page-header')

  @endwhile
@endsection
</div>
<?php include 'header.php';?>

<div class="content">
<div class="banner">
<div class="banner-content">
<div class="container">
<div class="title">NC Tuinservice</div>
<div class="subtitle vidaloka">Tuinieren en andere services</div>
<div class="btn-group">
<a href="gamelist.php" class="btn btn-primary">Contact</a>
<a href="timeline.php" class="btn btn-darkgreen">Nieuwsbrief</a>
</div>
<i class="fa fa-chevron-down" aria-hidden="true"></i>
</div>
</div>
<div class="banner-image">
<img src="http://localhost/projecten/wp-content/themes/shsite/css/images/soma.jpg" alt="">
</div>
</div>

<section class="intro">
<div class="container">
<div class="row row-eq-height">
<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 align-center">
<h1 class="titel"><?php the_field('titel_vak'); ?></h1>
<p>

<?php the_field('tekst_vak'); ?>

</p>
<a href="gamelist.php" class="btn btn-default">Contact</a>
</div>
<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
<img src="http://localhost/projecten/wp-content/themes/shsite/css/images/fg-small.png" alt="" class="img-responsive">
</div>
</div>
</div>
</section>
<section class="bg-darkbrown text-center">
<div class="container">
<?php if( have_rows('column-repeater') ): ?>
<div class="row">



<?php  while ( have_rows('column-repeater') ) : the_row(); ?>

<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
<h2><span class="brown"><?php the_sub_field('column_title'); ?></span><?php the_sub_field('column_title'); ?></h2>
<p class="light less-wide"><?php the_sub_field('column_description'); ?></p>
</div>


<?php endwhile; ?>




</div>
<?php endif; ?>
</div>
</section>
<section class="carousel">
<div class="container-fluid">
<div class="row vertical-align">
<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
<div id="poort-carousel" class="carousel slide">
<!-- Wrapper for slides -->
<div class="carousel-inner" role="listbox">
							<div class="item active">
			<img src="http://localhost/projecten/wp-content/themes/shsite/css/images/sp/amnesia1.jpg" alt="">
	</div>
								<div class="item ">
			<img src="http://localhost/projecten/wp-content/themes/shsite/css/images/sp/soma2.jpg" alt="">
	</div>
								<div class="item ">
			<img src="http://localhost/projecten/wp-content/themes/shsite/css/images/sp/penumbra1.jpg" alt="">
	</div>
			</div>
<!-- Controls -->
<a class="left carousel-control" href="#poort-carousel" role="button" data-slide="prev">
<span class="fa fa-chevron-left" aria-hidden="true"></span>
<span class="sr-only">Vorige</span>
</a>
<a class="right carousel-control" href="#poort-carousel" role="button" data-slide="next">
<span class="fa fa-chevron-right" aria-hidden="true"></span>
<span class="sr-only">Volgende</span>
</a>
</div></div>
<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
<div class="fifty-wide">
<div class="icon">
<img src="https://mosterdmaasland.nl/wp-content/uploads/2017/11/Mosterd_Icon_Poort.svg" width="96" height="60" alt="">
</div>
<div class="titel nopadding">Tuinservice Nieuwsbrief</div>
<div class="seperator"></div>
<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
<a href="timeline.php" class="btn btn-default">Nieuwsbrief</a>
</div>
</div>
</div></div>
</section>
<section class="carousel">
<div class="container-fluid">
<div class="row vertical-align">
<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 order-2">
<div class="fifty-wide">
<div class="icon">
<img src="https://mosterdmaasland.nl/wp-content/uploads/2017/11/Mosterd_Icon_Deur.svg" width="96" height="60" alt="">
</div>
<div class="titel nopadding">Tuinservice contact</div>
<div class="seperator"></div>
<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</p>
<a href="gamelist.php" class="btn btn-default">Contact</a>
</div>
</div>
<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 order-1">
<div id="deur-carousel" class="carousel slide">
<!-- Wrapper for slides -->
<div class="carousel-inner" role="listbox">
							<div class="item active">
			<img src="http://localhost/projecten/wp-content/themes/shsite/css/images/sp/soma1.jpg" alt="">
	</div>
								<div class="item ">
			<img src="http://localhost/projecten/wp-content/themes/shsite/css/images/sp/penumbra2.jpg" alt="">
	</div>
								<div class="item ">
			<img src="http://localhost/projecten/wp-content/themes/shsite/css/images/sp/amnesia2.jpg" alt="">
	</div>
			</div>
<!-- Controls -->
<a class="left carousel-control" href="#deur-carousel" role="button" data-slide="prev">
<span class="fa fa-chevron-left" aria-hidden="true"></span>
<span class="sr-only">Vorige</span>
</a>
<a class="right carousel-control" href="#deur-carousel" role="button" data-slide="next">
<span class="fa fa-chevron-right" aria-hidden="true"></span>
<span class="sr-only">Volgende</span>
</a>
</div></div>
</div></div>
</section>
<section class="bg-darkgreen text-center hidden-xs">
<div class="container">
<h2 class="titel"><span class="vidaloka"><em>Lorem Ipsum</em></span></h2>
<?php if( have_rows('column-repeater-2') ): ?>
<div class="row">

<?php  while ( have_rows('column-repeater-2') ) : the_row(); ?>


<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
<div class="year"><?php the_sub_field('column_title'); ?></div>
<div class="seperator white"></div>
<p class="light"><?php the_sub_field('column_description'); ?></p>
</div>


<?php endwhile; ?>




</div>
<?php endif; ?>
</section>

</div>

<?php include 'footer.php';?>


<!-- Dynamic page generated in 0.243 seconds. -->
<!-- Cached page generated by WP-Super-Cache on 2019-06-30 20:48:30 -->

<!-- super cache --></body></html>
