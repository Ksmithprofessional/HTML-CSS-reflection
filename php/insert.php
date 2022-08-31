<?php 

include 'emails-db.php';

$error1 = "";
$error2 = "";

    if(isset($_POST['submit'])) {


        // filter input, escape output!
        $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
        $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
        $company = filter_input(INPUT_POST, 'company', FILTER_SANITIZE_STRING);
        $phone = filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_NUMBER_INT);
        $subject = filter_input(INPUT_POST, 'subject', FILTER_SANITIZE_STRING);
        $message = filter_input(INPUT_POST, 'message', FILTER_SANITIZE_STRING);

        if(isset($_POST["marketing"])) {

            $marketing = 'on';
        } else {

            $marketing = 'off';
        }; 


        if(!isset($_POST["subject"]) && !isset($_POST["phone"]) && !isset($_POST["message"]) && isset($_POST["name"]) && isset($_POST["email"])) {
        
            $sql = "INSERT INTO emails (full_name, email_address, marketing) VALUES ('$name', '$email', '$marketing')";
            if (mysqli_query($conn, $sql)) {
                $error2 = "Thank you for signing up to the newsletter!";
            } else {
                echo "Error: " . $sql . ":-" . mysqli_error($conn);
            }
        
            $conn->close();

        } 
        
        if(isset($_POST["subject"]) && isset($_POST["phone"]) && isset($_POST["message"]) && isset($_POST["name"]) && isset($_POST["email"])) {

            $sql = "INSERT INTO queries (name, company, email_address, phone_no, subject, message, marketing) VALUES ('$name', '$company', '$email', '$phone', '$subject', '$message', '$marketing')";
            if (mysqli_query($conn, $sql)) {
                $error1 = "Thank you for your query!";
            } else {
                echo "Error: " . $sql . ":-" . mysqli_error($conn);
            }
    
            $conn->close();

        }
    }
