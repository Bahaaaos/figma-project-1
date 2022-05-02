<?php
$arr=array(
    'first'=>'one',
    'second'=>'two',
    'third'=>'three',
    'fourth'=>'four',
    'fifth'=>'five',
    'sixth'=>'six',
    'seventh'=>'seven',
    'eightth'=>'eight',
    'ninth'=>'nine',
    'tenth'=>'then'
);
$_POST['mail'];
$name=$_POST['name'];
$mail=$_POST['mail'];
$id=$_POST['id'];
$name1=$_GET['name'];
$mail1=$_GET['mail'];
$id1=$_GET['id'];
if (isset($_POST['submit'])){
    echo 'hello world'; 
    echo 'hello ' . $_POST['name'];

}
$_SESSION['name'];
$session=$_SESSION['name'];
$_SESSON['name']=$_POST['name'];
echo ' hello '. $_SESSION['name'];
$arr2=array(
    '0'=>'one',
    '1'=>'tow',
    '2'=>'three',
    '3'=>'four',
    '4'=>'five',
    '5'=>'six',
    '6'=>'seven'
);
echo '<pre>';

print_r($arr2);
echo '</pre>';
$_SESSION['name'];
$_SESSION['username']=$_POST['username'];
$_SESSION['name']=$_POST['name'];
$_SESSION['mail']=$_GET['mail'];
