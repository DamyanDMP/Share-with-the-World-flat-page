<?php


/**
 * Generated with RoutingCacheManager
 *
 * on 2016-07-22 08:52:18
 */

$app = Yee\Yee::getInstance();

$app->map("/email", "EmailController::___indexAction")->via("GET")->name("email.index");

