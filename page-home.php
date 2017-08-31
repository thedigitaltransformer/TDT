<?php get_header(); ?>

    <!--Main content-->
    <main>
  <!-- SHOWCASE DIGITAL TRANSFORMATION -->      
        <!-- SHOWCASE PARALLAX -->
        <section class="showcase">
            <div class="parallax-container valign-wrapper">
				<?php
					// Contrôler si ACF est actif
					if ( !function_exists('get_field') ) return;
				?>
                <div class="row ">
                    <div class="col s12 sky">
                        <img src="<?php bloginfo('template_url') ?>/assets/img/sky-paralax.png" width="100%"/> 
                    </div>
					<div class="col s12">
                        <div class="center-align">
                        <h1 class="valign blue showcase--title--mobile lighten-1 highlight z-depth-4"><?php the_field('slider-titre1'); ?></h1>
                        
                        </div>
                         
                    </div> 
                     
                </div>
               
                <div class="parallax">
                    <img src="<?php the_field('slider-img1'); ?>" />
                    
                </div>
                 
            </div>
            
        </section>
        
        <!-- SHOWCASE SERVICE GRID -->
        
        <section class="grid-service white section--wrapper">
            <div class="row">
                <h2 class="center-align"><?php the_field('block1-h1'); ?></h2>
            </div>
            
            <div class="row noir">
                <div class="col s12 m4 l4 center-align">
                    <div class="row">
                        <img src="<?php the_field('block1-img1'); ?>" />
                    </div>
                    <div class="row">
                        <div>
                            <h3 class="center-align"><?php the_field('block1-titre1'); ?></h3>
                            <p><?php the_field('block1-content1'); ?></p>
                        </div>
                    </div>
                </div>
                
                <div class="col s12 m4 l4 center-align">
                    <div class="row">
                        <img src="<?php the_field('block1-img2'); ?>" />
                    </div>
                    <div class="row">
                        <div>
                            <h3 class="center-align"><?php the_field('block1-titre2'); ?></h3>
                            <p><?php the_field('block1-content2'); ?></p>
                        </div>
                    </div>
                </div>
                
                <div class="col s12 m4 l4 center-align">
                    <div class="row">
                        <img src="<?php the_field('block1-img3'); ?>" />
                    </div>
                    <div class="row">
                        <div>
                            <h3 class="center-align"><?php the_field('block1-titre3'); ?></h3>
                            <p><?php the_field('block1-content3'); ?></p>
                        </div>
                    </div>
                </div>
           
                
            </div>
           
        </section>
		
<!--SHOWCASE MARKTING IS NOW A SCIENCE-->
     
        <!-- SHOWCASE PARALLAX -->
        <section class="showcase">
            <div class="parallax-container valign-wrapper">
                <div class="row ">
                    <div class="col s12 sky">
                        <img src="<?php bloginfo('template_url') ?>/assets/img/sky-paralax.png" width="100%"/> 
                    </div>
					<div class="col s12">
                        <div class="center-align">
                        <h1 class="valign blue showcase--title--mobile lighten-1 highlight z-depth-4"><?php the_field('slider-titre2'); ?><!--MARKETING AND DATA <br>ARE NOW A SCIENCE--></h1>
                        
                        </div>
                         
                    </div> 
                     
                </div>
               
                <div class="parallax">
                    <img src="<?php the_field('slider-img2'); ?>" />
                </div>
                 
            </div>
            
        </section>
        
        <!-- SHOWCASE SERVICE GRID -->
        
        <section class="grid-service white section--wrapper">
            <div class="row">
                <h2 class="center-align"><?= __("No bullshits, only data, mathematics and ROI"); ?></h2>
            </div>
            
            <div class="row noir">
                <div class="col s12 m4 l4 center-align">
                    <div class="row grid-service-box">
                        <img src="<?php bloginfo('template_url') ?>/assets/img/seo_tag.png" />
                    </div>
                    <div class="row">
                        <div>
                            <h3 class="center-align">BECOME VISIBLE</h3>
                            <p>(Gas Station - Day) (Marty is trying to open up a bottle of Coke. George runs up. He's very disheveled.) Marty. Marty. Marty. Hey, George, buddy, you weren't at school, what have you been doing all day? I over slept, look I need your help. I have to ask Loraine out but I don't know how to do it. 
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col s12 m4 l4 center-align">
                    <div class="row grid-service-box">
                        <img src="<?php bloginfo('template_url') ?>/assets/img/page_view.png" />
                    </div>
                    <div class="row">
                        <div>
                            <h3 class="center-align">OPTIMIZE YOUR AUDIENCE</h3>
                            <p>You damned fool! (The two get out of the car.) Never, never leave this book lying around! Don't you have a safe? (realizes) No, you don't have a safe. Get a safe! Keep it locked up, and until then keep it on you like this. (He puts the book in 1955 Biff's back jeans pocket.) 
                        </div>
                    </div>
                </div>
                <div class="col s12 m4 l4 center-align">
                    <div class="row grid-service-box">
                        <img src="<?php bloginfo('template_url') ?>/assets/img/money.png" />
                    </div>
                    <div class="row">
                        <div>
                            <h3 class="center-align">UNLEASH YOUR BUSINESS</h3>
                            <p>You damned fool! (The two get out of the car.) Never, never leave this book lying around! Don't you have a safe? (realizes) No, you don't have a safe. Get a safe! Keep it locked up, and until then keep it on you like this. (He puts the book in 1955 Biff's back jeans pocket.) 
                        </div>
                    </div>
                </div>
            </div>
           
        </section>
        
            
        <!--REFERCENCE -->
        <section class="section--wrapper noir">
            <div class="row">
                <h2 class=" center-align "><?= __('OUR LAST TRANSFORMATIONS'); ?> </h2>
                <div class="col s6 m3 l3">
                    <img class="responsive-img" src="<?php bloginfo('template_url') ?>/assets/img/europcar.jpg">
                </div>
                <div class="col s6 m3 l3">
                    <img class="responsive-img" src="<?php bloginfo('template_url') ?>/assets/img/dorel.jpg">
                </div>
                <div class="col s6 m3 l3">
                    <img class="responsive-img" src="<?php bloginfo('template_url') ?>/assets/img/maxi-cosi.jpg">
                </div>
                <div class="col s6 m3 l3">
                    <img class="responsive-img" src="<?php bloginfo('template_url') ?>/assets/img/quinny.jpg">
                </div>
				<div class="col s6 m3 l3">
                    <img class="responsive-img" src="<?php bloginfo('template_url') ?>/assets/img/agap2.jpg">
                </div>
				<div class="col s6 m3 l3">
                    <img class="responsive-img" src="<?php bloginfo('template_url') ?>/assets/img/hiq.jpg">
                </div>
				<div class="col s6 m3 l3">
                    <img class="responsive-img" src="<?php bloginfo('template_url') ?>/assets/img/volkswagen.jpg">
                </div>
            </div>
            <div class="row">
                <div class=" center-align ">
                    <a class="waves-effect  waves-light white btn noir">DISCOVER MORE SUCCESSFUL TRANSFORMATIONS</a>
                </div>
            </div>
            
          
        </section>
               
        
    <!--END OF MAIN SECTION-->    
    </main>

<?php get_footer(); ?>