<?php
class Request
{
    public static function uri()
    {
        return Router::load('routes.php');
    }
}