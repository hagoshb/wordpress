<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Astra
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

?>
<?php astra_content_bottom(); ?>
	</div> <!-- ast-container -->
	</div><!-- #content -->
<?php 
	astra_content_after();
		
	astra_footer_before();
		
	astra_footer();
		
	astra_footer_after(); 
?>
	</div><!-- #page -->
<?php 
	astra_body_bottom();    
	wp_footer(); 
?>

<style>
	.container{
		background-color:lavender;
	}
	.footer{
		display:flex;
		justify-content:space-around;
		flex-direction:row;
		
		color:black;
	}
	.items{
		display: flex;
		color:black;
		flex-direction:column;
	}
	a{
		color:black;
	}
	.list{
		display:flex;
		justify-content:space-around;
		flex-direction:row;
		color:red;
	}
	h2{
		color:black;
		padding: 50px;
		margin: 10px;
		text-align:center;

	}
	h6{
		color:black;
		padding: 50px;
		margin: 10px;
		text-align:center;

	}
</style>
<div class="container">

<div class ="footer">
	<div class="list">
     <h2>Top News</h2><br><br><br>
	 <h2>Top Announcments</h2>
	 <h2>Important Links</h2>
	 <h2>Social Media</h2>
	
	 </div>

</div>
<div class ="footer">

    <div class="items"><a href="https://www.mu.edu.et/">Mekelle University</a></div>
	<div class="items"><a href="https://www.mu.edu.et/">Mekelle University</a></div>
	<div class="items"><a href="https://estudent.mu.edu.et//">Registrar</a></div>
	<div class="items"><a href="https://www.youtube.com/">Youtube</a></div>
	
</div>
<div class ="footer">

    <div class="items"><a href="https://www.mu.edu.et/">Mekelle University</a></div>
	<div class="items"><a href="https://www.mu.edu.et/">Mekelle University</a></div>
	<div class="items"><a href="https://courses.mu.edu.et/">Alumni Registration Form</a></div>
	<div class="items"><a href="https://www.google.com/">Google</a></div>
	
	
</div>
<div class ="footer">

    <div class="items"><a href="https://www.mu.edu.et/">Mekelle University</a></div>
	<div class="items"><a href="https://www.mu.edu.et/">Mekelle University</a></div>
	<div class="items"><a href="https://journal.mu.edu.et//">MU Online Journals</a></div>
	<div class="items"><a href="https://mail.google.com//">Email</a></div>
	
	
</div>

<div class ="footer">
    <div class="items"><a href="https://translate.google.com/">Words translate</a></div>
	<div class="items"><a href="https://www.mu.edu.et/">Mekelle University</a></div>
	<div class="items"><a href="https://courses.mu.edu.et//">MU Course (e-SHE)</a></div>
	<div class="items"><a href="https://www.w3school.com/">W3school</a></div>
	

</div>
<div class="list">
     <h2>About Us</h2><br><br><br>
	 <h2>Products And Terms</h2>
	 <h2>Contact Us</h2>
	 <h2>Follow Us</h2>
	
	 </div>
	 <div class ="footer">

    <div class="items"><a href="#/">Bithio ICT Systems PLC</a></div>
	<div class="items"><a href="#/">eLearning Systems</a></div>
	<div class="items"><a href="#/">Ethio ICT Park</a></div>
	<div class="items"><a href="https://www.facebook.com//">Facebook</a></div>
	
</div>
<div class ="footer">

    <div class="items"><a href="#/">Addis Ababa,Ethiopia</a></div>
	<div class="items"><a href="#/">Teacher Training</a></div>
	<div class="items"><a href="#/">Bole Subcity, wereda11</a></div>
	<div class="items"><a href="https://twitter.com/">Twitter</a></div>
	
</div>
<div class ="footer">

    <div class="items"><a href="#/">www.bithio.com</a></div>
	<div class="items"><a href="#/">Digital Skills Training</a></div>
	<div class="items"><a href="#/">Email: info@bithio.com</a></div>
	<div class="items"><a href="https://www.instagram.com/">instagram</a></div>
	
</div>
<h6>Copy Right &copy 2024 MU Noticeboard</h6>
</div>
	</body>
</html>
