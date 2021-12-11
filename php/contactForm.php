<?php

include("connection.php");

error_reporting(E_ALL);
ini_set('display_errors', '1');

// Validates the input
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

// if(isset($_POST['contactName']) && isset($_POST['contactEmail']) && isset($_POST['contactTelephone']) && isset($_POST['contactSubject']) && isset($_POST['contactMessage'])){
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $pdo = Connection::connect();

    try{

        $name = test_input($_POST["contactName"]);
        $email = test_input($_POST["contactEmail"]);
        $telephone = test_input($_POST["contactTelephone"]);
        $subject = test_input($_POST["contactSubject"]);
        $message = test_input($_POST["contactMessage"]);

        $query = "INSERT INTO contact (name, email, telephone, subject, message) VALUES (:name,:email,:telephone,:subject,:message)"; 
        // echo $query;
        // exit();

        $stmt = $pdo->prepare($query);   
        $stmt->bindparam(":name",$name);
        $stmt->bindparam(":email",$email);
        $stmt->bindparam(":telephone",$telephone,PDO::PARAM_INT);
        $stmt->bindparam(":subject",$subject);    
        $stmt->bindparam(":message",$message);

        $stmt->execute();

        header('Location: contact.php#enquiry-section');
        $success = "This is a test";
        exit();

    } catch(PDOException $exception){
        echo ('ERROR: ' . $exception->getMessage());
        die();
    }

    $pdo = null;
}
?>