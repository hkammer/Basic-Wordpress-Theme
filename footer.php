<?php wp_footer(); ?>         

<div class="container footer dotted">
	<div class="footer-navigation">
		<?php wp_nav_menu('menu=Footer')?>

		<div class="copyright">
			&copy; <?php echo date('Y');?> Saia, All rights reserved
		</div>
	</div>	  
	<a href="<?php bloginfo('siteurl');?>" class="rws_logo_footer"></a>
</div>             

</div> <!-- WRAP -->      

<script src="<?php bloginfo('template_url');?>/js/bootstrap.min.js"></script>
<script src="<?php bloginfo('template_url');?>/js/docs.min.js"></script>
          

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-52828805-1', 'auto');
  ga('send', 'pageview');

</script>
   
<?php include('adroll.php');?> 

</body>
</html>