<h2>New groupname</h2>
<?php print html_form_tag('post', url('', array('new'))); ?>
<?php print form_errors($groupname); ?>
<?php include('form.tpl.php'); ?>
<?php print html_form_tag_end(); ?>
