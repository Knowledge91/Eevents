<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>E-Events</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Custom Google Web Font -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
 	<link  href="http://fonts.googleapis.com/css?family=Bevan:regular" rel="stylesheet" type="text/css" > - See more at: http://www.webdesignshock.com/web-fonts#sthash.5NRRd31L.dpuf

    <!-- Add custom CSS here -->
    <link href="css/landing-page.css" rel="stylesheet">
    
    <!-- Favicon -->
    <link rel="icon" href="img/favicon.png" type="image/x-icon">
    
    <!-- Google Analytics -->
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-86175861-1', 'auto');
        ga('send', 'pageview');
    </script>

</head>

<body>

    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="http://eskalaten.de"><span style="transform: rotate(-45deg); display: inline-block; font-family: Bevan; color: orange; font-weight: 100; font-size: 1.5em;vertical-align: middle">E </span><u>Events</u></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right navbar-ex1-collapse">
                <ul class="nav navbar-nav">
                    <?php include('php/navigation.php'); ?>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <br />
    <br />
	
    <div style="width:100%">
    	
          <!-- Embedded Google Map using an iframe - to select your location find it on Google maps and paste the link as the iframe src. If you want to use the Google Maps API instead then have at it! -->
          <iframe width="100%" height="400px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?hl=en&amp;ie=UTF8&amp;q=marienplatz%207%2C%2036043%20fulda+(E-Events)&amp;t=m&amp;z=12&amp;output=embed"></iframe>
    </div>
    
    <div class="container">
      
      <div class="row">
      
        <div class="col-lg-12">
          <h1 class="page-header">Kontakt <small>Wir freuen uns auf Sie!</small></h1>
        </div>

      </div><!-- /.row -->
      
      <div class="row">

        <div class="col-sm-8">
      		<?php
				$name = $_POST['name'];
				$telefon = $_POST['telefon'];
				$email = $_POST['email'];
				$nachricht = $_POST['nachricht'];
				
				
			?>
			<h2> Nachricht versendet. </h2>
            <h3>Vielen Dank f&uuml;r Ihre Nachricht. Wir melden uns schnellstm&ouml;glich bei Ihnen. </h3>
        </div>

        <div class="col-sm-4">
          <h3><span style="transform: rotate(-45deg); display: inline-block; font-family: Bevan; color: orange; font-weight: 100; font-size: 1.5em;vertical-align: middle">E </span><u>Events</u></h3>
          <h4>Exciting Events</h4>
          <p>
            Marienplatz 7<br>
            36043, Fulda<br>
          </p>
          <p><i class="fa fa-phone"></i> <abbr title="Phone"></abbr>: 0152 338 660 62</p>
          <p><i class="fa fa-envelope-o"></i> <abbr title="Email"></abbr>: <a href="mailto:feedback@startbootstrap.com">dirkhornung@gmx.de</a></p>
          <ul class="list-unstyled list-inline list-social-icons">
            <li class="tooltip-social facebook-link"><a href="#facebook-page" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="fa fa-facebook-square fa-2x"></i></a></li>
            <li class="tooltip-social linkedin-link"><a href="#linkedin-company-page" data-toggle="tooltip" data-placement="top" title="LinkedIn"><i class="fa fa-linkedin-square fa-2x"></i></a></li>
            <li class="tooltip-social twitter-link"><a href="#twitter-profile" data-toggle="tooltip" data-placement="top" title="Twitter"><i class="fa fa-twitter-square fa-2x"></i></a></li>
            <li class="tooltip-social google-plus-link"><a href="#google-plus-page" data-toggle="tooltip" data-placement="top" title="Google+"><i class="fa fa-google-plus-square fa-2x"></i></a></li>
          </ul>
        </div>

      </div><!-- /.row -->

    </div><!-- /.container -->
    </div>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <ul class="list-inline">
                        <?php include('php/footerNavigation.php'); ?>
                    </ul>
                    <p class="copyright text-muted small">Copyright &copy; E-Events. All Rights Reserved</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- JavaScript -->
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.js"></script>
    
    <script>
		var hashTagActive = "";
		$(".scroll").click(function (event) {
			if(hashTagActive != this.hash) { //this will prevent if the user click several times the same link to freeze the scroll.
				event.preventDefault();
				//calculate destination place
				var dest = 0;
				if ($(this.hash).offset().top > $(document).height() - $(window).height()) {
					dest = $(document).height() - $(window).height();
				} else {
					dest = $(this.hash).offset().top;
				}
				//go to destination
				$('html,body').animate({
					scrollTop: dest
				}, 1000, 'swing');
				hashTagActive = this.hash;
			}
		});
	</script>
    

</body>

</html>


