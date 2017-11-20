<?php
include "htmlcode.php";
$cw=getcwd();
define("cwd",$cw);
define("ds", DIRECTORY_SEPARATOR);
function getId()
{
    $file_name = cwd.ds."ids";
    if (!file_exists($file_name))
    {
        touch($file_name);
        $handle = fopen($file_name, "r+");

    } else {
        $handle = fopen($file_name, "r+");
        $id = fread($handle, filesize($file_name));
        settype($id, "integer");
    }
    rewind($handle);//set the file pointer at the begining of the file
    fwrite($handle, ++$id);
    fclose($handle);
    return $id;
}
$i=getId();

$img=$_FILES['image']['name'];//i am storing my image into my server location
//var_dump($img);
$tem_nam=$_FILES['image']['tmp_name'];//storing my image into temporary location

$imagelocation=cwd.ds."allimage/";
move_uploaded_file($tem_nam,$imagelocation.$img);//moving the image from temp location  to my server
function getdata($id,$t,$f,$l,$e,$s,$c,$h,$o,$twt,$fb,$comm,$p)//getting all data from user
{
        //touch(cwd.ds."allcont.txt");
        $myFile = cwd.ds."$id.txt";
        $handle=fopen($myFile,"w");
         fwrite($handle,$id.", ".$t.", ".$f.", ".$l.", ".$e.", ".$s.", ".$c.", ".
               $h.", ".$o.", ".$twt.", ".$fb.", ".$comm.", ".$p);
         fclose($handle);
}
getdata($i,$_POST['title'],$_POST['fname'],$_POST['lname'], $_POST['email'],$_POST['site'],$_POST['cellnum']
    ,$_POST['homenum'],$_POST['officenum'],$_POST['twitter'],$_POST['facebook'],$_POST['comment'],$img);

echo "<script> alert('Your new Contact has been created successfully'); window.location.href='http://localhost:802/finalassignment/view.php?'</script>";
?>
