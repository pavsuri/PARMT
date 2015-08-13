<html>
<head>
<title>My Form</title>
</head>
<body bgcolor="#BDB76B">
<h3 align="center">Welcome to Admin Page</h3>
<?php echo validation_errors();?>
<?php echo form_open('admin'); ?>

<table align="center">
<tr>
<td>
<?php echo form_label('Adminname') ?>
</td>
<td>
<?php echo form_input('adminname') ?>
</td>
</tr>
<tr>
<td>
<?php echo form_label('Password:') ?>
</td>
<td>
<?php echo form_password('password') ?>
</td>
</tr>
</table>
<div align="center">
<?php echo form_submit('submit','LogIn') ?>
</div>
</form>
</body>
</html>