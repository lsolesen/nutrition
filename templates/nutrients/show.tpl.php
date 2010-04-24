<h2><?php e($nutrient->display_name()); ?></h2>
<dl>
  <dt>R Efi D</dt>
  <dd><?php e($nutrient->RefId()); ?></dd>
  <dt>P Ubt Ypei D</dt>
  <dd><?php e($nutrient->PubTypeId()); ?></dd>
  <dt>A Cqt Ypei D</dt>
  <dd><?php e($nutrient->AcqTypeId()); ?></dd>
  <dt>T Itle</dt>
  <dd><?php e($nutrient->Title()); ?></dd>
  <dt>A Uthors</dt>
  <dd><?php e($nutrient->Authors()); ?></dd>
  <dt>P Ublishr</dt>
  <dd><?php e($nutrient->Publishr()); ?></dd>
  <dt>P Ubd Ate</dt>
  <dd><?php e($nutrient->PubDate()); ?></dd>
  <dt>V Ersion</dt>
  <dd><?php e($nutrient->Version()); ?></dd>
  <dt>O Rigl Ang</dt>
  <dd><?php e($nutrient->OrigLang()); ?></dd>
  <dt>L Anguages</dt>
  <dd><?php e($nutrient->Languages()); ?></dd>
  <dt>Isbn</dt>
  <dd><?php e($nutrient->ISBN()); ?></dd>
  <dt>F Ste Dd At</dt>
  <dd><?php e($nutrient->FstEdDat()); ?></dd>
  <dt>E Dn O</dt>
  <dd><?php e($nutrient->EdNo()); ?></dd>
  <dt>N Op Ages</dt>
  <dd><?php e($nutrient->NoPages()); ?></dd>
  <dt>B Kt Itle</dt>
  <dd><?php e($nutrient->BkTitle()); ?></dd>
  <dt>E Ditors</dt>
  <dd><?php e($nutrient->Editors()); ?></dd>
  <dt>P Ages</dt>
  <dd><?php e($nutrient->Pages()); ?></dd>
  <dt>L Gj Rn Ame</dt>
  <dd><?php e($nutrient->LgJrName()); ?></dd>
  <dt>A Bj Rn Ame</dt>
  <dd><?php e($nutrient->AbJrName()); ?></dd>
  <dt>Issn</dt>
  <dd><?php e($nutrient->ISSN()); ?></dd>
  <dt>V Olume</dt>
  <dd><?php e($nutrient->Volume()); ?></dd>
  <dt>I Ssue</dt>
  <dd><?php e($nutrient->Issue()); ?></dd>
  <dt>S Erin Ame</dt>
  <dd><?php e($nutrient->SeriName()); ?></dd>
  <dt>S Erin O</dt>
  <dd><?php e($nutrient->SeriNo()); ?></dd>
  <dt>R Prtt Itle</dt>
  <dd><?php e($nutrient->RprtTitle()); ?></dd>
  <dt>F Ilef Rmt</dt>
  <dd><?php e($nutrient->FileFrmt()); ?></dd>
  <dt>Www</dt>
  <dd><?php e($nutrient->WWW()); ?></dd>
  <dt>M Edium</dt>
  <dd><?php e($nutrient->Medium()); ?></dd>
  <dt>Os</dt>
  <dd><?php e($nutrient->OS()); ?></dd>
  <dt>M Edia</dt>
  <dd><?php e($nutrient->Media()); ?></dd>
  <dt>V Alid</dt>
  <dd><?php e($nutrient->Valid()); ?></dd>
  <dt>R Emarks</dt>
  <dd><?php e($nutrient->Remarks()); ?></dd>
  <dt>F Oodi D</dt>
  <dd><?php e($nutrient->FoodId()); ?></dd>
  <dt>D Ateu Pdated</dt>
  <dd><?php e($nutrient->DateUpdated()); ?></dd>
  <dt>U Pdatedb Y</dt>
  <dd><?php e($nutrient->UpdatedBy()); ?></dd>
  <dt>D Ocl Ink</dt>
  <dd><?php e($nutrient->DocLink()); ?></dd>
</dl>
<p>
  <a href="<?php e(url('', array('edit'))); ?>">Edit nutrient</a>
  :
  <a href="<?php e(url('', array('delete'))); ?>">Delete nutrient</a>
</p>
