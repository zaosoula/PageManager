<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="PageManager is an opensource html & php framework that helps you to develop your web projects.">
<meta name="author" content="Zao Soula">

<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:site" content="@zarque7">
<meta name="twitter:creator" content="@zarque7">
<meta name="twitter:title" content="PageManager">
<meta name="twitter:description" content="PageManager is an opensource html & php framework that helps you to develop your web projects.">
<meta name="twitter:image" content="https://zaosoula.fr/PageManager/assets/img/twitter.png">

<meta property="og:type" content="website">
<meta property="og:title" content="PageManager">
<meta property="og:url" content="https://zaosoula.fr/PageManager">
<meta property="og:image" content="https://zaosoula.fr/PageManager/assets/img/twitter.png">
<meta property="og:description" content="PageManager is an opensource html & php framework that helps you to develop your web projects.">

<meta name="google-site-verification" content="CdH_AwRAgAWNsiKkOAQ5RxLsjCb9A5cTynBgDEqJdas" />

<title><?echo $Page->getTitle();?></title>

<!-- Bootstrap Core CSS -->
<link href="<?echo BaseUrl?>/assets/css/bootstrap.min.css" rel="stylesheet">

<!-- Custom Fonts -->
<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">

<!-- Plugin CSS -->
<link rel="stylesheet" href="<?echo BaseUrl?>/assets/plugins/font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" href="<?echo BaseUrl?>/assets/plugins/simple-line-icons/css/simple-line-icons.css">
<link rel="stylesheet" href="<?echo BaseUrl?>/assets/plugins/device-mockups/device-mockups.min.css">

<!-- Theme CSS -->
<link href="<?echo BaseUrl?>/assets/css/new-age.css" rel="stylesheet">

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->



</head>
<body id="page-top">

  <?
    if (in_array("header", $Page->getRequire())) //Check if header need to be include (set in php file of page)
      require_once('require/header.php');
    if (in_array("headerdoc", $Page->getRequire())) //Check if headerdoc need to be include (set in php file of page)
      require_once('require/headerdoc.php');

    require_once('pages/html/'.$pageName.'.php'); //Load the html file of page

    if (in_array("footer", $Page->getRequire())) //Check if foter need to be include (set in php file of page)
      require_once('require/footer.php');
  ?>

<!-- jQuery -->
<script src="<?echo BaseUrl?>/assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap JavaScript -->
<script src="<?echo BaseUrl?>/assets/js/bootstrap.min.js"></script>
<!-- Plugin JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

<!-- Theme JavaScript -->
<script src="<?echo BaseUrl?>/assets/js/new-age.js"></script>

<? if($_SERVER['HTTP_HOST']!='localhost'){
      echo "<script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-42595785-8', 'auto');
        ga('send', 'pageview');

      </script>";
    }
?>


<?
  $Page->load(); //Load all assets (set in php file of page)
?>
</body>
</html>
