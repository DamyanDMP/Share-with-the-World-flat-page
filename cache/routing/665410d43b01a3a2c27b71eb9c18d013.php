<?php


/**
 * Generated with RoutingCacheManager
 *
 * on 2016-07-27 03:06:56
 */

$app = Yee\Yee::getInstance();

$app->map("/changePass", "ChangePassController::___indexAction")->via("GET")->name("changepass.index");
$app->map("/changePass", "ChangePassController::___postAction")->via("POST")->name("changepass.index");

