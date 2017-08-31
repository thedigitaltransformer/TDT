<?php get_header(); ?>

    <!--Main content-->
    <main>
  <!-- SHOWCASE DIGITAL TRANSFORMATION -->      
        <!-- SHOWCASE PARALLAX -->
        <section class="showcase">
            <div class="parallax-container valign-wrapper">
                <div class="row ">
                    <div class="col s12 sky">
                        <img src="<?php bloginfo('template_url') ?>/assets/img/sky-paralax.png" width="100%"/> 
                    </div>
					<div class="col s12">
                        <div class="center-align">
                        <h1 class="valign blue showcase--title--mobile lighten-1 highlight z-depth-4"><strong>DISRUPTION AND INNOVATION <br>ARE GROWTH</strong></h1>
                        
                        </div>
                         
                    </div> 
                     
                </div>
               
                <div class="parallax">
                    <img src="<?php bloginfo('template_url') ?>/assets/img/background1.jpg" />
                    
                </div>
                 
            </div>
            
		</section>
        

        <!--CONTACT-US-->
        
        <section class="contact-us noir">
            
            <div class="container">
                <h2 class="center-align noir"><?php echo __('CONTACT US, DON\'T BE SHY');?></h2>
            </div>
            <div class="container">
                    <form id="contact-homepage" class="col s12">
						<div class="row">
								<div class="input-field col s4 m2 l2">
								<select>
								<option value="1" selected >Mr</option>
								<option value="2">M.</option>
								</select>
								<label>Gender</label>
								</div>
                            <div class="input-field col s8 m4 l4">
                            <input id="first_name" type="text" class="validate">
                            <label for="first_name">First Name</label>
                            </div>
                            <div class="input-field col s12 m6 l6">
                            <input id="last_name" type="text" class="validate">
                            <label for="last_name">Last Name</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12 m6 l6">
                                <input id="email" type="email" class="validate">
                                <label for="email">Email</label>
                            </div>
                            <div class="input-field col s12 m6 l6">
                            <input id="phone_number" type="text" class="validate">
                            <label for="phone_number">Phone Number</label>
                            </div>
                        </div>
                        <div class="row">
							<div class="input-field col s12 m6 l6">
								<select>
								<option value="1" selected >I want to unleash my business</option>
								<option value="2">Could you please speak in my event ?</option>
								</select>
								<label>Subject</label>
							</div>
                        </div>
                        <div class="row">
                                <div class="input-field col s12">
                                <textarea id="textarea1" class="materialize-textarea"></textarea>
                                <label for="textarea1">Message</label>
                            </div>
                        </div>
				<div class="row">
					<div class="col s8">
						<input name="group1" type="checkbox" id="test1" />
						<label for="test1">Suscribe to our fantastic newsletter</label>
					</div>
					<div class="col s4 noir">
						<button class="btn waves-effect waves-light white noir right" type="submit" name="action">Submit
						<i class="material-icons right">send</i>
						</button>
					</div>

				</div>
                        
                        

                    </form>
                
                
            </div>

        </section>  
        
        <!-- TEST -->
		
		<div id="respond">
  
  <div class="container">
	  <?php echo $response; ?>
	  <form class="col s12" action="<?php the_permalink(); ?>" method="post">
    <p><label for="name">Name: <span>*</span> <br><input type="text" name="message_name" value="<?php echo esc_attr($_POST['message_name']); ?>"></label></p>
    <p><label for="message_email">Email: <span>*</span> <br><input type="text" name="message_email" value="<?php echo esc_attr($_POST['message_email']); ?>"></label></p>
    <p><label for="message_text">Message: <span>*</span> <br><textarea type="text" name="message_text"><?php echo esc_textarea($_POST['message_text']); ?></textarea></label></p>
    <p><label for="message_human">Human Verification: <span>*</span> <br><input type="text" style="width: 60px;" name="message_human"> + 3 = 5</label></p>
    <input type="hidden" name="submitted" value="1">
    <p><input type="submit"></p>
  </form>
			
</div>
</div>
        
    <!--END OF MAIN SECTION-->    
    </main>

<?php get_footer(); ?>