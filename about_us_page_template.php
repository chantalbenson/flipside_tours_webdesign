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

<section class="container-fluid morethanafamilypadding"><!--- container fluid not your standard tour-->
 
<div class="col-md-6">

    <h3 class="beapartofthefamilyh3"><?php the_field('titleforbeapartofthefamily'); ?></h3>
        <h3 class="beapartofthefamilybreakh3"><?php the_field('subtitleforbeapartofthefamily'); ?></h3>
    
    <div class="image-stack__item image-stack__item--topfamily">
      <img class="img-responsive" alt=“ArtworkFremantle” src="<?php the_field('beapartofthefamily01'); ?>">
    </div>
    <div class="image-stack__item image-stack__item--bottomfamily">
     <img class="img-responsive" alt=“FremantleCafeStrip” src="<?php the_field('beapartofthefamily02'); ?>">
    </div>
</div>
    
<div class="col-md-6 serviceinfo">
<p> <strong><?php the_field('serviceinfohook'); ?></strong>,<?php the_field('serviceinfoparagraph'); ?></p>
    
<p><?php the_field('serviceinfoparagraph02'); ?></p>
    
 <div class="row joinformleftalign">
<?php echo do_shortcode("[wpforms id=1198]"); ?>
     
<!--	<div class="input-group">
         <input type="email" class="form-control" placeholder="Please enter your email">
         <span class="input-group-btn">
         <button class="btn btn-join" type="submit">Join!</button>
         </span>
          </div>  
             <p class="recieveupdates">*Receive updates on new tours and weekly newsletters </p>

            </div>
    -->
    </div>
<h4 class="morethanaserviceh4"><?php the_field('serviceinfotagline'); ?></h4>

</div>
</section>

<section class="container-fluid getintouchbg"><!--- container fluid get in touch -->

<div class="container"> <!---container -->

<h3 class="text-center contacth3"><?php the_field('titleforgetintouch'); ?></h3>
<p class="text-center janebreecontact"><?php the_field('subtitleforgetintouch'); ?></p>

<div class="row"> 

<div class="col-md-6 contactuscontainer1">
<img class="img-responsive phoneicon" alt=“telephone” src="<?php the_field('contactphoneicon'); ?>"> 
<p class="text-left phonetext"><?php the_field('contactphonenumber'); ?></p>
    
<img class="img-responsive officeicon" alt=“office” src="<?php the_field('contactofficeicon'); ?>"> 
<p class="text-left officetext"><?php the_field('contactofficeaddress'); ?></p>

</div>

<div class="col-md-6 contactuscontainer2">
<img class="img-responsive emailicon" alt=“email” src="<?php the_field('contactemailicon'); ?>"> 
<p class="text-right emailtext"><?php the_field('contactemailaddress'); ?></p>
      
<img class="img-responsive posticon" alt=“Post” src="<?php the_field('contactposticon'); ?>"> 
<p class="text-right posttext"><?php the_field('contactpostaddress'); ?></p>
    </div> 
    
</div> <!---row -->
    </div> <!---container -->


    </section> <!--- container fluid get in touch -->
<?php get_footer(); ?>