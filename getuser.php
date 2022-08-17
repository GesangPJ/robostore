<?php

include 'connector.php';

function GetUser($id_custom)
{
    $array= array();

    $hasil = mysqli_query("SELECT * FROM pelanggan WHERE id_custom='".$id_custom."'");

    while($row = mysqli_fetch_assoc($koneksi,$hasil))
    {
        $array['id_custom'] = $row['id_custom'];
        $array['namalengkap'] = $row['namalengkap'];
        $array['username'] = $row['username'];
        $array['email_pelanggan'] = $row['email_pelanggan'];
        $array['alamat_pelanggan'] = $row['alamat_pelanggan'];
        $array['notelp_pelanggan'] = $row['notelp_pelanggan'];
        $array['foto_profil'] = $row['foto_profil'];
    }
    return $array;
}

function GetID($user)
{
    $hasil = mysqli_query("SELECT id_custom FROM pelanggan WHERE username='".$user."'");
    while($row = mysqli_fetch_assoc($koneksi,$hasil))
    {
        return $row['id_custom'];
    }

}



?>