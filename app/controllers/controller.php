<?php
class Controller extends View {
    
    public $layout = "main";

    public function index($id, $nome){
        echo "página inicial: " . $id;
        //$this->test("xxx yyy zzz 123");
        
        $data = array("felipe", "donato", "marlon");
        $this->render("index", $data);         
    }

    public function test(){
        $data = array("felipe", "donato", "marlon");
        $this->render("index", $data);         
    }


}
