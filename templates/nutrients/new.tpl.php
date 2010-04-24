<h2>New nutrient</h2>
<?php print html_form_tag('post', url('', array('new'))); ?>
<?php print form_errors($nutrient); ?>
<?php include('form.tpl.php'); ?>
<?php print html_form_tag_end(); ?>
