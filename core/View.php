<?php

namespace core;

/**
 * Handling view Rendering
 *
 * @author Muhammed Alsaied
 */
class View {

    private $params = array();
    private $view_name;

    /**
     * Generate a view 
     * @param type $view_name
     * 
     */
    public function __construct($view_name) {
        $this->view_name = $view_name;
    }

    /**
     * Inject arguements to the view
     * @param String $key
     * @param $value
     * @return $this
     */
    public function with(String $key, $value) {
        $this->params[$key] = $value;
        return $this;
    }

    public function __destruct() {
        extract($this->params);
        $view_file = "./views/{$this->view_name}.view.php";

        if (!file_exists($view_file)) {
            throw new Exception("Undefined view '{$this->view_name}'");
        }
        require $view_file;
    }

}
