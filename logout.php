<?php 
if(!isset($_POST['destroy'])){
  
}
else{
  session_start();
  session_destroy();
  header('Location: ' . $_SERVER['HTTP_REFERER']);
}
?>