<?php
    namespace Pub;

    class Pub {
        /* PROPERTIES */
        private $home_page;
        private $fourohfour_page;

        /* INITIALIZATION */
        function __construct() {
            $this->home_page = PAGES . '/index.json';
            $this->fourohfour_page = PAGES . '/fourohfour.json';
        }

        /* METHODS */
        function findPage($page_path) {
            if ($page_path == '/') {
                $json_path = $this->home_page;
            } else {
                if (file_exists(PAGES . $page_path . '/index.json')) {
                    $json_path = PAGES . $page_path . '/index.json';
                } else {
                    if (file_exists(PAGES . $page_path . '.json')) {
                        $json_path = PAGES . $page_path . '.json';
                    } else {
                        http_response_code(404);
                        $json_path = $this->fourohfour_page;
                    }
                }
            }
            $json_string = file_get_contents($json_path);
            $json_data = json_decode($json_string, true);
            $this->renderPage(
                $json_data['data'],
                (isset($json_data['layout'])) ? ($json_data['layout']) : ('standard'),
                (isset($json_data['template'])) ? ($json_data['template']) : ('base')
            );
        }

        function renderPage($data, $layout, $template) {
            $template = TEMPLATES . $template . '.php';
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