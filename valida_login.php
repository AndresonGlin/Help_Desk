<?php

    //informação sendo recuperada do lado do servidor
    session_start();

    $autenticacao = false;
    $usuarios = [
        array('email' => 'izabel@gmail.com', 'senha' => '123'),
        array('email' => 'andreson@gmail.com', 'senha' => 'abc')
    ];


    foreach($usuarios as $user){
        //echo 'Usuario já cadastro: ' . $user['email'] . ' / ' . $user['senha'];
        //echo '<br>';
        //echo 'Recebendo usuario: ' . $_POST['email'] . ' / ' . $_POST['senha'];

        // echo '<hr>';

        if($user['email'] == $_POST['email']  && $user['senha'] == $_POST['senha']) {
            $autenticacao = true;
        }
    }

    //autenticacao_login
    if($autenticacao) {
        echo 'Usuario Autenticado';
        header('Location: home.php');
        $_SESSION['autenticado'] = 'SIM';
    } else {
        $_SESSION['autenticado'] = 'NAO';      
        header('Location: index.php?login=erro');
        
    }
?> 