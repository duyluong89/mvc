<?php

require_once 'config/system.config.php';
require_once 'core/define.php';
require_once 'core/db.php';
require_once 'core/entity.php';
require_once 'core/system.core.php';
require_once 'core/views.php';
require_once 'core/translate.php';

$config = new SystenConfig();
$translate = new translate();
$view = new views();
$db = new db();
$entity = new entity();


Router::route(new Request);
