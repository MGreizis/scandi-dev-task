<?php

namespace Core;

class RenderView
{
    public static function render($view)
    {
        $file = "../app/views/$view";

        if (is_readable($file)) {
            require $file;
        } else {
            echo "$file not found";
        }
    }
}