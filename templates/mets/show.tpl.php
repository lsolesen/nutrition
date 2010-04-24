<h2><?php e($met->display_name()); ?></h2>
<dl>
  <dt>Category</dt>
  <dd><?php e($met->category()); ?></dd>
  <dt>Value</dt>
  <dd><?php e($met->value()); ?></dd>
  <dt>Name</dt>
  <dd><?php e($met->name()); ?></dd>
</dl>
<p>
  <a href="<?php e(url('', array('edit'))); ?>">Edit met</a>
  :
  <a href="<?php e(url('', array('delete'))); ?>">Delete met</a>
</p>
