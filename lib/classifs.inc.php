<?php
require_once 'pdoext.inc.php';
require_once 'pdoext/connection.inc.php';
require_once 'pdoext/query.inc.php';
require_once 'pdoext/tablegateway.php';

class Classifs extends pdoext_TableGateway {
  function __construct(pdoext_Connection $db) {
    parent::__construct('classifs', $db);
  }
  function load($row = array()) {
    return new Classif($row);
  }
  function validate($classif) {
    // TODO: Make validations here
  }
  function validate_update($classif) {
    if (!$classif->id()) {
      $classif->errors[] = "Missing id";
    }
  }
}

class Classif {
  public $errors = array();
  function __construct($row = array('id' => null, 'MainGrp' => null, 'SubGrp' => null, 'EngFdGp' => null, 'OrigFdGp' => null)) {
    $this->row = $row;
  }
  function getArrayCopy() {
    return $this->row;
  }
  function display_name() {
    return "Classif#" . $this->id();
  }
  function id() {
    return $this->row['id'];
  }
  function MainGrp() {
    return $this->row['MainGrp'];
  }
  function SubGrp() {
    return $this->row['SubGrp'];
  }
  function EngFdGp() {
    return $this->row['EngFdGp'];
  }
  function OrigFdGp() {
    return $this->row['OrigFdGp'];
  }
}
