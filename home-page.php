<?php
    /*
    Template Name: Home page
    */
?>
<?php get_header(); /* Tells WordPress to include header.php */ ?>
<section class="container-fluid"> <!-- container-fluid -->

<div class="container testimoniescontainer"><!-- authenticconnections container -->
<div class="col-md-6">
    
<h2 class="authenticconnectionsh2"><?php the_field('titlefortestimonies'); ?></h2>
<h2 class="genuinerelationshipsh2"><?php the_field('subtitlefortestimonies'); ?></h2>
<a href="services.html" class="btn btn-testimonies">More Testimonies </a>
<img class="img-responsive testimoniesgraphic" alt=“LetsExploreFremantleTogether” src="http://206.189.45.97/~mesh4/wp-content/themes/flipside_tours_webdesign/images/explore_together.png">
  </div> 
    
    <div class="col-md-6 testimonyprofilecontainer">
<img class="img-responsive janeparkinprofile" alt=“JaneParkins” src="<?php the_field('testimoniesimage'); ?>">
<p class="testimony"><?php the_field('testimoniesprofile'); ?></p>
<img class="img-responsive speechmarks" alt="speechmarks" src="http://206.189.45.97/~mesh4/wp-content/themes/flipside_tours_webdesign/images/speechmarks.png" width="150">   
<p class="text-center"><?php the_field('paragraphfortestimonies'); ?></p>
<p class="text-center"><strong><?php the_field('ratingfortestimonies'); ?></strong> </p>
    </div> 
    
    </div> <!--- authenticconnections container -->
    
    </section> <!--- container-fluid -->

<section class="container-fluid explorebg"><!--- container fluid -->

<div class="container"> <!---exploretours container -->

<div class="col-md-6 image-stack">
<div class="image-stack__item image-stack__item--top">
      <img class="img-responsive" alt=“ArtworkFremantle” src="<?php the_field('explorefremantleimage01'); ?>">
    </div>
<div class="image-stack__item image-stack__item--bottom">
<img class="img-responsive" alt=“FremantleCafeStrip” src="<?php the_field('explorefremantleimage02'); ?>">
</div>
<div class="image-stack__item--topright">
<img class="img-responsive" alt=“FremantleTunnel” src="<?php the_field('explorefremantleimage03'); ?>">
</div>
</div> 
    
<div class="col-md-6">
<h2 class="exploretoursh2"><?php the_field('titleforexploreservices'); ?></h2>
<h2 class="distinctivetoursh2"><?php the_field('subtitleforexploreservices'); ?></h2>
<p class="text-center"><?php the_field('paragraphforexploreservices'); ?></p>
<p class="text-center"><strong><?php the_field('hookforexploreservices'); ?></strong></p>
<a href="services.html" class="btn btn-explore">Check Out The Tours!</a>     
    </div> 
    
    </div> <!---exploretours container -->


    </section> <!--- container fluid -->
      
<section class="container-fluid"><!--- container fluid Fall in Love With Our City -->
    
<div class="container fallinlovewithoutcity"> <!--- container -->

<h2 class="fallinloveh2"><?php the_field('titleforfallinlovewithourcity'); ?></h2>

    <div class="row">
    
<div class="col-md-8 missioncontainer">
    <p> <strong class="missiontextcolour"><?php the_field('missiontaglinebold'); ?></strong></p>
    <p><?php the_field('missionparagraph'); ?></p>
   
<p class="goalstextpadding"> <strong class="goaltextcolour"><?php the_field('goalstaglinebold'); ?></strong></p>
<p class="goalstextpadding2"><?php the_field('goalsparagraph'); ?></p>
    
</div>
        
<div class="col-md-4">
 <img class="missionsandgoals img-responsive" alt=“MissionandGoals” src="<?php the_field('missionandgoalsimage'); ?>">
       <a href="aboutus.html" class="btn btn-fallinlovewithourcity">Learn More About Us!</a>

    
    </div> 
    </div> <!--- row -->
    
    </div> <!--- container -->
    
    </section> <!--- container fluid Fall in Love With Our City -->

 <section class="container-fluid aboutusbg"><!--- container fluid aboutus-->

<div class="container">
        <h2 class="text-center aboutush2"><?php the_field('titleforaboutus'); ?></h2>
    <h2 class="text-center aboutusbehindh2"><?php the_field('subtitleforaboutus'); ?></h2>

    <div class="row"> <!--- aboutjane -->
<div class="col-md-6">
<img class="janeimage img-responsive" alt=“JaneBree_TourGuide” src="<?php the_field('aboutusimage01'); ?>">
        </div>
        
<div class="col-md-6 text-left janeparagraph">        
    <h3 class="aboutusjane"><?php the_field('aboutusjanebreeheading'); ?></h3>
    <h4 class="aboutusrubysubtitle"><?php the_field('aboutusjanebreeheadinghook'); ?></h4>
    <p><?php the_field('aboutusjanebreeparagraph'); ?></p>
        </div> 
        
 </div> <!--- aboutjane -->
        
    <div class="row rubyrow"> <!--- aboutruby -->
<div class="col-md-6 text-left rubyparagraph">
<h3 class="aboutusruby"><?php the_field('aboutusrubyheading'); ?></h3>
<h4 class="aboutusrubysubtitle"><?php the_field('aboutusrubyheadinghook'); ?></h4>
    <p><?php the_field('aboutusrubyparagraph'); ?></p>
        </div>
        
<div class="col-md-6">        
<img class="rubyimage img-responsive" alt=“Ruby_TourGuide” src="<?php the_field('aboutusimage02'); ?>">   
        </div> 
        
 </div> <!--- aboutruby -->
    
     </div> <!--- container -->
    </section> <!--- container fluid aboutus-->     
<?php get_footer(); /* Tells WordPress to include footer.php */ ?>