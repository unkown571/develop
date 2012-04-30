<?php
/**
 * This is the upload process program.
 */
if ($_FILES['userfile']['error'] > 0) {
    echo 'Error: ' . $_FILES['userfile']['error'] . '<br />';
} else {
    echo 'Upload: ' . $_FILES['userfile']['name'] . '<br />';
    echo 'Type: ' . $_FILES['userfile']['type'] . '<br />';
    echo 'Size: ' . ($_FILES['userfile']['size'] / 1024) . ' Kb<br />';
    echo 'Stored in: ' . $_FILES['userfile']['tmp_name'] . '<br />';

    /* make sure there is a 'upload/' dir in your system */
    if (file_exists('upload/' . $_FILES['userfile']['name'])) {
        echo $_FILES['userfile']['name'] . ' already exists. ';
    } else {
        move_uploaded_file($_FILES['userfile']['tmp_name'],
            'upload/' . $_FILES['userfile']['name']);
        echo 'Stored in: ' . 'upload/' . $_FILES['userfile']['name'];
    }
}
?>
