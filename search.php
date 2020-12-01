<?php

    $conn = new mysqli("localhost", "root", "","site");
    $conn->set_charset("utf8");
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    // Barre de Recherche
    $key = $_POST["cle"];
    $sql = "SELECT * FROM supervisor WHERE (fullname LIKE '".$key."%')";
    $result = $conn->query($sql);
    $data = array();

    while($row = $result->fetch_assoc()){
        $data[] = $row;
    }
    echo json_encode($data);

?>