<!DOCTYPE html>
<html>
<body>

<h1>MVC in PHP</h1>

<?php

class Model
{
    public $string;

    public function __construct(){
        $this->string = "Using PHP in MVC! Inside the model";
    }
}


class Controller
{
    private $model;

    public function __construct($model){
        $this->model = $model;
    }

    public function clicked() {
        $this->model->string = "using the controller to update the view";
    }
}

class View
{
    private $model;
    private $controller;

    public function __construct($controller, $model) {
        $this->controller = $controller;
        $this->model = $model;
    }

    public function output() {
         return '<p><a href="mvc.php?action=clicked">'.$this->model->string."</a><p>";
    }
}

$model = new Model();
$controller = new Controller($model);
$view = new View($controller, $model);
if (isset($_GET['action']) && !empty($_GET['action'])) {
    $controller->{$_GET['action']}();
}
echo $view->output();

?>
</body>
</html>