<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Gaming Community">
    <meta name="author" content="Atirion">

    <title>AtirionTV</title>
	<link rel="shortcut icon" href="favicon.ico" />
	<link href="https://fonts.googleapis.com/css?family=Kameron" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Montserrat|Poppins&display=swap" rel="stylesheet">
    <!-- Bootstrap Core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet" type='text/css'>
    <!-- Custom CSS -->
	<!-- jQuery Version 1.11.1 -->
    <script src="js/jquery.js"></script>
    <style>
    body {

        /* Required padding for .navbar-fixed-top. Remove if using .navbar-static-top. Change if height of navigation changes. */
    }
    </style>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	 <script src="https://code.jquery.com/jquery-3.2.1.js"
            integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
            crossorigin="anonymous"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</head>
<body>
	<script>
    </script>
    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-static-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header ">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="index.html">Home</a>
                    </li>
                    <li>
                        <a href="faq.html">FAQ</a>
                    </li>
                    <li>
                        <a href="stream.html">Stream</a>
                    </li>
                    <li class="active">
                        <a href="fan_art.php">Fan Art</a>
                    </li>
                    <li>
                        <a href="setup.html">Setup</a>
                    </li>
                    <li>
                        <a href="https://teespring.com/en-GB/stores/ati-merch" target="_blank">Merch</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
		<!-- Page Content -->

	<div class="gallery">
		<?php
		  foreach (glob('img/fan_art_folder/*.{jpg,png,gif}', GLOB_BRACE) as $filename) {
			echo '<img class="gallery-image" src="' . $filename .'">';
		  }
		?>
	</div>

<script>

</script>
		<!-- **********end gallery********** -->
		<!-- jQuery first, then bootstrap js -->
        <!-- /.row -->
    <!-- /.container -->

	<script src="js/jquery.js"></script>

	<script src="js/bootstrap.min.js"></script>
  <footer class="footer">
      <a href="Http://twitch.tv/atiriontv"><img src="img/icons/twitch2.png" alt="Twitch Logo" class="social-icon"></a>
      <a href="Https://twitter.com/AtirionTV"><img src="img/icons/twitter2.png" alt="Twitter Logo" class="social-icon"></a>
      <a href="Http://instagram.com/atiriontv"><img src="img/icons/instagram2.png" alt="Instagram Logo" class="social-icon"></a>
      <a href="Http://youtube.com/atiriontv"><img src="img/icons/youtube2.png" alt="Youtube Logo" class="social-icon"></a>
      <a href="https://discord.gg/KHArNvh"><img src="img/icons/discord2.png" alt="Twitch Logo" class="social-icon"></a>
  </footer>
	</body>
</html>
