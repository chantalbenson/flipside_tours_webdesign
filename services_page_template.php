<?php
/*
Template Name: Services
*/
?>
<?php include (TEMPLATEPATH . '/small_header.php');  /* Tells WordPress to include the smaller header header.php */ ?> 

<section class="container-fluid"><!--- container fluid evening expereince tour-->

<div class="container"><!--- container -->
<div class="col-md-6 text-teft servicescontainer">
    
<h2 class="eveningexperiencetourh2 text-left"><?php the_field('titleforeveningtours'); ?></h2>
<p> <strong><?php the_field('paragraphforeveningtoursheading'); ?></strong></p>
<p><?php the_field('paragraphforeveningtours01'); ?></p>
<p><?php the_field('paragraphforeveningtours02'); ?></p>
<p><?php the_field('paragraphforeveningtours03'); ?></p>
<p> <strong><?php the_field('pricingforeveningtours'); ?></strong></p>
 <button type="button" class="btn btn-default">Book Evening Tour Now! </button>
      </div>
    
<div class="col-md-6 image-stack">
    <div class="image-stack__item image-stack__item--topevening">
<img class="img-responsive" alt=“FremantleBar” src="<?php the_field('eveningtoursimage02');?>">
    </div>
    <div class="image-stack__item image-stack__item--bottomevening">
<img class="img-responsive" alt=“FremantleGrilldBurger” src="<?php the_field('eveningtoursimage01');?>">
    </div>
    
<div class="image-stack__item--graphicevening">
<img class="img-responsive" alt=“FremantleGraphic” src="http://206.189.45.97/~mesh4/wp-content/themes/flipside_tours_webdesign/images/eveningtours_graphic.png" width="350">
    </div>  
</div>
    </div>
      </section><!--- container fluid evening expereince tour--> 

<section class="container-fluid ghostoursbg"><!--- container fluid paranormal ghost tour-->

<div class="container"><!--- container -->

<div class="col-md-6">
<h2 class="text-left ghostlytoursh2"><?php the_field('titleforghostlytours'); ?> </h2>
    
<div class="image-stack__item image-stack__item--bottomghost">
     <img class="img-responsive" alt=“FremantleTunnel” src="<?php the_field('ghostlytoursimage01');?>">
    </div>
    <div class="image-stack__item image-stack__item--topghost">
      <img class="img-responsive" alt=“Prison” src="<?php the_field('ghostlytoursimage02');?>">
    </div>
</div>
<div class="col-md-6 text-left ghosttourdetail">
<p><?php the_field('paragraphforghostlytours'); ?></p>
<p><?php the_field('paragraphforghostlytours02'); ?></p>
            
<p> <strong><?php the_field('paragraphforghostlytours03Bold'); ?></strong><?php the_field('paragraphforghostlytours03'); ?></p>

<p> <strong><?php the_field('paragraphforghostlytours04Bold'); ?></strong><?php the_field('paragraphforghostlytours04'); ?></p>

<p><?php the_field('paragraphforghostlytours05'); ?></p>

<p><strong><?php the_field('paragraphforghostlytours06Bold'); ?></strong> <?php the_field('paragraphforghostlytours06'); ?></p>

<p> <strong><?php the_field('pricingforghostlytours'); ?></strong></p>
    
<button type="button" class="btn btn-ghost">Book Ghostly Tour Now! </button>

<img class="img-responsive ghostgraphic" alt=“Graphic” src="http://206.189.45.97/~mesh4/wp-content/themes/flipside_tours_webdesign/images/realghostgraphic.png" width="200">
    </div>
    </div>   
</section><!--- container fluid paranormal ghost tour-->

<section class="container-fluid testimoniescontainer"><!--- container fluid testimonies-->

<div class="container"><!--- container -->
    
<h3 class="text-center heartestimonyh3"><?php the_field('titlefortestimonies'); ?></h3>
<h3 class="text-center communitytestimonyh3"><?php the_field('subtitlefortestimonies'); ?> </h3>
    
<div class="col-md-6">
        
<img class="img-responsive janeparkinprofile" alt=“JaneParkins” src="<?php the_field('testimoniesimage01');?>">
<p class="testimony"><?php the_field('testimoniesname01'); ?></p> 
<img class="img-responsive speechmarks" alt="speechmarks" src="http://206.189.45.97/~mesh4/wp-content/themes/flipside_tours_webdesign/images/speechmarks.png" width="150">   
<p class="text-center"><?php the_field('testimoniesparagraph01'); ?></p>
<p class="text-center"><strong><?php the_field('testimoniesrating01'); ?></strong></p>
        </div>
    
<div class="col-md-6 marcuscontainer">    

<img class="img-responsive marcussmithprofile" alt=“MarcusSmith” src="<?php the_field('testimoniesimage02');?>">
<p class="testimony"><?php the_field('testimoniesname02'); ?></p> 
<img class="img-responsive speechmarks" alt="speechmarks" src="http://206.189.45.97/~mesh4/wp-content/themes/flipside_tours_webdesign/images/speechmark.png" width="150">   
<p class="text-center"><?php the_field('testimoniesparagraph02'); ?></p>
        </div>
  
    </div>
</section>

 <section class="container-fluid explorebg"><!--- container fluid testimonies-->
  
      <h3 class="text-center furtherquestionsh3"> Further Questions? </h3>
      <h3 class="text-center furtherquestionsh3"> Want To Have A Chat? </h3>

        
      <div class="container questionscontainer">
<?php echo do_shortcode("[wpforms id=1158]"); ?>
<!--

    <input type="text" id="fname" name="firstname" placeholder="First Name..">

  
    <input type="text" id="lname" name="lastname" placeholder="Last name..">
    
    <input type="text" id="email" name="lastname" placeholder="Email..">

    <textarea id="subject" name="subject" placeholder="Message.." style="height:200px"></textarea>
          
     <button type="button" class="btn btn-questions">Submit ✓</button>
-->

</div>
      
</section>
<?php get_footer(); ?>