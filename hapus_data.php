<?php
session_start();
    include ('koneksi.php');

    $id = $_POST['id'];

    $query = "DELETE FROM `datasiswanya` WHERE `id` = ?";
    $prepare1 = $db1->prepare($query);
    $prepare1->bind_param("i",$id);
    $prepare->execute();

    echo json_encode(['success'=>'Sukses']);

    $db1->close();

?>
