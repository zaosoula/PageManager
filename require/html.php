<!DOCTYPE html>
<html>
<head>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="YOURNAME">

<title><?echo $Page->getTitle();?></title>

<!-- Bootstrap Core CSS -->
<link href="assets/css/bootstrap.min.css" rel="stylesheet">

<!-- Custom Fonts -->
<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">

<!-- Plugin CSS -->
<link rel="stylesheet" href="assets/plugins/font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" href="assets/plugins/simple-line-icons/css/simple-line-icons.css">
<link rel="stylesheet" href="assets/plugins/device-mockups/device-mockups.min.css">

<!-- Theme CSS -->
<link href="assets/css/new-age.css" rel="stylesheet">

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

    require_once('pages/html/'.$pageName.'.php'); //Load the html file of page

    if (in_array("footer", $Page->getRequire())) //Check if foter need to be include (set in php file of page)
      require_once('require/footer.php');
  ?>

<!-- jQuery -->
<script src="assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap JavaScript -->
<script src="assets/js/bootstrap.min.js"></script>
<!-- Plugin JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

<!-- Theme JavaScript -->
<script src="assets/js/new-age.js"></script>

<?
  $Page->load(); //Load all assets (set in php file of page)
?>
</body>
</html>
