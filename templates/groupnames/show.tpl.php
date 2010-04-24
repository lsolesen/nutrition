<h2><?php e($groupname->display_name()); ?></h2>
<dl>
  <dt>M Aing Rp</dt>
  <dd><?php e($groupname->MainGrp()); ?></dd>
  <dt>N Amedk</dt>
  <dd><?php e($groupname->NameDK()); ?></dd>
  <dt>N Amee N</dt>
  <dd><?php e($groupname->NameEn()); ?></dd>
</dl>
<p>
  <a href="<?php e(url('', array('edit'))); ?>">Edit groupname</a>
  :
  <a href="<?php e(url('', array('delete'))); ?>">Delete groupname</a>
</p>
