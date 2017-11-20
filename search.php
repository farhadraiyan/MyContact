<?php
include "htmlcode.php";
$cw=getcwd();
define("cwd",$cw);
define("ds", DIRECTORY_SEPARATOR);
function searchdata($srch)
{
    $userinput="";
    $countsearch=0;
    if(file_exists(cwd.ds."ids"))
    {
        $handle = fopen(cwd.ds."ids", "r");// $handle you hold the file open function
        $id = fread($handle, filesize(cwd.ds."ids"));
        fclose($handle);
        $message="";

        echo "<table class='viewtable'>";
        printf("%1\$s %3\$s Picture %4\$s 
        %3\$s  First Name%4\$s
        %3\$s Last Name  %4\$s
        %3\$s Edit %4\$s
        %3\$s Delete %4\$s
        %2\$s","<tr>","</tr>","<th class='th'>","</th>");
//        %3$s Title %4$s
//    %3$s Email %4$s
//    %3$s Website %4$s
//    %3$s Cell Number %4$s
//    %3$s Home Number %4$s
//    %3$s Office Number %4$s
//    %3$s Twitter Url %4$s
//    %3$s Facebook Url %4$s
//    %3$s Comment %4$s
        for($j=1;$j<=$id;$j++)
        {
            @$alltext=file(cwd.ds."$j.txt");

            if(file_exists(cwd.ds."$j.txt"))//avoid printing empty file after deletion
            {

                for($i=0;$i<count($alltext);$i++)
                {
                    @$a=list($file_id,$t,$f,$l,$e,$w,$cell,$h,$o,$twt,$fb,$c,$p)=explode(", ",$alltext[$i]);
                    if($srch==$f||$srch==$l)
                    {
                        $countsearch++;
                        echo "<tr>";

                        echo "<td><img src='allimage/$p'></td>";
//                       echo "<td>$t</td>";
                        echo "<td>$f</td>";
                        echo "<td>$l</td>";
//                        echo "<td>$e</td>";
//                        echo "<td>$w</td>";
//                        echo "<td>$cell</td>";
//                        echo "<td>$h</td>";
//                        echo "<td>$o</td>";
//                        echo "<td>$twt</td>";
//                        echo "<td>$fb</td>";
//                        echo "<td>$c</td>";
                        echo "<td><a href='edit.php?get=$alltext[$i]'>Edit</a></td>";
                        echo "<td><input type='button'  id='del' onclick='delt($file_id)' name='Delete' value='Delete'></td>";
                        echo "</tr>";
                    }
                    else
                    {
                        $userinput=$srch;
                    }


                }

            }
        }
        echo "</table>";
        if($countsearch==0){//if search name not match show the user message
            echo "<h1>Enter a valid First name or Last name<br/>
            \"$userinput\" doesn't exist as a first name or Last name in the contact list</h1>";

        }
        echo "<br/>";
    }
}
searchdata($_POST['search']);

?>
<script>
    function delt(delid)
    {
        if(confirm("do you want to delete?"))
        {
            window.location.href='http://localhost:802/finalassignment/delete.php?get='+delid;
        }
    }

</script>
