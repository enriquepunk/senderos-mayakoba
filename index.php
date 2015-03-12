<?php
require_once 'vendor/Twig/lib/Twig/Autoloader.php';
require_once 'vendor/rb.php';
require_once 'vendor/Slim/Slim.php';
require_once 'conexion.php';
//http://www.slimframework.com/
//http://redbeanphp.com/querying
//http://twig.sensiolabs.org/doc/api.html
Twig_Autoloader::register();
$app = new Slim(); 
Twig_Autoloader::register();

$query='SELECT
        p1.*,
        wm2.meta_value
    FROM 
        wp_posts p1
    LEFT JOIN 
        wp_postmeta wm1
        ON (
            wm1.post_id = p1.id 
            AND wm1.meta_value IS NOT NULL
            AND wm1.meta_key = "_thumbnail_id"              
        )
    LEFT JOIN 
        wp_postmeta wm2
        ON (
            wm1.meta_value = wm2.post_id
            AND wm2.meta_key = "_wp_attached_file"
            AND wm2.meta_value IS NOT NULL  
        )
    WHERE
        p1.post_status="publish" 
        AND p1.post_type="post"
    ORDER BY 
        p1.post_date DESC
    LIMIT 2';

$sql->set_charset('utf8');
$result = $sql->query($query) or die ("Error in query: $query " . $sql->error);  
$rows = array();
while($row = $result->fetch_assoc())
{
    $rows[]=$row;
}
$result->free();
$sql->close();


$app->get('/', function () use ($rows){
	$loader = new Twig_Loader_Filesystem('templates');
	$twig = new Twig_Environment($loader);
	$twig->addExtension(new Twig_Extensions_Extension_Text());
        echo $twig->render('home.html.twig',array("posts"=>$rows));
});

//print_r($rows);
$app->run();

