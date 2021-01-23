<?php

    require 'fb.php';

    if (!isset($_SESSION['fb_access_token']) && empty($_SESSION['fb_access_token'])) {
        header('Location: login.php');
    }

    $response = $fb->get('/me?fields=email,name,id', $_SESSION['fb_access_token']);

    $result = json_decode($response->getBody());

    echo '<pre>';
    print_r($result);

?>
<br>
<a href="sair.php">Sair</a>