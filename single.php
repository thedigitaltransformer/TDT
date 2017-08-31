<?php get_header(); ?>

    <!--Main content-->
    <main>
    
    <!-- SHOWCASE PARALLAX -->
        <section class="showcase">
            <div class="parallax-container valign-wrapper">
                <div class="row ">
                   <?php if(have_posts()) : ?>
				<?php while(have_posts()) : the_post(); ?>
                    <div class="col s12 sky">
                        <img src="<?php bloginfo('template_url') ?>/assets/img/sky-paralax.png" width="100%"/> 
                    </div>
					<div class="col s12">
                        <div class="center-align">
                        <h1 class="valign blue showcase--title--mobile lighten-1 highlight z-depth-4"><?php the_title(); ?></h1>
                        
                        </div>
                         
                    </div> 
                     
                </div>
               
                <div class="parallax">
                   <?php if(has_post_thumbnail()) : ?>
								<?php the_post_thumbnail(); ?>
							<?php endif; ?>
                </div>
                 
            </div>
            
		</section>
<!--    BLOG -->
      
      
       <div class="row noir">
<!--     THE ARTICLE  -->
			<div class="col s8">
					<article>
					<div class="row">
						
						<div class="col s12 post-meta">
							<p>author : <a href="<?= get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a> - <?php the_date('D M Y ');?></p>
						</div>
						<div class="col s12 post-content">
							<?php the_content(); ?>
						</div>
						<div class="col s12 post-tag">
							<ul>
								<li>Tag 1</li>
								<li>Tag 2</li>
								<li>Tag 3</li>
								<li>Tag 4</li>
							</ul>
						</div>
						<div class="col s12">
							<?php comments_template(); ?>
						</div>
					</div>
					</article>
				<?php endwhile; ?>		
			<?php else : ?>
				<h1>sorry no posts found </h1>
			<?php endif; ?>
		</div>
    		     
<!--    THE SIDEBAR		     -->
    		     
    		     
     		<div class="col s4">
     			<aside>
     				SIDEBAR
     			</aside>
     		</div>
      		
       </div>
        
        
        
        
    <!--END OF MAIN SECTION-->    
    </main>

<?php get_footer(); ?>