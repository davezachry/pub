<?
    define('ENGINE', __DIR__ . '/../application/engine/');
    define('TEMPLATES', __DIR__ . '/../application/templates/');
    define('LAYOUTS', __DIR__ . '/../application/layouts/');
    define('PAGES', __DIR__ . '/../application/pages');
    define('MODULES', __DIR__ . '/../application/modules/');

    require_once (ENGINE . 'pub.php');

    use Pub\Pub;
    $pub = new Pub();

    $pub->findPage($_SERVER['REQUEST_URI']);
?>