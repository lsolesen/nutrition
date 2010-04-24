#!/usr/bin/env php
<?php
require_once(dirname(__FILE__) . '/../config/global.inc.php');
$container = create_container();
$db = $container->get('pdo');
$db->exec('drop table if exists groupnames');
$db->exec('CREATE TABLE groupnames (
  id SERIAL,
  MainGrp varchar(255) NOT NULL,
  NameDK varchar(255) NOT NULL,
  NameEn varchar(255) NOT NULL
)
');
