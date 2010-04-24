<h2><?php e($foodinfo->display_name()); ?></h2>
<dl>
  <dt>F Oodi D</dt>
  <dd><?php e($foodinfo->FoodId()); ?></dd>
  <dt>D Ann Ame</dt>
  <dd><?php e($foodinfo->DanName()); ?></dd>
  <dt>P Rodn Ame</dt>
  <dd><?php e($foodinfo->ProdName()); ?></dd>
  <dt>E Ngn Ame</dt>
  <dd><?php e($foodinfo->EngName()); ?></dd>
  <dt>S Ysn Ame</dt>
  <dd><?php e($foodinfo->SysName()); ?></dd>
  <dt>M Aing Rp</dt>
  <dd><?php e($foodinfo->MainGrp()); ?></dd>
  <dt>S Ubg Rp</dt>
  <dd><?php e($foodinfo->SubGrp()); ?></dd>
  <dt>W Aste</dt>
  <dd><?php e($foodinfo->Waste()); ?></dd>
  <dt>Ncf</dt>
  <dd><?php e($foodinfo->NCF()); ?></dd>
  <dt>Facf</dt>
  <dd><?php e($foodinfo->FACF()); ?></dd>
  <dt>Pef</dt>
  <dd><?php e($foodinfo->PEF()); ?></dd>
  <dt>Fef</dt>
  <dd><?php e($foodinfo->FEF()); ?></dd>
  <dt>Cef</dt>
  <dd><?php e($foodinfo->CEF()); ?></dd>
  <dt>D Ensity</dt>
  <dd><?php e($foodinfo->Density()); ?></dd>
  <dt>R Emarks</dt>
  <dd><?php e($foodinfo->Remarks()); ?></dd>
  <dt>P Ubls Tatus</dt>
  <dd><?php e($foodinfo->PublStatus()); ?></dd>
  <dt>L Angual</dt>
  <dd><?php e($foodinfo->LanguaL()); ?></dd>
  <dt>Grin</dt>
  <dd><?php e($foodinfo->GRIN()); ?></dd>
  <dt>Fishbase</dt>
  <dd><?php e($foodinfo->FISHBASE()); ?></dd>
  <dt>Basis</dt>
  <dd><?php e($foodinfo->BASIS()); ?></dd>
  <dt>Usda</dt>
  <dd><?php e($foodinfo->USDA()); ?></dd>
  <dt>Fif Ood</dt>
  <dd><?php e($foodinfo->FIFood()); ?></dd>
  <dt>Ukf Ood</dt>
  <dd><?php e($foodinfo->UKFood()); ?></dd>
  <dt>Frf Ood</dt>
  <dd><?php e($foodinfo->FRFood()); ?></dd>
  <dt>Def Ood</dt>
  <dd><?php e($foodinfo->DEFood()); ?></dd>
  <dt>Sef Ood</dt>
  <dd><?php e($foodinfo->SEFood()); ?></dd>
  <dt>Nof Ood</dt>
  <dd><?php e($foodinfo->NOFood()); ?></dd>
  <dt>Nlf Ood</dt>
  <dd><?php e($foodinfo->NLFood()); ?></dd>
  <dt>Isf Ood</dt>
  <dd><?php e($foodinfo->ISFood()); ?></dd>
  <dt>Spf Ood</dt>
  <dd><?php e($foodinfo->SPFood()); ?></dd>
  <dt>Itf Ood</dt>
  <dd><?php e($foodinfo->ITFood()); ?></dd>
  <dt>D Ateu Pdated</dt>
  <dd><?php e($foodinfo->DateUpdated()); ?></dd>
  <dt>U Pdatedb Y</dt>
  <dd><?php e($foodinfo->UpdatedBy()); ?></dd>
  <dt>R Ecipe</dt>
  <dd><?php e($foodinfo->Recipe()); ?></dd>
  <dt>W Atery Ield</dt>
  <dd><?php e($foodinfo->WaterYield()); ?></dd>
  <dt>F Aty Ield</dt>
  <dd><?php e($foodinfo->FatYield()); ?></dd>
</dl>
<p>
  <a href="<?php e(url('', array('edit'))); ?>">Edit foodinfo</a>
  :
  <a href="<?php e(url('', array('delete'))); ?>">Delete foodinfo</a>
</p>
