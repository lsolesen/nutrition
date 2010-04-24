<?php
require_once 'pdoext.inc.php';
require_once 'pdoext/connection.inc.php';
require_once 'pdoext/query.inc.php';
require_once 'pdoext/tablegateway.php';

class Groupnames extends pdoext_TableGateway {
  function __construct(pdoext_Connection $db) {
    parent::__construct('groupnames', $db);
  }
  function load($row = array()) {
    return new Groupname($row);
  }
  function validate($groupname) {
    // TODO: Make validations here
  }
  function validate_update($groupname) {
    if (!$groupname->id()) {
      $groupname->errors[] = "Missing id";
    }
  }
}

class Groupname {
  public $errors = array();
  function __construct($row = array('id' => null, 'MainGrp' => null, 'NameDK' => null, 'NameEn' => null)) {
    $this->row = $row;
  }
  function getArrayCopy() {
    return $this->row;
  }
  function display_name() {
    return "Groupname#" . $this->id();
  }
  function id() {
    return $this->row['id'];
  }
  function MainGrp() {
    return $this->row['MainGrp'];
  }
  function NameDK() {
    return $this->row['NameDK'];
  }
  function NameEn() {
    return $this->row['NameEn'];
  }
}
