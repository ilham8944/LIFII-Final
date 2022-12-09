<?php
    include 'connect.php';

    $no = $_GET['no'];

    $sql ='DELETE FROM rdpu WHERE no = "'.$no.'"';

    $result = mysqli_query($conn, $sql);  

    if ($result){
        header('Location: ../admin/tables.php');
    }else {
        echo('Deleted Failed');
    }
?>
