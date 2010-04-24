<h2><?php e($source->display_name()); ?></h2>
<dl>
  <dt>S Ourcer Efi D</dt>
  <dd><?php e($source->SourceRefId()); ?></dd>
  <dt>S Ourceid</dt>
  <dd><?php e($source->SourceID()); ?></dd>
  <dt>R Efi D</dt>
  <dd><?php e($source->RefId()); ?></dd>
</dl>
<p>
  <a href="<?php e(url('', array('edit'))); ?>">Edit source</a>
  :
  <a href="<?php e(url('', array('delete'))); ?>">Delete source</a>
</p>
