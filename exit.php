<?php
    setcookie('user', $user['username'], time() - 3000, "/");
    header('Location: /');
?>
