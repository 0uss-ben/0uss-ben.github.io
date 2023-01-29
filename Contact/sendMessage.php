<?php
require("../connection/connection.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
            $contactFullName=htmlspecialchars($_POST['contactFullName']);
            $organisationName = htmlspecialchars($_POST['organisationName']);
            $phoneNumber = htmlspecialchars($_POST['phoneNumber']);
            $contactMail = htmlspecialchars($_POST['contactMail']);
            $contactObject = htmlspecialchars($_POST['contactObject']);
            $conn = &connection();

             $stmt = sqlsrv_query($conn, "INSERT INTO Contact(contactFullName,organisationName,phoneNumber,contactMail,contactObject) VALUES('$contactFullName','$organisationName','$phoneNumber','$contactMail','$contactObject')");
            



            if($stmt === false)  
            {  
                echo "Error in query preparation/execution.\n";
                die(print_r(sqlsrv_errors(), true));
            }  
            else
            {
                header('location:contact.php');
            }


            
        }
    sqlsrv_close($conn);
?>