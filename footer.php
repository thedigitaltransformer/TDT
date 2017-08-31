 <!-- FOOTER --> 
	 
<footer class="black">
	<div class="row">
		<div class="col s12 m4 l4">
			<h3 class="footer--title">WHO ARE WE !</h3>
			<p>(Gas Station - Day) (Marty is trying to open up a bottle of Coke. George runs up. He's very disheveled.) Marty. Marty. Marty. Hey, George, buddy, you weren't at school, what have you been doing all day? I over slept, look I need your help. I have to ask Loraine out but I don't know how to do it. 
            </p>
		</div>
		
		<div class="col s12 m4 l4 hide-on-small-only">
			<h3 class="footer--title">LAST PULSES</h3>
						<ul class="footer--last--post">



					<?php	
				$args = array( 'numberposts' => '5' );

			$recent_posts = wp_get_recent_posts($args);
				foreach( $recent_posts as $recent ){
					echo '<li><a href="' . get_permalink($recent["ID"]) . '">' .        $recent["post_title"].'</a> </li> ';
				}
						?>
						</ul>
		</div>
		<div class="col s12 m4 l4">
			<h3 class="footer--title">THE DIGITAL TRANSFORMER GROUP</h3>
			<h4>AMSTERDAM OFFICE</h4>
			<p>Amsterdam Sloterdijk Teleport Towers<br>
			Kingsfordweg 151<br>
			1043GR - Amsterdam - Netherlands<br>
			+31 (0)20-491 7456 <br>
			info@thedigitaltransformer.io</p>
			<br>
			<h4>BARCELONA OFFICE</h4>
			<p>El Triangle<br> 
			Plaça de Catalunya 1<br>
			08002 - Barcelona - Spain<br>
			+ 31 (0) 20 000 000 <br>
			info@thedigitaltransformer.io
			</p>
			
			
		</div>
	
	</div>
	<div class="footer-copyright">
            <div class="container">
            <p class="center-align">&copy; Copyright <?php echo date("Y"); ?> - <a href="#">The Digital Transformer Group</a></p>
		</div>
          </div>
	
</footer>
    
<?php wp_footer(); ?>







    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="<?php bloginfo('template_url') ?>/assets/js/custom.js"></script>
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script>

</body>
</html>