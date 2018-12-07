<?php



$textarea = $_POST['text'];
define('GW_UPLOADPATH', 'js/');
define ('GW_MAX_FILE_SIZE', '500');
$words = $_FILES['words']['name'];
$words_type = $_FILES['words']['type'];
$words_size = $_FILES['words']['size'];


  
?>





<form method="post"> 

<textarea name="text" id="text" cols="70" rows="40"> 


  
<?php 
if($_POST)	{
	file_put_contents("js/words.json", $textarea);

} 
echo file_get_contents('js/words.json'); 
?> 
</textarea> 
<input id="submit" type="submit" value="SAGLABAT"  > 

</form>

<a href='e.php'><button class="btn" id="modifywheel" onclick="e.php" >Atpakal uz riteni</button> </a>



