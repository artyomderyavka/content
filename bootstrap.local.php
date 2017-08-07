<?php
/**
 * Created by PhpStorm.
 * User: Artyom
 * Date: 06.08.2017
 * Time: 15:15
 */
if (!isset($contentServiceBootstrapped) || $contentServiceBootstrapped === false) {
    $routesPrefix = "/content";
    require_once __DIR__ . "/config/routesMap.php";
    require_once __DIR__ . "/config/servicesMap.php";
    $routesPrefix = "";
    $contentServiceBootstrapped = true;
}
