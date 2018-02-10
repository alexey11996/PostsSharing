<?php
  /* This is the base controller
  * This loads the models and views
  */

  class Controller{
    //Load model
    public function model($model){
      require_once '../app/models/' . $model . '.php';
      //Instantiate the model
      return new $model();
    }

    public function view($view, $data = []){
      if (file_exists('../app/views/' . $view . '.php')){
        require_once '../app/views/' . $view . '.php';
      } else {
        //View does not exists
        die('View does not exist');
      }
    }
  }