<?php


/**
 * Generated with RoutingCacheManager
 *
 * on 2016-07-28 06:36:43
 */

$app = Yee\Yee::getInstance();

$app->map("/home", "navController::___indexAction")->via("GET")->name("nav.index");

