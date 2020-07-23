	<script src="https://kit.fontawesome.com/cd8c88fc64.js" crossorigin="anonymous"></script>
	<script type="text/javascript" src="<?= base_url() ?>assets/js/jquery.min.js"></script>
	<script type="text/javascript" src="<?= base_url() ?>assets/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
      <link href="https://fonts.googleapis.com/css2?family=PT+Sans&display=swap" rel="stylesheet">
	<!--------starting of footer------------------------>
<section class="container-fluid" style="border:1px solid black;margin:0px;">
	<div class="row">
		<div class="col-md-3" id ="logosocial" >
			<div class="logo">
				<a href="#"><img src="<?= base_url()."\assets\img\logo.jpeg" ?>" height=100px width=250px;></a>
			</div>
			<br>
			<div class="social media">
				<div class="facebook" style="width: 15%;text-align: center;" >
					<a href="#"><i class="fa fa-facebook" aria-hidden="true" style="color: white;"></i></a>
				</div>
				&nbsp;
				<div class="Instagram" style="width: 15%;text-align: center;">
					<a href="#"><i class="fa fa-instagram" aria-hidden="true" style="color: white;"></i></a>
				</div>
				&nbsp;
				<div class="Twitter"style="width: 15%;text-align: center;" >
					<a href="#"><i class="fa fa-twitter" aria-hidden="true" style="color: white;"></i></a>
				</div>
				&nbsp;
				<div class="Pinterest" style="width: 15%;text-align: center;" >
					<a href="#"><i class="fa fa-pinterest" aria-hidden="true" style="color: white;"></i></a>
				</div>
				<div class="Linkedin" style="width: 15%;text-align: center;" >
					<a href="#"><i class="fa fa-linkedin" aria-hidden="true" style="color: white;"></i></a>
				</div>
			</div>
		
		</div>
		<style type="text/css">
			#logosocial
			{
				background-color: black;font-family: 'PT Sans', sans-serif;color: white;padding:50px;
			}
			#logosocial > .logo
			{
				width:250px;height:100px;
			}
			#logosocial > .socialmedia
			{
				text-align:center;color: white;font-size: 25px;display: flex;
			}
			#logosocial > .socialmedia > 
			{
				color: white;
			}
		</style>
		<div class="col-md-2 " id="navlinks">
			<ul style="" class="lists">
				<h3 style="opacity: 0.7;">Support</h3>
				<a href="#"><h6 style="color: white;"><li>Contact US</li></h6></a>
				<a href="#"><h6 style="color: white;"><li>FAQ</li></h6></a>
				<a href="#"><h6 style="color: white;"><li>Downloads</li></h6></a>
				<a href="#"><h6 style="color: white;"><li>Locate A Dealer</li></h6></a>
				<a href="#"><h6 style="color: white;"><li>Locate A Dealer</li></h6></a>
			</ul>
		</div>
		<style type="text/css">
			#navlinks
			{
				background-color: black;
				font-family: 'PT Sans', sans-serif;
				color: white;
				padding:50px;
				<li>

			}
			#navlinks > ul
			{
				list-style-type: none;
				

			}
			
		
		</style>
		<div class="col-md-2" id="navlinks">
				
			<ul style="list-style-type: none;" class="lists">
				<h3 style="opacity: 0.7;">Icon</h3>
				<a href="#"><h6 style="color: white;"><li>Home</li></h6></a>
				<a href="#"><h6 style="color: white;"><li>About Us</li></h6></a>
				<a href="#"><h6 style="color: white;"><li>Careers</li></h6></a>
				<a href="#"><h6 style="color: white;"><li>NewsRoom</li></h6></a>
				<a href="#"><h6 style="color: white;"><li>Affliates</li></h6></a>
			</ul>

		</div>
		<div class="col-md-5" id="Newsletter">
			<div  id="mail">
				<span class="material-icons" style="">email</span>
				&nbsp;
				<h4>Subscirbe to our Newsletter</h4>
				
			</div>
			<div style="height: 30%; padding-top:10px;padding-left:50px;">
				<input type="email" class="form-control">
				<br>
				<button class="btn btn-danger" style="width:150px;">Subscribe</button>
			</div>

		</div>

		<style type="text/css">
			#Newsletter
			{
				background-color: black;
			}
			#Newsletter > #mail
			{
				color: white;
				height:20%;margin:0px;padding:50px;display:flex;
				font-family: 'PT Sans', sans-serif;
			}
			#copyrights

		</style>
	</div>

	
<style type="text/css">
	#copyrights
	{	
		margin-top: 0px;

		background-color: black;
		text-align: center;
		height: 100px;
		padding-top:40px;
	}
</style>

</section>
<div class="container-fluid" id="copyrights">
		
		<p style="color: white;">© <?= date("Y")." ";?>COPYRIGHTS RESERVED</p>
		     
	</div>
</body>
</html>