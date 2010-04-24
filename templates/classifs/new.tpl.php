<h2>New classif</h2>
<?php print html_form_tag('post', url('', array('new'))); ?>
<?php print form_errors($classif); ?>
<?php include('form.tpl.php'); ?>
<?php print html_form_tag_end(); ?>
