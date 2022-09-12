<?php  
if (isset($_post['submit'])){
    $name = $_post['name'];
    $email = $_post['email'];
    $subject = $_post['subject'];
    $message = $_post['message'];


    $mailTo = "djalmas@dj-techs.com";
    $headers = "From: ".$mailFrom;
    $txt = "you have recived an e-mail from ".$name.".\n\n".$message;


    mail($mailTo,$subject,$txt,$headers);
    header("Location: contact.html?mailsend");
}
if(empty($_POST["name"])) {
    $name_error = "name is required";
}

?>