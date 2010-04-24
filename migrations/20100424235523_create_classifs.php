#!/usr/bin/env php
<?php
require_once(dirname(__FILE__) . '/../config/global.inc.php');
$container = create_container();
$db = $container->get('pdo');
$db->exec('drop table if exists classifs');
$db->exec('CREATE TABLE classifs (
  id SERIAL,
  MainGrp int NOT NULL,
  SubGrp int NOT NULL,
  EngFdGp varchar(255) NOT NULL,
  OrigFdGp varchar(255) NOT NULL
)
');
