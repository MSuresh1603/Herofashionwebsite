<?php 

if($_GET['type']=="contact"){
	
	$headers = ""; $message = ""; 

	$message = '<html><head><style type="text/css"> body {font:12px arial;} table{font:12px arial; width:60%;border:1px solid #ccc; border-collapse:collapse;} td{border:1px solid #ccc; border-collapse:collapse;padding:5px;}</style><body><p>Enquiry Form has been submitted through Hero Fashion Website. Please find the details as follows: </p>';
	
	
	$message .='<table><tr><td width="40%">Name :</td> <td>'.$_GET['name'].'</td></tr>';
	$message .= '<tr><td>Phone :</td> <td>'.$_GET['phone'].'</td></tr>';
	$message .= '<tr><td>Email :</td> <td>'.$_GET['email'].'</td></tr>';
	$message .= '<tr><td>Enquiry:</td> <td>'.$_GET['enquiry'].'</td></tr></table>';
	
	$message .='<p>This is system generated Email.</p></body></html>';
	
	$headers .= "From:".$_GET['email']." \r\n";
	$headers .= "Reply-to:".$_GET['email']." \r\n";
	$headers .= 'MIME-Version: 1.0' . "\r\n";
	$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
	$subject =  "Enquiry Form from Hero Fashion Website";
	$mail = mail("fibroin.in@gmail.com", $subject, $message, $headers);
	
	echo "1";
}

?>