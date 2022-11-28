<?php

class App
{


    private $__controller, $__action, $__param, $__routes;

    public function __construct()
    {

        global $routes;

        $this->__routes = new Route();

        if (!empty($routes['default_controller'])) {
            $this->__controller = $routes['default_controller'];
        }

        $this->__action = 'index';
        $this->__param = [];

        $this->handleUrl();
    }


    public function getUrl()
    {
        # code...
        if (!empty($_SERVER['PATH_INFO'])) {
            $url = $_SERVER['PATH_INFO'];
        } else {
            $url = '/';
        }

        return $url;
    }


    public function handleUrl()
    {
        # code...

        $url = $this->getUrl();
        $url = $this->__routes->handleRoute($url);


        $urlArray = array_filter(explode('/', $url));
        $urlArray  = array_values($urlArray);


        $urlCheck = '';

        if (!empty($urlArray)) {
            foreach ($urlArray as $key => $value) {
                # code...
                $urlCheck .= $value . '/';
                $fileCheck = rtrim($urlCheck, '/');

                $fileArray = explode('/', $fileCheck);

                $fileArray[count($fileArray) - 1] = ucfirst($fileArray[count($fileArray) - 1]);

                $fileCheck = implode('/', $fileArray);

                if (!empty($urlArray[$key - 1])) {
                    unset($urlArray[$key - 1]);
                }

                if (file_exists('app/controllers/' . $fileCheck . '.php')) {
                    $urlCheck = $fileCheck;
                    break;
                }
            }
            $urlArray = array_values($urlArray);
        }

        // controller
        if (!empty($urlArray[0])) {
            $this->__controller = ucfirst($urlArray[0]);
        } else {
            $this->__controller = ucfirst($this->__controller);
        }

        if (file_exists('app/controllers/' .  $urlCheck . '.php')) {
            require_once 'app/controllers/' . $urlCheck . '.php';
            // check exist class controller
            if (class_exists($this->__controller)) {
                $this->__controller = new $this->__controller();
                unset($urlArray[0]);
            } else {
                $this->loadError();
            }
        } else {
            $this->loadError();
        }
        if (!empty($urlArray[1])) {
            $this->__action = $urlArray[1];
            unset($urlArray[1]);
        }

        $this->__param = array_values($urlArray);


        if (method_exists($this->__controller, $this->__action)) {
            call_user_func_array([$this->__controller, $this->__action], $this->__param);
        } else {
            $this->loadError();
        }
    }

    public function loadError($type = '404')
    {
        # code...

        require_once 'views/error/' . $type . '.php';
    }
}
