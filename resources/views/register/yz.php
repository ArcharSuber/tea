
<?php
    //必须开启session
    session_start();
    if ($_POST['yzm'] != $_SESSION['code']) {
        # code...
        echo 1;
    } else {
        echo 0;
    }
 ?>