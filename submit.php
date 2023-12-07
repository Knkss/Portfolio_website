<?php 

$name= $_POST['name'];  
$email= $_POST['email'];  
$subject= $_POST['subject'];  
$message= $_POST['message'];  

require("connect.php");
 

if($name==""||$email ==""||$subject ==""||$message=="")
{
 header("Location: error404.html");
exit;
}


else if(strlen($name) <3 or strlen($name) >20){
  echo "Name should be between 3 and 20 characters";
}

else if(strlen($subject) >=200){
  echo "Subject length should be less than 200";
}
else if(strlen($message) >=500){
  echo "Message length should be less than 500";
}

else{
	 try{
$data = [
    'name' => $name,
    'email' => $email,
    'subject' => $subject,
    'message' => $message
];

 	$sql = "INSERT INTO contact(name, email,subject, message) VALUES(:name, :email, :subject, :message)";
$stmt= $conn->prepare($sql);
$stmt->execute($data);

  echo 1;
} 
catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}
}





?>