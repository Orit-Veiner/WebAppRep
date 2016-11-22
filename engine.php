<?php

function send_message($user, $msg) {
    $file = 'data.txt';

    $current_data = file_get_contents($file);

    $format = date("y-m-d h:i:s")." (".$user.") : ";
    $current_data .= $format.$msg."\n";

    // write the contents back to the file.
    file_put_contents($file, $current_data);

    return $current_data;
}


function clear_conversation() {
    $file = 'data.txt';
    file_put_contents($file, "");
}


?>