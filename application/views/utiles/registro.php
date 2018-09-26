<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <ul>
            <?php foreach ($menu as $item): ?>
                <li><a href='<?= $item['url'] ?>'><?= $item['title'] ?></a></li>
            <?php endforeach; ?>
        </ul>
        <?php echo validation_errors(); ?>
        <?php
        echo form_open('registro/create', array('method' => 'POST'));
        echo form_label('Nombre de usuario: ');
        echo form_input('username');
        echo '<br>';
        echo form_label('Correo Electrónico: ');
        echo form_input(array('type' => 'email', 'name' => 'email'));
        echo '<br>';
        echo form_label('Contraseña: ');
        echo form_password('password');
        echo '<br>';
        echo form_label('Confirmacion de contraseña: ');
        echo form_password('password_confirm');
        echo '<br>';
        echo form_submit('submit', 'Enviar Datos!');
        echo form_close();
        ?>
        <?= isset($msg) ? $msg : ''?>
    </body>
</html>
