#!/usr/bin/env php
<?php
require_once(dirname(__FILE__) . '/../config/global.inc.php');
$container = create_container();
$db = $container->get('pdo');
$db->exec('drop table if exists nutrients');
$db->exec('CREATE TABLE nutrients (
  id SERIAL,
  FoodId varchar(255) NOT NULL,
  CompId varchar(255) NOT NULL,
  BestLoc varchar(255) NOT NULL,
  Median varchar(255) NOT NULL,
  Minimum varchar(255) NOT NULL,
  Maximum varchar(255) NOT NULL,
  NoAnal varchar(255) NOT NULL,
  SourceId varchar(255) NOT NULL
)
');
