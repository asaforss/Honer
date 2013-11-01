<?php
//
// PHASE: BOOTSTRAP
//
define('HONER_INSTALL_PATH', dirname(__FILE__));
define('HONER_SITE_PATH', HONER_INSTALL_PATH . '/site');

require(HONER_INSTALL_PATH.'/src/CHoner/bootstrap.php');

$hn = CHoner::Instance();

//
// PHASE: FRONTCONTROLLER ROUTE
//
$hn->FrontControllerRoute();

//
// PHASE: THEME ENGINE RENDER
//
$hn->ThemeEngineRender();