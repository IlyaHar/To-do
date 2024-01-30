<?php

function notify() {
    if (isset($_COOKIE['err_task']))
    echo "<div class='alert alert-danger'>$_COOKIE[err_task]</div>";
    elseif (isset($_COOKIE['success_task']))
    echo "<div class='alert alert-success'>$_COOKIE[success_task]</div>";
    elseif (isset($_COOKIE['del_task']))
    echo "<div class='alert alert-warning'>$_COOKIE[del_task]</div>";
}