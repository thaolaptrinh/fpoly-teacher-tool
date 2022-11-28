<?php

class Route
{
    public function handleRoute($url)
    {
        # code...
        global $routes;
        unset($routes['default_controller']);
        $url = trim($url, '/');

        $handelUrl = $url;
        if (!empty($routes)) {
            foreach ($routes as $key => $value) {

                if ($url == $key) {
                    $handelUrl = $value;
                }
            }
        }
        return $handelUrl;
    }
}
