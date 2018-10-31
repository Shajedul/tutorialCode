<?php

require "core/database/Connection.php";
require "core/database/QueryBuilder.php";
$config = require "config.php";
return new QueryBuilder(
    connection::make($config['database'])
);