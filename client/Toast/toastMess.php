<?php

function showMessage($sessionKey, $type = 'success')
{
    if (isset($_SESSION[$sessionKey])) {
        echo '<script type="text/javascript">
        toastr.' . $type . '("' . $_SESSION[$sessionKey] . '")
        </script>';
        unset($_SESSION[$sessionKey]);
    }
}
