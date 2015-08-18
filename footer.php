<footer>
	<div class="container">
		<div id="footer-contact">
			<ul>
				<li>
					<a href="mailto:gromanou@gmail.com">
						<img src="<?php bloginfo('template_url');?>/images/email.png" alt="email contact">
						<div>gromanou@gmail.com</div>	
					</a>						
				</li>
				<li>
					<a href="https://www.linkedin.com/in/gromanovskiy" target="_black">
						<img src="<?php bloginfo('template_url'); ?>/images/linkedin.png" alt="Linkedin">
						<div>My LinkedIn</div>	
					</a>						
				</li>
				<li>
					<a href="https://github.com/gromanou" target="_blanck">
						<img src="<?php bloginfo('template_url');?>/images/github.png" alt="github">
						<div>Github</div>	
					</a>						
				</li>
			</ul>
		</div>	
		<div id="copy-rights">
			<script type="text/javascript" charset="utf-8" async defer>
				// gets curent date and makes a copyrigts message 
				var date = new Date();
				var year  = date.getFullYear();
				var CPMessage = "Copyrights &copy; "+year+" BarbaricCode";
				document.getElementById("copy-rights").innerHTML = CPMessage; 
			</script>
		</div>	
		<?php wp_footer(); ?>	
	</div>		
</footer>
</html>