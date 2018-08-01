<?php 
require_once './vendor/autoload.php';

$loader = new Twig_Loader_Filesystem('./templates');
$twig = new Twig_Environment($loader);

echo $twig->render('main.html.twig', //templete file
	array(//data array
		
	)
);


 ?>