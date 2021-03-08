<?php

    if ($_POST['del'])
    {
        $delete = $_POST['del'];
        unlink($delete);
        return http_response_code(200);
    }
    else
    {
        return http_response_code(400);
    }

?>