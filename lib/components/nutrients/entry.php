<?php
require_once 'nutrients.inc.php';

class components_nutrients_Entry extends k_Component {
  protected $templates;
  protected $nutrients;
  protected $nutrient;
  function __construct(k_TemplateFactory $templates, Nutrients $nutrients) {
    $this->templates = $templates;
    $this->nutrients = $nutrients;
  }
  function dispatch() {
    $this->nutrient = $this->nutrients->fetch(array('id' => $this->name()));
    if (!$this->nutrient) {
      throw new k_PageNotFound();
    }
    return parent::dispatch();
  }
  function renderHtml() {
    $this->document->setTitle($this->nutrient->id());
    $t = $this->templates->create("nutrients/show");
    return $t->render($this, array('nutrient' => $this->nutrient));
  }
  function renderJson() {
    return $this->nutrient->getArrayCopy();
  }
  function renderXml() {
    $xml = new XmlWriter();
    $xml->openMemory();
    $xml->startElement('nutrient');
    foreach ($this->nutrient->getArrayCopy() as $key => $value) {
      $xml->writeElement(str_replace('_', '-', $key), $value);
    }
    $xml->endElement();
    return $xml->outputMemory();
  }
  function renderHtmlEdit() {
    $this->document->setTitle("Edit " . $this->nutrient->display_name());
    $t = $this->templates->create("nutrients/edit");
    return $t->render($this, array('nutrient' => $this->nutrient));
  }
  function putForm() {
    if ($this->processUpdate()) {
      return new k_SeeOther($this->url('../' . $this->nutrient->id()));
    }
    return $this->render();
  }
  function processUpdate() {
    $this->nutrient = new Nutrient(
      array(
        'id' => $this->nutrient->id(),
        'RefId' => $this->body('RefId'),
        'PubTypeId' => $this->body('PubTypeId'),
        'AcqTypeId' => $this->body('AcqTypeId'),
        'Title' => $this->body('Title'),
        'Authors' => $this->body('Authors'),
        'Publishr' => $this->body('Publishr'),
        'PubDate' => $this->body('PubDate'),
        'Version' => $this->body('Version'),
        'OrigLang' => $this->body('OrigLang'),
        'Languages' => $this->body('Languages'),
        'ISBN' => $this->body('ISBN'),
        'FstEdDat' => $this->body('FstEdDat'),
        'EdNo' => $this->body('EdNo'),
        'NoPages' => $this->body('NoPages'),
        'BkTitle' => $this->body('BkTitle'),
        'Editors' => $this->body('Editors'),
        'Pages' => $this->body('Pages'),
        'LgJrName' => $this->body('LgJrName'),
        'AbJrName' => $this->body('AbJrName'),
        'ISSN' => $this->body('ISSN'),
        'Volume' => $this->body('Volume'),
        'Issue' => $this->body('Issue'),
        'SeriName' => $this->body('SeriName'),
        'SeriNo' => $this->body('SeriNo'),
        'RprtTitle' => $this->body('RprtTitle'),
        'FileFrmt' => $this->body('FileFrmt'),
        'WWW' => $this->body('WWW'),
        'Medium' => $this->body('Medium'),
        'OS' => $this->body('OS'),
        'Media' => $this->body('Media'),
        'Valid' => $this->body('Valid'),
        'Remarks' => $this->body('Remarks'),
        'FoodId' => $this->body('FoodId'),
        'DateUpdated' => $this->body('DateUpdated'),
        'UpdatedBy' => $this->body('UpdatedBy'),
        'DocLink' => $this->body('DocLink')));
    return $this->nutrients->update($this->nutrient);
  }
  function renderHtmlDelete() {
    $this->document->setTitle("Delete " . $this->nutrient->display_name());
    $t = $this->templates->create("nutrients/delete");
    return $t->render($this, array('nutrient' => $this->nutrient));
  }
  function DELETE() {
    if ($this->nutrients->delete($this->nutrient)) {
      return new k_SeeOther($this->url('..'));
    }
    return $this->render();
  }
}
