<?php
require_once 'pdoext.inc.php';
require_once 'pdoext/connection.inc.php';
require_once 'pdoext/query.inc.php';
require_once 'pdoext/tablegateway.php';

class Compnames extends pdoext_TableGateway {
  function __construct(pdoext_Connection $db) {
    parent::__construct('compnames', $db);
  }
  function load($row = array()) {
    return new Compname($row);
  }
  function validate($compname) {
    // TODO: Make validations here
  }
  function validate_update($compname) {
    if (!$compname->id()) {
      $compname->errors[] = "Missing id";
    }
  }
}

class Compname {
  public $errors = array();
  function __construct($row = array('id' => null, 'CompId' => null, 'SrtOrd' => null, 'Unit' => null, 'CmpNamDK' => null, 'CmpNamEN' => null, 'PublStatus' => null, 'eurofoodsTag' => null)) {
    $this->row = $row;
  }
  function getArrayCopy() {
    return $this->row;
  }
  function display_name() {
    return "Compname#" . $this->id();
  }
  function id() {
    return $this->row['id'];
  }
  function CompId() {
    return $this->row['CompId'];
  }
  function SrtOrd() {
    return $this->row['SrtOrd'];
  }
  function Unit() {
    return $this->row['Unit'];
  }
  function CmpNamDK() {
    return $this->row['CmpNamDK'];
  }
  function CmpNamEN() {
    return $this->row['CmpNamEN'];
  }
  function PublStatus() {
    return $this->row['PublStatus'];
  }
  function eurofoodsTag() {
    return $this->row['eurofoodsTag'];
  }
}
