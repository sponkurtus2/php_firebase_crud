<?php
session_start();
include('dbcon.php');


if (isset($_POST['delete_btn'])) {
    $del_id = $_POST['delete_btn'];

    $ref_table = 'contacts/'.$del_id;
    $deletequery_result = $database->getReference($ref_table)->remove();

    if ($deletequery_result) {
        $_SESSION['status'] = "Se borro el usuario :)";
        header('Location: index.php');
    } else {
        $_SESSION['status'] = "No se borro el usuario :(";
        header('Location: index.php');
    }
}


if (isset($_POST['update_contact'])) {
    $key = $_POST['key'];
    $first_name = $_POST['first_name'];
    $email = $_POST['email'];
    $age = $_POST['age'];

    $updateData = [
        'fname'=>$first_name,
        'email'=>$email,
        'age'=>$age,
    ];
    $ref_table = 'contacts/'.$key;
    $updatequery_result = $database->getReference($ref_table)->update($updateData);

    if ($updatequery_result) {
        $_SESSION['status'] = "Se actualizo el usuario :)";
        header('Location: index.php');
    } else {
        $_SESSION['status'] = "No se actualizo el usuario :(";
        header('Location: index.php');
    }
}


if(isset($_POST['save_contact'])) {
    $first_name = $_POST['first_name'];
    $email = $_POST['email'];
    $age = $_POST['age'];

    $postData = [
        'fname'=>$first_name,
        'email'=>$email,
        'age'=>$age,
    ];

    $ref_table = "contacts";
    $postRef_result = $database->getReference($ref_table)->push($postData);

    if ($postRef_result) {
        $_SESSION['status'] = "Se agrego el usuario :)";
        header('Location: index.php');
    } else {
        $_SESSION['status'] = "No se agrgego el usuario :(";
        header('Location: index.php');
    }
}

?>