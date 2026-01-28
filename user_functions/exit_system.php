<?php
    setcookie('id', $id, time() + 60000000, '/');
    header('Refresh: 0; url=../');
?>