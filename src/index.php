<?
//this is a tool for whitelist management used by huggle since 2.1.15
//
//predefined text

error_reporting(E_ALL & ~E_STRICT & ~E_NOTICE);
ini_set('display_errors','1');

require("whitelist.php");

$starttime = microtime( true );
$wl = new Whitelist;
$wl->init();

