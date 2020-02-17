<?php if(isset($_POST['contactsub']))
{
	
	$name=$_POST['name'];
	$email=$_POST['email'];
	$mobilenumber=$_POST['phone'];
	$message=$_POST['message'];	
	
	
		function url(){
    if(isset($_SERVER['HTTPS'])){
        $protocol = ($_SERVER['HTTPS'] && $_SERVER['HTTPS'] != "off") ? "https" : "http";
    }
    else{
        $protocol = 'http';
    }
    return $protocol . "://" . $_SERVER['HTTP_HOST'];
}

$headers = "MIME-Version: 1.0\r\n";
  $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";  
 
		//$mailtemplate=file_get_contents($target_file);
		$mailtemplate=file_get_contents( "tirumla.html");
		//mail to user 
		
		//mail to clienttirumalasri9@gmail.com
		$mail1=mail("tirumalasri9@gmail.com","Contact Us Details","<table border='1'><tr>
    <th>Name</th>
    <td>".$name."</td>	
  </tr>
   <tr>
    <th>Emai Id</th>
    <td>".$email."</td>	
  </tr>
   <tr>
    <th>Contact Number</th>
    <td>".$mobilenumber."</td>	
  </tr>
   <tr>
    <th>Subject</th>
    <td>".$subject."</td>
  </tr>
  <tr>
    <th>Message</th>
    <td>".$message."</td>
  </tr>
</table>",$headers); 
if($mail1)
{
	mail($email,"Your Message Recieved",$mailtemplate,$headers);
	
}
 ?><script>
 //alert("successflly registered");
 window.alert("sucessfully Registerd");
window.location="http://tirumalasrija.com/";
</script>
<?php
}
else
{?>
	<script>
window.location="http://tirumalasrija.com/";
</script><?php
} 
?> 

