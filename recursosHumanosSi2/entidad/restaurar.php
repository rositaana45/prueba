<?php
/*
* phpMyImporter
* -------------
* Version: 1.00
* Copyright (c) 2009 by Micky Holdorf
* Holdorf.dk/Software - micky.holdorf@gmail.com
* GNU Public License http://opensource.org/licenses/gpl-license.php
*
*/

@include_once('../phpmyimporter/phpMyImporter.php');

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "admisiones";
$dbname = "rh";

$path      = "../php/";
$filename  = $path."db-backup-rh-20161110-050355.sql"; // Filename of dump, default: dump.sql
$compress  = false; // Import gz compressed file, default: false

$connection = @mysql_connect($dbhost,$dbuser,$dbpass);
$dump = new phpMyImporter($dbname,$connection,$filename,$compress);

$dump->utf8 = true; // Uses UTF8 connection with MySQL server, default: true

$dump->doImport();
?>