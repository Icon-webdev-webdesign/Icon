<!DOCTYPE html>
<html>
<head>
	<title>ICON</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/bootstrap.min.css">
	<style type="text/css">
		.my-button
		{
			text-decoration: none;
			color: #ffffff;
			background-image: linear-gradient(90deg,#1cba9f 40%,#558dca 100%);
			padding: 10px 40px;
			border-radius: 20px;
			position: relative;
		}
		.my-button:hover
		{
			color:#ffffff;
			background-color:#ffffff;
			box-shadow:0px 0px 8px 0px #000000;
			text-decoration: none;
		}
		.icon-circle
		{
			width: 30px;
			height: 30px;
			text-align: center;
			line-height: 30px;
			background-color: rgba(255,255,255,0.9);
			border-radius: 50%;
			position: absolute;
			right: 5px;
			top:50%;
			transform: translateY(-50%);
			color: #e31e25;
			z-index: 999;
		}
		.icon-circle span
		{
			animation: ripple 2s linear infinite;
			z-index: 998;
			right: 3px;
			width: 0px;
			height: 0px;
			background-color: rgba(255,255,255,0.9);
			border-radius: 50%;
			position: absolute;
			top: 50%;
			left: 50%;
			transform: translate(-50%,-50%);
			z-index: -1;
		}
		.icon-circle span:nth-child(2)
		{
			animation-delay:1.5s;
		}
		@keyframes ripple
		{
			0%
			{
				width:0px;
				height:0px;

			}
			90%
			{
				width:35px;
				height:35px;
				box-shadow:0px 0px 8px 0px rgba(0,0,0,0.8);
				background-color:#ffffff;
				opacity:0.7;
			}
			100%
			{
				width:75px;
				height:75px;
				box-shadow:0px 0px 8px 0px rgba(0,0,0,0.8);
				background-color:#ffffff;
				opacity:0;
			}
		}
		.my-button:hover span
		{
			background-color: rgba(0,0,0,0.5);
		}
		.div-container
		{
			display: flex;
			justify-content: flex-end;
			align-items: center;
			margin-right: 10px;
			margin-left: 10px;
			margin-top: 15px;
			margin-bottom: 15px;
		}
		.custom-nav
		{
			list-style: none;
		}
		.custom-nav li
		{
			float: left;
			padding:15px 7px;
		}
		.custom-nav li a
		{
			padding:15px 7px;
			text-decoration: none;
			color:#ffffff;
		}
		.logo-container
		{
			height: 128px;
			position: relative;
			z-index: 999;
		}
		.logo-container img
		{
			position: absolute;
			top: 50%;
			left: 50%;
			transform: translate(-50%,-50%);
		}
		.logo-container:before {
		    content: " ";
		    position: absolute;
		    top: -45px;
		    right: -40px;
		    bottom: 0;
		    width: 100%;
		    background-color: #fff;
		    border-right: 2px solid #1db9a0;
		    -webkit-transform: skewX(-25deg);
		    -ms-transform: skewX(-25deg);
		    transform: skewX(-25deg);
		    z-index: 996;
		}
	</style>
</head>
<body>

	<div class="container-fluid" style="box-shadow: 0px 0px 8px 0px rgba(0,0,0,0.5);">
		<div class="row">
			<div class="col-md-3 logo-container">
				<img src="<?= base_url() ?>assets/img/logo.jpeg" style="width: 60%;z-index: 999;">		
			</div>
			<div class="col-md-9">
				<div class="row">
					<div class="col-md-12" style="display: flex;justify-content: flex-end;">
						<div class="div-container">
							<a href="javascript:void(0)" title="Event date" class="my-button">
								<div class="icon-circle"><i class="far fa-calendar-alt"></i><span></span><span></span></div> 26-27 Nov 2020
								
							</a>
						</div>
						<div class="div-container">
							<a href="" class="my-button">REGISTER <div class="icon-circle"><i class="fas fa-chevron-right"></i></div></a>
						</div>
					</div>
					<div class="col-md-12" style="background-image: linear-gradient(90deg,#1cba9f 40%,#558dca 100%);">
						<ul class="custom-nav">
							<li><a href="">Home</a></li>
							<li><a href="">About us</a></li>
							<li><a href="">Attend</a></li>
							<li><a href="">Exhibit & sponser</a></li>
							<li><a href="">Conference Sectors</a></li>
							<li><a href="">Committee</a></li>
							<li><a href="">Keynote speakers</a></li>
							<li><a href="">Contact</a></li>
						</ul>
					</div>
				</div>
			</div>
			
		</div>
	</div>
