<?php
    setcookie('user', $user['username'], time() - 100, "/");
    header('Location: /');
?>
