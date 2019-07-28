<?php

class View
{
    public function render($template, $params = [], $layout = 'layout')
    {
        extract($params);

        include './views/' . $layout . '.php';
    }
}