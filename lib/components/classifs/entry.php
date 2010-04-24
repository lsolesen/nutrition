<?php
require_once 'classifs.inc.php';

class components_classifs_Entry extends k_Component {
  protected $templates;
  protected $classifs;
  protected $classif;
  function __construct(k_TemplateFactory $templates, Classifs $classifs) {
    $this->templates = $templates;
    $this->classifs = $classifs;
  }
  function dispatch() {
    $this->classif = $this->classifs->fetch(array('id' => $this->name()));
    if (!$this->classif) {
      throw new k_PageNotFound();
    }
    return parent::dispatch();
  }
  function renderHtml() {
    $this->document->setTitle($this->classif->id());
    $t = $this->templates->create("classifs/show");
    return $t->render($this, array('classif' => $this->classif));
  }
  function renderJson() {
    return $this->classif->getArrayCopy();
  }
  function renderXml() {
    $xml = new XmlWriter();
    $xml->openMemory();
    $xml->startElement('classif');
    foreach ($this->classif->getArrayCopy() as $key => $value) {
      $xml->writeElement(str_replace('_', '-', $key), $value);
    }
    $xml->endElement();
    return $xml->outputMemory();
  }
  function renderHtmlEdit() {
    $this->document->setTitle("Edit " . $this->classif->display_name());
    $t = $this->templates->create("classifs/edit");
    return $t->render($this, array('classif' => $this->classif));
  }
  function putForm() {
    if ($this->processUpdate()) {
      return new k_SeeOther($this->url('../' . $this->classif->id()));
    }
    return $this->render();
  }
  function processUpdate() {
    $this->classif = new Classif(
      array(
        'id' => $this->classif->id(),
        'MainGrp' => $this->body('MainGrp'),
        'SubGrp' => $this->body('SubGrp'),
        'EngFdGp' => $this->body('EngFdGp'),
        'OrigFdGp' => $this->body('OrigFdGp')));
    return $this->classifs->update($this->classif);
  }
  function renderHtmlDelete() {
    $this->document->setTitle("Delete " . $this->classif->display_name());
    $t = $this->templates->create("classifs/delete");
    return $t->render($this, array('classif' => $this->classif));
  }
  function DELETE() {
    if ($this->classifs->delete($this->classif)) {
      return new k_SeeOther($this->url('..'));
    }
    return $this->render();
  }
}
