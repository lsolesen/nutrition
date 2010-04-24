<?php
require_once 'sources.inc.php';

class components_sources_Entry extends k_Component {
  protected $templates;
  protected $sources;
  protected $source;
  function __construct(k_TemplateFactory $templates, Sources $sources) {
    $this->templates = $templates;
    $this->sources = $sources;
  }
  function dispatch() {
    $this->source = $this->sources->fetch(array('id' => $this->name()));
    if (!$this->source) {
      throw new k_PageNotFound();
    }
    return parent::dispatch();
  }
  function renderHtml() {
    $this->document->setTitle($this->source->id());
    $t = $this->templates->create("sources/show");
    return $t->render($this, array('source' => $this->source));
  }
  function renderJson() {
    return $this->source->getArrayCopy();
  }
  function renderXml() {
    $xml = new XmlWriter();
    $xml->openMemory();
    $xml->startElement('source');
    foreach ($this->source->getArrayCopy() as $key => $value) {
      $xml->writeElement(str_replace('_', '-', $key), $value);
    }
    $xml->endElement();
    return $xml->outputMemory();
  }
  function renderHtmlEdit() {
    $this->document->setTitle("Edit " . $this->source->display_name());
    $t = $this->templates->create("sources/edit");
    return $t->render($this, array('source' => $this->source));
  }
  function putForm() {
    if ($this->processUpdate()) {
      return new k_SeeOther($this->url('../' . $this->source->id()));
    }
    return $this->render();
  }
  function processUpdate() {
    $this->source = new Source(
      array(
        'id' => $this->source->id(),
        'SourceRefId' => $this->body('SourceRefId'),
        'SourceID' => $this->body('SourceID'),
        'RefId' => $this->body('RefId')));
    return $this->sources->update($this->source);
  }
  function renderHtmlDelete() {
    $this->document->setTitle("Delete " . $this->source->display_name());
    $t = $this->templates->create("sources/delete");
    return $t->render($this, array('source' => $this->source));
  }
  function DELETE() {
    if ($this->sources->delete($this->source)) {
      return new k_SeeOther($this->url('..'));
    }
    return $this->render();
  }
}
