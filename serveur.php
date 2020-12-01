<?php

    $conn = new mysqli("localhost", "root", "","site");
    $conn->set_charset("utf8");
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $key = $_POST["cle"];
    $sql = "SELECT * FROM activity WHERE (activityname LIKE '".$key."%')";
    //echo $sql;
    $result = $conn->query($sql);
    $data = array();

    while($row = $result->fetch_assoc()){
        $data[] = $row;
    }
    echo json_encode($data);

?>