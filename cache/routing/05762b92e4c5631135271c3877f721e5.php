<?php


/**
 * Generated with RoutingCacheManager
 *
 * on 2016-07-28 07:02:21
 */

$app = Yee\Yee::getInstance();

$app->map("/head", "navController::___indexAction")->via("GET")->name("header.index");

