<?php


/**
 * Generated with RoutingCacheManager
 *
 * on 2016-08-01 07:44:51
 */

$app = Yee\Yee::getInstance();

$app->map("/activation/:accode", "activationController::___activationAction")->via("GET")->name("activation.index");

