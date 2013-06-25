<?php snippet('header') ?>

<section class="content">
	<div class="main-container">
	    <div class="main">
	        <section class="wrapper cf">
        	  <h1 class="page-title"><?php echo html($page->title()) ?></h1>
        	  <?php echo kirbytext($page->text()) ?>
	        	<ul>
	        	  <?php foreach($page->images() as $img): ?>
	        	  <li class="screen"><img src="<?php echo $img->url() ?>" alt="<?php echo $img->title() ?>" /></li>
	        	  <?php endforeach ?>
	        	</ul>
	        	<section class="related cf">
	        		<h3>more projects</h3>
	        		<ul>
	        		  <?php foreach(related($page->related()) as $related): ?>
	        		  <li><a href="<?php echo $related->url() ?>"><figure><img src="<?php echo $related->images()->find('01-cover.jpg')->url() ?>" /></figure></a></li>
	        		  <?php endforeach ?>
	        		</ul>
	        		<p><a href="../work">&laquo;&nbsp;All projects</a></p>
	        	</section>

	        </section>
	    </div> <!-- #main -->
	    <?php snippet('touchpoint') ?>
	    
	</div> <!-- #main-container -->

</section>

<?php snippet('footer') ?>