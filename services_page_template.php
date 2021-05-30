<?php
/*
Template Name: Services
*/
?>

<?php get_header(); /* Tells WordPress to include header.php */ ?>

<section class="container-fluid"><!--- container fluid evening expereince tour-->

<div class="container"><!--- container -->

<article class="excerpts"><!----> <!--we can reuse the css on the old article to restyle the new dynamic posts-->
	
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			
<div class="post single-page">
		<h3 class="posttitle" id="post-<?php the_ID(); ?>"><?php the_title(); ?></h3>

		<div class="postcontent">
			<?php /*?><?php the_post_thumbnail(array(150,150), array ('class' => 'alignright')); ?><?php */?>
			<?php the_content(); ?>
		<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong>', 'after' => '</p>')); ?>
        </div><!--postcontet-->
		
	</div><!--post class-->

   
<?php endwhile; ?>
	
	<?php else: ?>
	<div class="post">
		<p>Sorry, no posts found.</p>
	</div><!--post-->
	<?php endif; ?>
	</article><!---->

<div class="col-md-6 image-stack">
    <div class="image-stack__item image-stack__item--topevening">
      <img class="img-responsive" alt=“ArtworkFremantle” src="http://206.189.45.97/~mesh4/wp-content/themes/flipside_tours_webdesign/
images/eveningtours_imagery02.png" width="200">
    </div>
    <div class="image-stack__item image-stack__item--bottomevening">
     <img class="img-responsive" alt=“FremantleCafeStrip” src="http://206.189.45.97/~mesh4/wp-content/themes/flipside_tours_webdesign/
images/eveningtours_imagery01.png" width="350">
    </div>
    
<div class="image-stack__item--graphicevening">
      <img class="img-responsive" alt=“FremantleTunnel” src="http://206.189.45.97/~mesh4/wp-content/themes/flipside_tours_webdesign/
images/eveningtours_graphic.png" width="350">
    </div>
    
</div>
    </div>
      </section><!--- container fluid evening expereince tour-->  

<section class="container-fluid ghostoursbg"><!--- container fluid paranormal ghost tour-->

<div class="container"><!--- container -->

<div class="col-md-6">
    
    <div class="image-stack__item image-stack__item--bottomghost">
     <img class="img-responsive" alt=“FremantleTunnel” src="http://206.189.45.97/~mesh4/wp-content/themes/flipside_tours_webdesign/images/freamtletunnel.png" width="400">
    </div>
    
    <div class="image-stack__item image-stack__item--topghost">
      <img class="img-responsive" alt=“Prison” src="http://206.189.45.97/~mesh4/wp-content/themes/flipside_tours_webdesign/images/prisoncircle.png" width="300">
    </div>    
    </div>
    
    <div class="col-md-6 text-left ghosttourdetail">    
        <article class="excerpts"><!----> <!--we can reuse the css on the old article to restyle the new dynamic posts-->
	
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			
<div class="post single-page">
		<h3 class="posttitle" id="post-<?php the_ID(); ?>"><?php the_title(); ?></h3>

		<div class="postcontent">
			<?php /*?><?php the_post_thumbnail(array(150,150), array ('class' => 'alignright')); ?><?php */?>
			<?php the_content(); ?>
		<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong>', 'after' => '</p>')); ?>
        </div><!--postcontet-->
		
	</div><!--post class-->

   
<?php endwhile; ?>
	
	<?php else: ?>
	<div class="post">
		<p>Sorry, no posts found.</p>
	</div><!--post-->
	<?php endif; ?>
	</article><!---->
    
<button type="button" class="btn btn-ghost">Book Ghostly Tour Now! </button>

<img class="img-responsive ghostgraphic" alt=“Graphic” src="http://206.189.45.97/~mesh4/wp-content/themes/flipside_tours_webdesign/images/realghostgraphic.png" width="200">
    </div>
    </div> 
</section>

<section class="container-fluid testimoniescontainer"><!--- container fluid testimonies-->

<div class="container"><!--- container -->
    
<div class="col-md-6 ">
        
 <img class="img-responsive janeparkinprofile" alt=“JaneParkins” src="http://206.189.45.97/~mesh4/wp-content/themes/flipside_tours_webdesign/images/testimony-jp.png" width="150 ">
    <p class="testimony"> Jane Parkins</p> 
         <img class="img-responsive speechmarks" alt="speechmarks" src="http://206.189.45.97/~mesh4/wp-content/themes/flipside_tours_webdesign/images/speechmarks.png" width="150 ">   
   <article class="excerpts"><!----> <!--we can reuse the css on the old article to restyle the new dynamic posts-->
	
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			
<div class="post single-page">
		<h3 class="posttitle" id="post-<?php the_ID(); ?>"><?php the_title(); ?></h3>

		<div class="postcontent">
			<?php /*?><?php the_post_thumbnail(array(150,150), array ('class' => 'alignright')); ?><?php */?>
			<?php the_content(); ?>
		<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong>', 'after' => '</p>')); ?>
        </div><!--postcontet-->
		
	</div><!--post class-->

   
<?php endwhile; ?>
	
	<?php else: ?>
	<div class="post">
		<p>Sorry, no posts found.</p>
	</div><!--post-->
	<?php endif; ?>
	</article><!---->
        </div>
    
    <div class="col-md-6 marcuscontainer">    

        <img class="img-responsive marcussmithprofile" alt=“MarcusSmith” src="http://206.189.45.97/~mesh4/wp-content/themes/flipside_tours_webdesign/images/testimonyms.png" width="150">
    <p class="testimony"> Marcus Smith</p> 
         <img class="img-responsive speechmarks" alt="speechmarks" src="http://206.189.45.97/~mesh4/wp-content/themes/flipside_tours_webdesign/images/speechmark.png" width="150 ">   
    <article class="excerpts"><!----> <!--we can reuse the css on the old article to restyle the new dynamic posts-->
	
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			
<div class="post single-page">
		<h3 class="posttitle" id="post-<?php the_ID(); ?>"><?php the_title(); ?></h3>

		<div class="postcontent">
			<?php /*?><?php the_post_thumbnail(array(150,150), array ('class' => 'alignright')); ?><?php */?>
			<?php the_content(); ?>
		<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong>', 'after' => '</p>')); ?>
        </div><!--postcontet-->
		
	</div><!--post class-->

   
<?php endwhile; ?>
	
	<?php else: ?>
	<div class="post">
		<p>Sorry, no posts found.</p>
	</div><!--post-->
	<?php endif; ?>
	</article><!---->
        </div>
  
    </div>
      </section>
<?php get_footer(); ?>