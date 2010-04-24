<?php
require_once 'groupnames.inc.php';

class components_groupnames_Entry extends k_Component {
  protected $templates;
  protected $groupnames;
  protected $groupname;
  function __construct(k_TemplateFactory $templates, Groupnames $groupnames) {
    $this->templates = $templates;
    $this->groupnames = $groupnames;
  }
  function dispatch() {
    $this->groupname = $this->groupnames->fetch(array('id' => $this->name()));
    if (!$this->groupname) {
      throw new k_PageNotFound();
    }
    return parent::dispatch();
  }
  function renderHtml() {
    $this->document->setTitle($this->groupname->id());
    $t = $this->templates->create("groupnames/show");
    return $t->render($this, array('groupname' => $this->groupname));
  }
  function renderJson() {
    return $this->groupname->getArrayCopy();
  }
  function renderXml() {
    $xml = new XmlWriter();
    $xml->openMemory();
    $xml->startElement('groupname');
    foreach ($this->groupname->getArrayCopy() as $key => $value) {
      $xml->writeElement(str_replace('_', '-', $key), $value);
    }
    $xml->endElement();
    return $xml->outputMemory();
  }
  function renderHtmlEdit() {
    $this->document->setTitle("Edit " . $this->groupname->display_name());
    $t = $this->templates->create("groupnames/edit");
    return $t->render($this, array('groupname' => $this->groupname));
  }
  function putForm() {
    if ($this->processUpdate()) {
      return new k_SeeOther($this->url('../' . $this->groupname->id()));
    }
    return $this->render();
  }
  function processUpdate() {
    $this->groupname = new Groupname(
      array(
        'id' => $this->groupname->id(),
        'MainGrp' => $this->body('MainGrp'),
        'NameDK' => $this->body('NameDK'),
        'NameEn' => $this->body('NameEn')));
    return $this->groupnames->update($this->groupname);
  }
  function renderHtmlDelete() {
    $this->document->setTitle("Delete " . $this->groupname->display_name());
    $t = $this->templates->create("groupnames/delete");
    return $t->render($this, array('groupname' => $this->groupname));
  }
  function DELETE() {
    if ($this->groupnames->delete($this->groupname)) {
      return new k_SeeOther($this->url('..'));
    }
    return $this->render();
  }
}
