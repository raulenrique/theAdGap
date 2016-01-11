<?php 

date_default_timezone_set("Pacific/Auckland");
error_reporting(E_ALL);
session_start();
session_regenerate_id(true);
require "routes.php";