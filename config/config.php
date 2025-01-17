<?php
namespace MintyPHP\Config;

class Router
{
  public static $baseUrl      = '/';          // default: '/'
  public static $pageRoot     = 'pages/';     // default: 'pages/'
  public static $templateRoot = 'templates/'; // default: 'templates/'
}

class Session
{
  public static $sessionName = 'madmin'; // default: 'mintyphp'
}

class Firewall
{
  public static $concurrency     = 10;
  public static $spinLockSeconds = 0.15;
  public static $intervalSeconds = 300;
  public static $cachePrefix     = 'fw_concurrency_';
  public static $reverseProxy    = false;
}

class DB
{
  public static $host     = 'localhost'; // default: 'localhost'
  public static $username = 'madmin_com';      // set to 'root' to initialize
  public static $password = 'madmin_com';          // overwritten during initialization
  public static $database = 'madmin_com';  // set to project name
  public static $port     = 3306;        // default: 3306
}

class Auth
{
  public static $usersTable    = 'users';    // table that holds the user data
  public static $usernameField = 'username'; // type varchar(255), has unique index
  public static $passwordField = 'password'; // type varchar(255), holds sha1 in hex
  public static $createdField  = 'created';  // type datetime, optional
}

class Debugger
{
  public static $enabled = true; // enable during development
}

class Hello
{
  public static $name = 'world'; // class from "lib" folder
}
