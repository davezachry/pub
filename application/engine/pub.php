<?php
    namespace Pub;

    class Pub {
        /* PROPERTIES */
        private $home_page;
        private $fourohfour_page;
        private $template_base;

        /* INITIALIZATION */
        function __construct() {
            $this->home_page = PAGES . '/index.php';
            $this->fourohfour_page = PAGES . '/fourohfour.php';
            $this->template_base = TEMPLATES . 'base.php';
        }

        /* METHODS */
        function getPath() {
            if (isset($_GET["page_path"])) {
                return htmlspecialchars($_GET["page_path"]);
            } else {
                return '';
            }
        }

        function findPage($page_path) {
            if ($page_path == '') {
                include $this->home_page;
            } else {
                if (file_exists(PAGES . $page_path . '/index.php')) {
                    include PAGES . $page_path . '/index.php';
                } else {
                    if (file_exists(PAGES . $page_path . '.php')) {
                        include PAGES . $page_path . '.php';
                    } else {
                        http_response_code(404);
                        include $this->fourohfour_page;
                    }
                }
            }
            $this->renderPage($layout, $data);
        }

        function renderPage($layout, $data, $template = '') {
            if ($template == '') {
                $template = $this->template_base;
            } else {
                $template = TEMPLATES . $template . '.php';
            }
            $rendered_layout = array(
                'metadata' => $data['metadata'],
                'layout' => $this->renderPartial(LAYOUTS . $layout . '.php',  $data['content'], false)
            );
            $this->renderPartial($template, $rendered_layout);
        }

        function renderPartial($filePath, $variables = array(), $echo = true) {
            $output = NULL;
            if(file_exists($filePath)){
                extract($variables);
                ob_start();
                include $filePath;
                $output = ob_get_clean();
            }
            if ($echo) {
                echo $output;
            } else {
                return $output;
            }
        }

    }
?>