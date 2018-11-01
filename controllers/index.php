<?php

$tasks = $app['database']->selectAll('todos');
var_dump($tasks);