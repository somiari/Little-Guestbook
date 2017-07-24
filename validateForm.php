<?php 

function validateForm ($data) {
    $data = trim(stripslashes(htmlspecialchars($data)));
    return $data;
}

?>
