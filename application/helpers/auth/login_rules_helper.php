<?php

function getLoginRules(){
    return array(
        array(
                'field' => 'email',
                'label' => 'Correo',
'rules' => 'required|trim',
            'errors' => array(
                        'required' => 'El correo es requerido.',
                ),
        ),
        array(
                'field' => 'password',
                'label' => 'Password',
                'rules' => 'required',
                'errors' => array(
                        'required' => 'El %s es requerido.',
                ),
        ),
        
);
}