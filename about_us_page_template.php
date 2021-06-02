<?php
/*
Template Name: About Us
*/
?>
<?php get_header(); /* Tells WordPress to include header.php */ ?>
<section class="container-fluid notyourstandardtourbg"><!--- container fluid not your standard tour-->

<div class="container"><!--- container -->
<div class="col-md-6 text-teft">
<?php
global $more;//define a global variable
$more = 0;// the global varibale is now equal to 0
query_posts('cat=11');//look for posts that have the category of 2
if(have_posts()) ://if we have posts to display
while(have_posts()) :the_post();//LOOP through all the posts and find the one that has a category of 2 get thet title and content
?>
<h2><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h2> 
            <div><p class="about-text"><?php the_content() ?></p></div>
<?php
endwhile;
endif;
wp_reset_query();?> 
    </div>        
<div class="col-md-6 text-center notyourstandardtourjanecontainer">        
<img class="img-responsive notyourstandardtourimage" alt=“JaneBree” src="images/janebreeaboutus.png" width="250"> 
<p>Together we can bridge the gap <br> between tourists and Fremantle </p>
<p> <strong> Jane Bree , Founder + Guide</strong></p>
<img class="img-responsive speechmarksjane1" alt=“Speechmarks” src="images/speechmarks_JoshPayne_01.png" width="80">
<img class="img-responsive speechmarksjane2" alt=“Speechmarks” src="images/speechmarks_JoshPayne_02.png" width="80">
        </div> 
        
     </div> <!--- container -->
    </section> <!--- container fluid not your standard tour-->

<section class="container-fluid communitychatscontainer"><!--- container fluid Flipside Communtiy Chats -->
    

<div class="container"> <!--- container -->

<div class="row">
    
<div class="col-md-6 colpaddingchats">
<?php
global $more;//define a global variable
$more = 0;// the global varibale is now equal to 0
query_posts('cat=13');//look for posts that have the category of 2
if(have_posts()) ://if we have posts to display
while(have_posts()) :the_post();//LOOP through all the posts and find the one that has a category of 2 get thet title and content
?>
<h2><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h2> 
            <div><p class="about-text"><?php the_content() ?></p></div>
<?php
endwhile;
endif;
wp_reset_query();?>
<button type="button" class="btn btn-chats"> Check Out The Gallery! </button>

</div>
        
<div class="col-md-6 colpadding image-stack">
    <div class="image-stack__item image-stack__item--topchats">
      <img class="img-responsive" alt=“ArtworkFremantle” src="images/communitychats_02.png" width="300">
    </div>
    <div class="image-stack__item image-stack__item--bottomchats">
     <img class="img-responsive" alt=“FremantleCafeStrip” src="images/communitychats_01.png" width="500">
    </div>
    
<div class="image-stack__item--graphic">
      <img class="img-responsive" alt=“FremantleTunnel” src="images/customercaregraphic.png" width="250">
    </div>
    
        </div>
        
    </div> <!--- row -->
    
    </div> <!--- container -->
    
</section> <!--- container fluid Flipside Communtiy Chats -->
      
<section class="container-fluid  newestmemberbg"><!--- container fluid newest member welcome -->

<div class="container"> <!---exploretours container -->

<div class="col-md-6 text-left newestmembercontainer">
<?php
global $more;//define a global variable
$more = 0;// the global varibale is now equal to 0
query_posts('cat=12');//look for posts that have the category of 2
if(have_posts()) ://if we have posts to display
while(have_posts()) :the_post();//LOOP through all the posts and find the one that has a category of 2 get thet title and content
?>
<h2><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h2> 
            <div><p class="about-text"><?php the_content() ?></p></div>
<?php
endwhile;
endif;
wp_reset_query();?>

    </div>

    <div class="col-md-6">
    
<img class="img-responsive joshimage" alt=“JoshPayne” src="images/joshpayne.png" width="200">
<img class="img-responsive speechmarksjosh1" alt=“Speechmarks” src="images/speechmarks_JoshPayne_01.png" width="100">
<img class="img-responsive speechmarksjosh2" alt=“Speechmarks” src="images/speechmarks_JoshPayne_02.png" width="100">

<p class="text-center joshquote"> I'm super excited to be working at Flipside <br> and can't wait to meet you guys! </p>
<p class="text-center"> <strong> Josh Payne , New Guide </strong></p>   
    </div> 
    
 
    </div> <!---exploretours container -->


    </section> <!--- container fluid -->
<?php get_footer(); ?>