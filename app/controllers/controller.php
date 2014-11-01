<?php
class Controller {
    
    public $layout = "main";

    public function index($id, $nome){
        echo "página inicial: " . $id;
    }

}
