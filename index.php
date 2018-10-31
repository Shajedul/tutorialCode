<?php


$query= require "core/bootstrap.php";
$tasks= $query->selectAll('todos');
var_dump($tasks);