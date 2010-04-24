<?php
require_once 'foodinfos.inc.php';

class components_foodinfos_Entry extends k_Component {
  protected $templates;
  protected $foodinfos;
  protected $foodinfo;
  function __construct(k_TemplateFactory $templates, Foodinfos $foodinfos) {
    $this->templates = $templates;
    $this->foodinfos = $foodinfos;
  }
  function dispatch() {
    $this->foodinfo = $this->foodinfos->fetch(array('id' => $this->name()));
    if (!$this->foodinfo) {
      throw new k_PageNotFound();
    }
    return parent::dispatch();
  }
  function renderHtml() {
    $this->document->setTitle($this->foodinfo->id());
    $t = $this->templates->create("foodinfos/show");
    return $t->render($this, array('foodinfo' => $this->foodinfo));
  }
  function renderJson() {
    return $this->foodinfo->getArrayCopy();
  }
  function renderXml() {
    $xml = new XmlWriter();
    $xml->openMemory();
    $xml->startElement('foodinfo');
    foreach ($this->foodinfo->getArrayCopy() as $key => $value) {
      $xml->writeElement(str_replace('_', '-', $key), $value);
    }
    $xml->endElement();
    return $xml->outputMemory();
  }
  function renderHtmlEdit() {
    $this->document->setTitle("Edit " . $this->foodinfo->display_name());
    $t = $this->templates->create("foodinfos/edit");
    return $t->render($this, array('foodinfo' => $this->foodinfo));
  }
  function putForm() {
    if ($this->processUpdate()) {
      return new k_SeeOther($this->url('../' . $this->foodinfo->id()));
    }
    return $this->render();
  }
  function processUpdate() {
    $this->foodinfo = new Foodinfo(
      array(
        'id' => $this->foodinfo->id(),
        'FoodId' => $this->body('FoodId'),
        'DanName' => $this->body('DanName'),
        'ProdName' => $this->body('ProdName'),
        'EngName' => $this->body('EngName'),
        'SysName' => $this->body('SysName'),
        'MainGrp' => $this->body('MainGrp'),
        'SubGrp' => $this->body('SubGrp'),
        'Waste' => $this->body('Waste'),
        'NCF' => $this->body('NCF'),
        'FACF' => $this->body('FACF'),
        'PEF' => $this->body('PEF'),
        'FEF' => $this->body('FEF'),
        'CEF' => $this->body('CEF'),
        'Density' => $this->body('Density'),
        'Remarks' => $this->body('Remarks'),
        'PublStatus' => $this->body('PublStatus'),
        'LanguaL' => $this->body('LanguaL'),
        'GRIN' => $this->body('GRIN'),
        'FISHBASE' => $this->body('FISHBASE'),
        'BASIS' => $this->body('BASIS'),
        'USDA' => $this->body('USDA'),
        'FIFood' => $this->body('FIFood'),
        'UKFood' => $this->body('UKFood'),
        'FRFood' => $this->body('FRFood'),
        'DEFood' => $this->body('DEFood'),
        'SEFood' => $this->body('SEFood'),
        'NOFood' => $this->body('NOFood'),
        'NLFood' => $this->body('NLFood'),
        'ISFood' => $this->body('ISFood'),
        'SPFood' => $this->body('SPFood'),
        'ITFood' => $this->body('ITFood'),
        'DateUpdated' => $this->body('DateUpdated'),
        'UpdatedBy' => $this->body('UpdatedBy'),
        'Recipe' => $this->body('Recipe'),
        'WaterYield' => $this->body('WaterYield'),
        'FatYield' => $this->body('FatYield')));
    return $this->foodinfos->update($this->foodinfo);
  }
  function renderHtmlDelete() {
    $this->document->setTitle("Delete " . $this->foodinfo->display_name());
    $t = $this->templates->create("foodinfos/delete");
    return $t->render($this, array('foodinfo' => $this->foodinfo));
  }
  function DELETE() {
    if ($this->foodinfos->delete($this->foodinfo)) {
      return new k_SeeOther($this->url('..'));
    }
    return $this->render();
  }
}
