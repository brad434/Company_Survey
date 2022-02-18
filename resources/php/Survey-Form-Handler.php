<?php
    $name = $_POST['Name'];
    $department = $_POST['Deptt'];
    $Comments = $_POST['Comments'];
    $exercise = $_POST['exe'];
    $Topic = $_POST['topic'];
    $MovieGenre = $_POST['moviepref'];


    $email_from = 'Bradley434@hotmail.com';

    $email_subject = "New Form Submission";

    $email_body = "User Name: $Name.\n".
                    "User Department: $department.\n".
                        "User Message: $Comments.\n".
                            "User Exercise: $exercise.\n".
                                "User Topic: $Topic.\n".
                                    "User Genre: $MovieGenre.\n";



    $to = "bchery618@gmail.com";

    $headers = "From: $email_from \r\n";

    //$headers = "Reply-To: $Name \r\n";

    mail($to,$email_subject,$email_body,$headers);

    header("Location: index.html");

?>