<!DOCTYPE html>
<html>
	<head>
		<title>Romford Office</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!-- Styles -->
		<link href="<?=base_url()?>css/bootstrap.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="<?=base_url()?>css/theme.css">
		<link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>

		<link rel="stylesheet" type="text/css" href="<?=base_url()?>css/lib/animate.css" media="screen, projection">
		<link rel="stylesheet" href="<?=base_url()?>css/about.css" type="text/css" media="screen" />
		<link rel="stylesheet" href="<?=base_url()?>css/contact.css" type="text/css" media="screen" />
		<link rel="stylesheet" href="<?=base_url()?>css/lib/flexslider.css" type="text/css" media="screen" />

		<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-19623681-25']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
	</head>
	<body>
		<div class="navbar navbar-inverse navbar-static-top">
			<div class="navbar-inner">
				<div class="container">
					<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </a>
					<a class="brand" href="<?=base_url()?>"> <strong>ROMFORD OFFICE TO LET</strong> </a>
					<div class="nav-collapse collapse">
						<ul class="nav pull-right">
							<li>
								<a href="<?=base_url()?>">HOME</a>
							</li>
							<li>
								<a href="<?=base_url()?>welcome/page/about">ABOUT US</a>
							</li>
						
							<li>
								<a href="<?=base_url()?>welcome/page/pricing">PRICING</a>
							</li>
							
							
						
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div id="contact">
			<div  class="row map">
				<div class="container">
					<div class="span5 box_wrapp">
						<div class="box_cont">
							<div class="head">
								<h6>Contact</h6>
							</div>
							<ul class="street">
								<li>
									Matthew Skidmore
								</li>
								<li>
									Enterprise House. 
								</li>
								<li>
									18 Eastern Road.
								</li>
								<li>
									Romford, Essex
								</li>
								<li>
									RM1 3PJ
								</li>
								<li class="icon icontop">
									<span class="contacticos ico1"></span>
									<span class="text">07973 129285</span>
								</li>
								<li class="icon">
                                <span class="contacticos ico2"></span>
                                <a class="text" target="_blank" href="mailto:matthew.skidmore@ker.co.uk">matthew.skidmore@ker.co.uk</a>
                            </li>
								
							</ul>

							
						</div>
					</div>
				</div>
				<iframe width="100%" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" 
				src="https://maps.google.co.uk/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Kenneth+Elliott+%26+Rowe,+Eastern+Road,+Romford&amp;aq=0&amp;oq=kenneth+ell&amp;sll=52.8382,-2.327815&amp;sspn=9.430646,19.511719&amp;t=m&amp;ie=UTF8&amp;hq=Kenneth+Elliott+%26+Rowe,+Eastern+Road,&amp;hnear=Romford,+Greater+London,+United+Kingdom&amp;z=16&amp;iwloc=B&amp;output=embed"></iframe>
			</div>
		</div>
		

		<?=$this->load->view($content)?>

		

		

		<!-- starts footer -->
		<footer id="footer">
			<div class="container">
				<div class="row info">
					<div class="span6 residence">
						<ul>
							<li>
								Enterprise House, 
18 Eastern Road, 
Romford, 

							</li>
							<li>
								Essex, 
RM1 3PJ
							</li>
						</ul>
					</div>
					<div class="span5 touch">
						<ul>
							<li>
								<strong>P.</strong> 07973 129285
							</li>
							<li>
								<strong>E.</strong><a href="mailto:matthew.skidmore@ker.co.uk">matthew.skidmore@ker.co.uk</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="row credits">
					<div class="span12">
						
						<div class="row copyright">
							<div class="span12">
								© 2013 Romford Letting. Website developed by <a href="http://www.redstudio.co.uk">redstudio</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</footer>

		<script src="http://code.jquery.com/jquery-latest.js"></script>
		<script src="<?=base_url()?>js/bootstrap.min.js"></script>
		<script src="<?=base_url()?>js/theme.js"></script>
		<script type="text/javascript" src="<?=base_url()?>js/flexslider.js"></script>
	</body>
</html>
