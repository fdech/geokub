<?php
    setcookie('user', $user['username'], time() - 10000, "/");
    header('Location: /');
?>
