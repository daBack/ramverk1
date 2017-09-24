<?php
/**
 * Config file for Database.
 *
 * Example for MySQL.
 *  "dsn" => "mysql:host=localhost;dbname=test;",
 *  "username" => "test",
 *  "password" => "test",
 *  "driver_options"  => [\PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'UTF8'"],
 *
 * Example for SQLite.
 *  "dsn" => "sqlite:memory::",
 *
 */
if ($_SERVER['HTTP_HOST'] == 'localhost:8080') {
    return [
        "dsn"             => "mysql:host=127.0.0.1;dbname=Blog;",
        "username"        => "root",
        "password"        => null,
        "driver_options"  => null,
        "fetch_mode"      => \PDO::FETCH_OBJ,
        "table_prefix"    => null,
        "verbose"         => true,
        "debug_connect"   => true,
    ];
} else {
    return [
        "dsn"             => "mysql:host=blu-ray.student.bth.se;dbname=osbb16;",
        "username"        => "osbb16",
        "password"        => null,
        "driver_options"  => null,
        "fetch_mode"      => \PDO::FETCH_OBJ,
        "table_prefix"    => null,
        "verbose"         => true,
        "debug_connect"   => true,
    ];
}
