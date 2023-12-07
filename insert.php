
<?php 

  
$arr = array("John", "Jane", "Mary", "James", "Emily", "Michael", "Sarah", "Jessica", "Jacob", "Mohammed", "Emma", "Daniel", "Olivia", "David", "Sophia", "Lucas", "Mia", "Matthew", "Amelia", "Ethan");

require("connect.php");
 

{
	 try{

	 	for ($i = 1; $i <= 20; $i++) {

$key = array_rand($arr);

$data = [
    'name' => $arr[$key],
    'email' => 'mailabc'.$i.'@gmail.com',
    'subject' => 'subject'.$i,
    'message' => 'Ultrices gravida dictum fusce ut. Libero justo laoreet sit amet cursus sit amet.'
];

 	$sql = "INSERT INTO contact(name, email,subject, message) VALUES(:name, :email, :subject, :message)";
$stmt= $conn->prepare($sql);
$stmt->execute($data);

}

  echo 1;
} 
catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}
}





?>