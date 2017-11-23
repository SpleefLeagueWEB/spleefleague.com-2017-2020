<?php
require "config.php";

if ($hEnabled === true) {
    if ($hType === "Success") {
        echo "<div class='alert alert-success'> <strong>" . $hBold . "</strong>" . $hMessage . "</div>";
        return;
    }


    if ($hType === "Info") {
        echo "<div class='alert alert-info'> <strong>" . $hBold . "</strong>" . $hMessage . "</div>";
        return;
    }


    if ($hType === "Warning") {
        echo "<div class='alert alert-warning'> <strong>" . $hBold . "</strong>" . $hMessage . "</div>";
        return;
    }


    if ($hType = "Danger") {
        echo "<div class='alert alert-danger'> <strong>" . $hBold . "</strong>" . $hMessage . "</div>";
        return;
    }
}