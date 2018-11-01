<?php
$app = [];
require "core/database/Connection.php";
require "core/database/QueryBuilder.php";
require "core/Request.php";
require "core/router.php";
$app['config'] = require "config.php";

$app['database'] = new QueryBuilder(
    connection::make($app['config']['database'])
);