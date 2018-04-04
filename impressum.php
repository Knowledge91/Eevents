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
	
    
    <div  width="100%">
    	<img class="img-responsive" src="img/agentur.png" style="width: 100%">
    </div>
   
    <div class="content-section-a">
    	<div class="container">

            <!-- Service Paragraphs -->
    
            <div class="row">
   				<div class="col-lg-12 col-sm-12">
                	<h2>Impressum</h2>
<p>Dirk Hornung, Philipp Kleemann<br />
Marienplatz 7<br />36043 Fulda</p>
<p>Telefon: 015233866062<br />
E-Mail: <a href="mailto:team@eevents-fulda.de">team@eevents-fulda.de</a><br />
</p>

                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
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




