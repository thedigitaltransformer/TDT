
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
		<?php
if (!empty($alert))
{
    echo '<p style="color:red">'.$alert.'</p>';
}
?>
	</div>

	<div class="container">
		<form id="contact-homepage" action="<?php bloginfo('template_url') ?>/assets/send-mail.php" method="post" class="col s12">

			<div class="row">
				<div class="input-field col s4 m2 l2">
					<select name="civilite" id="civilite" >
						<option value="M" selected >Mr</option>
						<option value="F">M.</option>
					</select>
					<label>Gender</label>
				</div>
				<div class="input-field col s8 m4 l4">
					<input name="prenom" id="prenom" type="text" value="<?php echo (isset($_POST['prenom'])) ? $prenom : '' ?>" class="validate">
					<label for="prenom">First Name *</label>
				</div>
					<div class="input-field col s12 m6 l6">
						<input id="nom" name="nom" type="text" value="<?php echo (isset($_POST['nom'])) ? $nom : '' ?>" class="validate">
						<label for="nom">Last Name *</label>
					</div>
			</div>

			<div class="row">
				<div class="input-field col s12 m6 l6">
					<input name="email" type="email" value="<?php echo (isset($_POST['email'])) ? $expediteur : '' ?>" class="validate">
					<label for="email">Email</label>
				</div>

				<div class="input-field col s12 m6 l6">
					<input id="phone" name="phone" type="text" value="<?php echo (isset($_POST['phone'])) ? $phone : '' ?>" class="validate">
					<label for="phone">Phone Number</label>
				</div>

			</div>

			<div class="row">
				<div class="input-field col s12 m6 l6">
				<select id="sujet" name="sujet">
				<option value="unleash" selected >I want to unleash my business</option>
				<option value="speaker">Could you please speak in my event ?</option>
				</select>
				<label for="sujet">Subject</label>
				</div>
			</div>

			<div class="row">
				<div class="input-field col s12">
					<textarea id="message" name="message" class="materialize-textarea">
						<?php echo (isset($_POST['message'])) ? $message : '' ?>
					</textarea>
					<label for="message">Message</label>
				</div>
			</div>

			<div class="row">
				<div class="col s4 offset-s8 noir">
					<button class="btn waves-effect waves-light white noir right" type="submit" name="envoye">Submit
					<i class="material-icons right">send</i>
					</button>
          <input type="hidden" name="referer" value="<?php echo get_permalink(); ?>">
				</div>
			</div>

		</form>

	</div>

</section>


    <!--END OF MAIN SECTION-->
    </main>

<?php get_footer(); ?>
