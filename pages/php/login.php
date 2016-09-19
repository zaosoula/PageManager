<?

$Page = new Page(array(
	'title'=>'Login',
	'require'=> array(),
	'assets'=>array(
    'js/jquery.slimscroll.js',
  	'js/waves.js',
  	'js/custom.min.js',
		'js/login.js',
		'plugins/bower_components/sweetalert/sweetalert.css',
		'plugins/bower_components/sweetalert/sweetalert.min.js'
	)
));

if($Page->checkRights('login')){
	header('Location: home');
}
?>
