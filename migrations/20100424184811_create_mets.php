#!/usr/bin/env php
<?php
require_once(dirname(__FILE__) . '/../config/global.inc.php');
$container = create_container();
$db = $container->get('pdo');
$db->exec('drop table if exists mets');
$db->exec('CREATE TABLE mets (
  id SERIAL,
  category varchar(255) NOT NULL,
  value varchar(255) NOT NULL,
  name varchar(255) NOT NULL
)
');
