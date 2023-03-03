<?php

class Controller
{


    public function model($model)
    {
        $filePath = _DIR_ROOT . '/app/models/' . $model . '.php';
        if (file_exists($filePath)) {

            require_once $filePath;
            $model = explode('/', $model);
            $model = $model[count($model) - 1];
            if (class_exists($model)) {
                return new $model();
            }
        }
    }

    public function render($view, $data = [])
    {
        # code...
        extract($data);

        if (file_exists(_DIR_ROOT . '/app/views/' . $view . '.php')) {
            require_once _DIR_ROOT . '/app/views/' . $view . '.php';
        }
    }
}
