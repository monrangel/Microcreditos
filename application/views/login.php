<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie_edge">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

        <title></title>
    </head>
    <body>
        <?=  validation_errors();?>
        <?=  form_error('email');?>
        <div class="container">
            <div class="row justify-content-lg-center">
                <div class="col-lg-6">
                    <form id="frm_login" action="<?= base_url('login/validate')?>" method="POST">
                        <div class="form-group">
                            <h1>Login</h1>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Correo</label>
                            <input type="email" name="email" class="form-control is_invalid" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ingrese su e-mail ejemplo@mail.com">
                            <div class="invalid-feedback">
                                
                            </div>
                            <small id="emailHelp" class="form-text text-muted">Ingrese su email.</small>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Contraseña</label>
                            <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Ingrese su contraseña...">
                        </div>
                        <button type="submit" class="btn btn-primary">Ingresar</button>

                    </form>
                </div>
            </div>
        </div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="<?=base_url('assets/js/login.js')?>"></script>
    </body>
</html>
