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
        
        <h1><?php echo $titulo ?></h1>
        <ul>
            <?php foreach ($lista as $item ): ?>
            <li><?=$item?></li>
             <?php endforeach; ?>
        </ul>
    </body>
</html>
