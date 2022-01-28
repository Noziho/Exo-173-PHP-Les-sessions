<?php
session_start();
if (isset($_POST['submit'])){
    $user_color = $_POST['userColor'];
    $_SESSION['color'] = $_POST['userColor']?>

    <body style="background: <?= $user_color ?>"></body><?php
}?>
<a href="testVarSession.php">clique</a>
