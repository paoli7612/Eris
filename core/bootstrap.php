<?php

    require 'database/Connection.php';
    require 'database/QueryBuilder.php';

    require 'core/Router.php';

    return new QueryBuilder(
        Connection::make($config['database'])
    );
