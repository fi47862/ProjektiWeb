<?php
include 'dbconfig.php';
$statusMsg = '';

$targetDir = "uploads/";
$fileName = basename($_FILES["file"]["name"]);
$targetFilePath = $targetDir . $fileName;
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);

if(isset($_POST["submit"]) && !empty($_FILES["file"]["name"])){
	$id = $_POST['id_lajmi'];
    $allowTypes = array('jpg','png','jpeg','gif','pdf');
    if(in_array($fileType, $allowTypes)){
        if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){
		$update = $db->query("update images set id=$id, file_name='$fileName',uploaded_on=NOW() where id=$id");
            if($update){
                $statusMsg = "The file ".$fileName. " has been updated successfully.";
            }else{
                $statusMsg = "File update failed, please try again.";
            } 
        }else{
            $statusMsg = "Sorry, there was an error update-ing your file.";
        }
    }else{
        $statusMsg = 'Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to update.';
    }
}else{
    $statusMsg = 'Please select a file to update.';
}

echo $statusMsg;

?>