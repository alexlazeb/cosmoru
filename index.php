<?
require_once dirname(__FILE__).'/_config.php';
require_once $twigPath;
$param = str_replace(array($baseURl.'/','/'),'',$_SERVER['REQUEST_URI']);
$template = $param!=''?$param.'.php':'index.php';
Twig_Autoloader::register();
$template='/views/'.$template;
$loader = new Twig_Loader_Filesystem(dirname(__FILE__));
$twig = new Twig_Environment($loader, array(
    'cache' => false,
));
$template = $twig->loadTemplate($template);
echo $template->render(array());