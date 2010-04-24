<?php
require_once 'pdoext.inc.php';
require_once 'pdoext/connection.inc.php';
require_once 'pdoext/query.inc.php';
require_once 'pdoext/tablegateway.php';

class Mets extends pdoext_TableGateway {
  function __construct(pdoext_Connection $db) {
    parent::__construct('mets', $db);
  }
  function load($row = array()) {
    return new Met($row);
  }
  function validate($met) {
    // TODO: Make validations here
  }
  function validate_update($met) {
    if (!$met->id()) {
      $met->errors[] = "Missing id";
    }
  }
}

class Met {
  public $errors = array();
  function __construct($row = array('id' => null, 'category' => null, 'value' => null, 'name' => null)) {
    $this->row = $row;
  }
  function getArrayCopy() {
    return $this->row;
  }
  function display_name() {
    return "Met#" . $this->id();
  }
  function id() {
    return $this->row['id'];
  }
  function category() {
    return $this->row['category'];
  }
  function value() {
    return $this->row['value'];
  }
  function name() {
    return $this->row['name'];
  }
}
