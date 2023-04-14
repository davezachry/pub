<?php
    require_once (ENGINE . 'pub.php');
    use Application\Engine\Pub;
    $pub = new Pub();
    $page_path = $pub->getPath();
    $pub->findPage($page_path);
?>