<h2><?php e($classif->display_name()); ?></h2>
<dl>
  <dt>M Aing Rp</dt>
  <dd><?php e($classif->MainGrp()); ?></dd>
  <dt>S Ubg Rp</dt>
  <dd><?php e($classif->SubGrp()); ?></dd>
  <dt>E Ngf Dg P</dt>
  <dd><?php e($classif->EngFdGp()); ?></dd>
  <dt>O Rigf Dg P</dt>
  <dd><?php e($classif->OrigFdGp()); ?></dd>
</dl>
<p>
  <a href="<?php e(url('', array('edit'))); ?>">Edit classif</a>
  :
  <a href="<?php e(url('', array('delete'))); ?>">Delete classif</a>
</p>
