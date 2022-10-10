<?php
function upload_video(){
    $extension = explode(".", $_FILES['videos']['name']);
    $new_name = rand() .".".$extension[1];
    $destination = './videos/'.$new_name;
    move_uploaded_file($_FILES['videos']['tmp_name'],$destination);
    return $new_name;
}
