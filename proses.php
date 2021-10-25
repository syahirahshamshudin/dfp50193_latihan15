<?php
/*
$nama = test_input($_POST['nama']);
echo "[$nama]";
function test_input($data) 
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
*/

$kata = $_POST['kata'];

if (strlen($kata) <6) {
    echo 'Maaf, kata laluan terlalu pendek';
} elseif( ... ){
    #mesti ada huruf besar
    #mesti ada huruf kecil
    #mesti ada nombor
    #mesti ada simbol
} else {
    echo 'Kata laluan diterima';
}
