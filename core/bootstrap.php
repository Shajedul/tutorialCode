<?php

require "core/database/Connection.php";
require "core/database/QueryBuilder.php";
require "core/Request.php";
require "core/router.php";
$config = require "config.php";
return new QueryBuilder(
    connection::make($config['database'])
);