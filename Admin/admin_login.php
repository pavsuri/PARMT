<html>
<head>
<title>Shruti Admin Login Page</title>
</head>
<body bgcolor="#BDB76B">
    <h3 align="center">Admin Login</h3>

    <?php echo validation_errors();?>
    <?php if (isset($result)) echo $result; ?>
    <?php echo form_open('admin'); ?>

    <table align="center">
        <tr>
            <td><?php echo form_label('User Name:') ?></td>
            <td><?php echo form_input('adminUserName', set_value('adminUserName')) ?></td>
        </tr>
        <tr>
            <td><?php echo form_label('Password:') ?></td>
            <td><?php echo form_password('password') ?></td>
        </tr>
        <tr>
            <td rowspan="2"><?php echo form_submit('submit', 'LogIn') ?></td>
        </tr>
    </table>

    <?php echo form_close(); ?>
</body>
</html>