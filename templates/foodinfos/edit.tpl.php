<h2>Edit <?php e($foodinfo->display_name()); ?></h2>
<?php print html_form_tag('put', url('', array('edit'))); ?>
<?php print form_errors($foodinfo); ?>
<?php include('form.tpl.php'); ?>
<?php print html_form_tag_end(); ?>
