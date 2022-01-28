<?php
session_start();
if (isset($_SESSION['color'])) {?>
    <body style="background: <?= $_SESSION['color'] ?>"></body><?php
}