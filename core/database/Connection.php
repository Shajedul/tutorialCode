<?php

class connection
{
    public static function make($config)
    {
        try
        {
           // return  new PDO("mysql:host=127.0.0.1;dbname=mytodo", 'root', '');
            return new PDO(
                $config['connection'].';dbname='.$config['name'],
                $config['username'],
                $config['password'],
                $config['options']
            );
            //echo ("Connected");
        }
        catch (PDOException $e)
        {
            die($e->getMessage());
        }
    }
}