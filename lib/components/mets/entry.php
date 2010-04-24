<?php
require_once 'mets.inc.php';

class components_mets_Entry extends k_Component {
  protected $templates;
  protected $mets;
  protected $met;
  function __construct(k_TemplateFactory $templates, Mets $mets) {
    $this->templates = $templates;
    $this->mets = $mets;
  }
  function dispatch() {
    $this->met = $this->mets->fetch(array('id' => $this->name()));
    if (!$this->met) {
      throw new k_PageNotFound();
    }
    return parent::dispatch();
  }
  function renderHtml() {
    $this->document->setTitle($this->met->id());
    $t = $this->templates->create("mets/show");
    return $t->render($this, array('met' => $this->met));
  }
  function renderJson() {
    return $this->met->getArrayCopy();
  }
  function renderXml() {
    $xml = new XmlWriter();
    $xml->openMemory();
    $xml->startElement('met');
    foreach ($this->met->getArrayCopy() as $key => $value) {
      $xml->writeElement(str_replace('_', '-', $key), $value);
    }
    $xml->endElement();
    return $xml->outputMemory();
  }
  function renderHtmlEdit() {
    $this->document->setTitle("Edit " . $this->met->display_name());
    $t = $this->templates->create("mets/edit");
    return $t->render($this, array('met' => $this->met));
  }
  function putForm() {
    if ($this->processUpdate()) {
      return new k_SeeOther($this->url('../' . $this->met->id()));
    }
    return $this->render();
  }
  function processUpdate() {
    $this->met = new Met(
      array(
        'id' => $this->met->id(),
        'category' => $this->body('category'),
        'met' => $this->body('met'),
        'name' => $this->body('name')));
    return $this->mets->update($this->met);
  }
  function renderHtmlDelete() {
    $this->document->setTitle("Delete " . $this->met->display_name());
    $t = $this->templates->create("mets/delete");
    return $t->render($this, array('met' => $this->met));
  }
  function DELETE() {
    if ($this->mets->delete($this->met)) {
      return new k_SeeOther($this->url('..'));
    }
    return $this->render();
  }
}
