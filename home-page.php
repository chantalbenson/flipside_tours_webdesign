<?php
    /*
    Template Name: Home page
    */
?>
<?php get_header(); /* Tells WordPress to include header.php */ ?>
<section class="container-fluid"> <!-- container-fluid -->

<div class="container testimoniescontainer"><!-- authenticconnections container -->
<h2 class="authenticconnectionsh2"><?php the_field('titlefortestimonies'); ?></h2>
<h2 class="genuinerelationshipsh2"><?php the_field('subtitlefortestimonies'); ?></h2>
    <div class="col-md-6">
   </div> 
    
    <div class="col-md-6 testimonyprofilecontainer">
<p class="testimony"><?php the_field('testimoniesprofile'); ?></p>
<p class="text-center"><?php the_field('paragraphfortestimonies'); ?></p>
    </div> 
    
    </div> <!--- authenticconnections container -->
    
    </section> <!--- container-fluid -->

<section class="container-fluid explorebg"><!--- container fluid -->

<div class="container"> <!---exploretours container -->

    <div class="col-md-6 image-stack">
   
    </div>
    
    <div class="col-md-6">
    
    </div> 
    
 
    </div> <!---exploretours container -->


    </section> <!--- container fluid -->
      
<section class="container-fluid"><!--- container fluid Fall in Love With Our City -->
    

<div class="container fallinlovewithoutcity"> <!--- container -->

    <div class="row">
    
<div class="col-md-8 missioncontainer">

    
</div>
        
<div class="col-md-4">
    </div> 
        
        
    </div> <!--- row -->
    
    </div> <!--- container -->
    
    </section> <!--- container fluid Fall in Love With Our City -->
      
      
 <section class="container-fluid aboutusbg"><!--- container fluid aboutus-->

<div class="container">
    <div>

    <div class="row"> <!--- aboutjane -->
<div class="col-md-6">

        </div>
        
<div class="col-md-6 text-left janeparagraph">        
   
        </div> 
        
 </div> <!--- aboutjane -->
        
    <div class="row rubyrow"> <!--- aboutruby -->
<div class="col-md-6 text-left rubyparagraph">

        </div>
        
<div class="col-md-6">        

        </div> 
        
 </div> <!--- aboutruby -->
    
    
    </div> <!--- row -->
     </div> <!--- container -->
    </section> <!--- container fluid aboutus--> 
<?php get_footer(); /* Tells WordPress to include footer.php */ ?>