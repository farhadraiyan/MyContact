<?php
include "htmlcode.php";
$cw=getcwd();
define("cwd",$cw);
define("ds", DIRECTORY_SEPARATOR);
$str=$_GET['get'];
$bool=false;
if(file_exists(cwd.ds."$str.txt"))
{
    $bool=true;
    @unlink("$str.txt");


}
if($bool==true)
{
    echo "<script>alert('File has been deleted sucessfully');</script>";
    echo "<script>window.location.href='http://localhost:802/finalassignment/view.php?'</script>";
}
?>


