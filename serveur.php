<?php
$conn = mysqli_connect("localhost", "root", "","test") or die("Connection failed: " . $conn->connect_error);
$conn->set_charset("utf8");
 // Check connection
 /*if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}*/



if(isset($_POST['submit'])){
    $name = $_POST['fullname_s'];
    //$day = $_POST['day'];
    //$sex = $_POST['gender'];
    //$activites = $_POST['activity_opt'];
    $motivation = $_POST['motivation'];

    $req = $conn->execute("INSERT INTO participant (fullname,motivation) VALUES ('$name','$motivation')");
    //$sql = mysqli_query($conn,$req);
    //$sql->execute();
    

    /*$data = 'INSERT INTO member VALUES (NULL,:name_user,:date_user,:gender_user,:activity_user,:motivation_user)';
    //$req_run = mysqli_query($conn,$data);
    $affect = bindValue(':name_user',$_POST[$name], PDO::PARAM_STR);
    $affect = bindValue(':date_user',$_POST[$day], PDO::PARAM_STR);
    $affect = bindValue(':gender_user',$_POST[$sex], PDO::PARAM_STR);
    $affect = bindValue(':activity_user',$_POST[$activites], PDO::PARAM_STR);
    //$req_r = $conn->prepare($affect);*/

    //$req_1 = $affect->execute();


    /*if($req_1){
        echo("Enregistrement partiel effectué");
    }
    else{
        echo("Echec de l'insertion");
    };*/


}



?>
