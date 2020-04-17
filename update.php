<?php

require 'db.php';

$db = new Database();
$update = $db->update('masyarakat', [
    'nama_lengkap'      => 'Siti',
    'username'    => 'marlina18',
    'password'      => 'marlinmarlin',
    'tlp'       => '08990987898',
], ['id_user' => 10]);

if ( $update > 0 ) {
    // Data berhasil diubah
    echo "Data berhasil diubah";
} else {
    echo mysqli_error($db->connect());
}