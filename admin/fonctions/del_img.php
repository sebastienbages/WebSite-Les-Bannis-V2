<?php

    if ($_POST['del'])
    {
        $delete = $_POST['del'];
        unlink($delete);
        http_response_code(200);
    }
    else
    {
        http_response_code(400);
    }

?>