<?
require_once dirname(__FILE__).'/_config.php';
require_once $twigPath;

Twig_Autoloader::register();
$template='/views/'.$template;
$loader = new Twig_Loader_Filesystem(dirname(__FILE__));
$twig = new Twig_Environment($loader, array(
    'cache' => false,
));

foreach(scandir(dirname(__FILE__).'/views') as $item){
    if(preg_match('/^([^_].*)\.php$/',$item,$result)){
        $template = $twig->loadTemplate('/views/'.$item);
        $res = $template->render(array());
        file_put_contents($result[1].'.html',$res);
    }
}
/*
echo $template->render(array());*/