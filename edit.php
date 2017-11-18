
<?php
include "htmlcode.php";
$cw=getcwd();
define("cwd",$cw);
define("ds", DIRECTORY_SEPARATOR);
$alltext=$_GET['get'];
$ar=explode(", ",$alltext);
$picname=$ar[(count($ar)-1)];
if(isset($_POST['edit']))//if edit button clicked
{

    @unlink("$ar[0].txt");
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
        //fwrite($handle,$id.", ".$t.", ".$f.", ".$l.", ".$p);
        fwrite($handle,$id.", ".$t.", ".$f.", ".$l.", ".$e.", ".$s.", ".$c.", ".
            $h.", ".$o.", ".$twt.", ".$fb.", ".$comm.", ".$p);
        echo "<script>window.location.href='http://localhost:802/finalassignment/view.php?'</script>";
        fclose($handle);
    }
    getdata($ar[0],$_POST['title'],$_POST['fname'],$_POST['lname'], $_POST['email'],$_POST['site'],$_POST['cellnum']
        ,$_POST['homenum'],$_POST['officenum'],$_POST['twitter'],$_POST['facebook'],$_POST['comment'],$img);
}

?>

<form method="post" enctype="multipart/form-data">
    <h2>Create your contact here</h2>
    <label><b>Title</b></label><br/>
    <input type="text" name="title" value=<?php echo "$ar[1]"?> required /><br/><br/>
    <label><b>First Name</b></label><br/>
    <input type="text" name="fname" placeholder="First Name" value=<?php echo "$ar[2]"?> required /><br/><br/>
    <label><b>Last Name</b></label><br/>
    <input type="text" name="lname" placeholder="Last Name" value=<?php echo "$ar[3]"?> required /><br/><br/>
    <!--    <button style="width:120px; height:30px; text-align: center;" onclick="document.getElementById('getFile').click()"><b>Upload Image</b></button>-->
    <!--    <input type="file" id="getFile" name="image" accept="image/*" style="display:none"/><br/><br/>-->
    <label>Email</label><br/>
    <input type="text" name="email" placeholder="Email" value=<?php echo "$ar[4]"?> ><br/><br/>
    <label>Site</label><br/>
    <input type="text" name="site" placeholder="Site" value=<?php echo "$ar[5]"?> ><br/><br/>
    <label>Cell Number</label><br/>
    <input type="text" name="cellnum" placeholder=" Cell Number" value=<?php echo "$ar[6]"?> ><br/><br/>
    <label>Home Number</label><br/>
    <input type="text" name="homenum" placeholder="Home Number" value=<?php echo "$ar[7]"?> ><br/><br/>
    <label>Office Number</label><br/>
    <input type="text" name="officenum" placeholder="Office Number" value=<?php echo "$ar[8]"?> ><br/><br/>
    <label>Twitter url</label><br/>
    <input type="text" name="twitter" placeholder="Twitter url" value=<?php echo "$ar[9]"?> ><br/><br/>
    <label>Fcebook Url</label><br/>
    <input type="text" name="facebook" placeholder="Facebook Url" value=<?php echo "$ar[10]"?> ><br/><br/>
    <label>comment</label><br/>
    <textarea name="comment" cols="25" rows="5" ><?php echo "$ar[11]"?></textarea><br/><br/>
    <label><b>Upload Your Image (JPG, PNG)</b></label><br/><br/>
    <label id="piclbl" for="picture" class="btn">Upload</label><br/>
    <input type="file" <?php echo "$ar[11]"?> name="image" id="picture" style="visibility:hidden;" ><br/>
    <input class="create" type="submit" name="edit" value="Edit Contact">
</form>
