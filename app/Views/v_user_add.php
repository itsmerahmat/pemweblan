<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create User</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 500px;
            margin: 50px auto;
            padding: 30px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            margin-bottom: 30px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        input,
        textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
            font-size: 16px;
        }

        .btn {
            display: block;
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 3px;
            font-size: 16px;
            cursor: pointer;
        }

        .btn:hover {
            background-color: #0056b3;
        }

        .error {
            color: red;
            margin-bottom: 10px;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Create User</h1>
        <?php echo form_open('form/save', 'id="latihanForm"'); ?>

        <div class="form-group">
            <?php echo form_label('Username', 'username'); ?>
            <?php echo form_input(array('id' => 'username', 'name' => 'username')); ?>
            <?php if (isset($validation) && $validation->hasError('username')): ?>
                <div class="error"><?php echo $validation->getError('username'); ?></div>
            <?php endif; ?>
        </div>

        <div class="form-group">
            <?php echo form_label('Email', 'email'); ?>
            <?php echo form_input(array('type' => 'email', 'id' => 'email', 'name' => 'email')); ?>
            <?php if (isset($validation) && $validation->hasError('email')): ?>
                <div class="error"><?php echo $validation->getError('email'); ?></div>
            <?php endif; ?>
        </div>

        <div class="form-group">
            <?php echo form_label('Password', 'password'); ?>
            <?php echo form_password(array('id' => 'password', 'name' => 'password')); ?>
            <?php if (isset($validation) && $validation->hasError('password')): ?>
                <div class="error"><?php echo $validation->getError('password'); ?></div>
            <?php endif; ?>
        </div>

        <div class="form-group">
            <?php echo form_label('Confirm Password', 'confirm-password'); ?>
            <?php echo form_password(array('id' => 'confirm-password', 'name' => 'confirm-password')); ?>
            <?php if (isset($validation) && $validation->hasError('confirm-password')): ?>
                <div class="error"><?php echo $validation->getError('confirm-password'); ?></div>
            <?php endif; ?>
        </div>

        <div class="form-group">
            <?php echo form_label('Display Name', 'display-name'); ?>
            <?php echo form_input(array('id' => 'display-name', 'name' => 'display-name')); ?>
            <?php if (isset($validation) && $validation->hasError('display-name')): ?>
                <div class="error"><?php echo $validation->getError('display-name'); ?></div>
            <?php endif; ?>
        </div>

        <div class="form-group">
            <?php echo form_label('Name', 'name'); ?>
            <?php echo form_input(array('id' => 'name', 'name' => 'name')); ?>
            <?php if (isset($validation) && $validation->hasError('name')): ?>
                <div class="error"><?php echo $validation->getError('name'); ?></div>
            <?php endif; ?>
        </div>

        <div class="form-group">
            <?php echo form_label('Nickname', 'nickname'); ?>
            <?php echo form_input(array('id' => 'nickname', 'name' => 'nickname')); ?>
            <?php if (isset($validation) && $validation->hasError('nickname')): ?>
                <div class="error"><?php echo $validation->getError('nickname'); ?></div>
            <?php endif; ?>
        </div>

        <div class="form-group">
            <?php echo form_label('Website', 'website'); ?>
            <?php echo form_input(array('id' => 'website', 'name' => 'website')); ?>
            <?php if (isset($validation) && $validation->hasError('website')): ?>
                <div class="error"><?php echo $validation->getError('website'); ?></div>
            <?php endif; ?>
        </div>

        <div class="form-group">
            <?php echo form_label('Bio', 'bio'); ?>
            <?php echo form_textarea(array('id' => 'bio', 'name' => 'bio', 'rows' => '3')); ?>
            <?php if (isset($validation) && $validation->hasError('bio')): ?>
                <div class="error"><?php echo $validation->getError('bio'); ?></div>
            <?php endif; ?>
        </div>

        <?php echo form_submit('submit', 'CREATE AND ACCESS', 'class="btn"'); ?>

        <?php echo form_close(); ?>
    </div>
</body>

</html>