
<?php
include "htmlcode.php";
$cw=getcwd();
define("cwd",$cw);
define("ds", DIRECTORY_SEPARATOR);
if(file_exists(cwd.ds."ids"))
{
    $handle = fopen(cwd.ds."ids", "r");// $handle you hold the file open function
    $id = fread($handle, filesize(cwd.ds."ids"));
    fclose($handle);
            echo "<table class='viewtable'>";
            printf("%1\$s %3\$s Picture %4\$s          
        %3\$s  First Name%4\$s
        %3\$s Last Name  %4\$s
        %3\$s Edit %4\$s
        %3\$s Delete %4\$s
        %2\$s","<tr>","</tr>","<th class='th'>","</th>");
//    %3$s Title %4$s
//%3$s Email %4$s
//%3$s Website %4$s
//%3$s Cell Number %4$s
//%3$s Home Number %4$s
//%3$s Office Number %4$s
//%3$s Twitter Url %4$s
//%3$s Facebook Url %4$s
//%3$s Comment %4$s
    for($j=1;$j<=$id;$j++)
    {
        @$alltext=file(cwd.ds."$j.txt");
        if(file_exists(cwd.ds."$j.txt"))//avoid printing empty file after deletion
        {
            for($i=0;$i<count($alltext);$i++)
            {
                @$a=list($file_id,$t,$f,$l,$e,$w,$cell,$h,$o,$twt,$fb,$c,$p)=explode(", ",$alltext[$i]);

                echo "<tr>";
                //this if else has logical error, need to fix this
//                if($e=="")
//                {
//                    $e="not provided";
//                }
//                elseif($w=="")
//                {
//                    $w="not provided";
//                }
//                elseif($c=="")
//                {
//                    $c="not provided";
//                }
//                elseif($h=="")
//                {
//                    $h="not provided";
//                }
//                elseif($o=="")
//                {
//                    $o="not provided";
//                }
//                elseif($twt=="")
//                {
//                    $twt="not provided";
//                }
//                elseif($fb=="")
//                {
//                    $fb="not provided";
//                }


                echo "<td><img src='allimage/$p'></td>";
//                echo "<td>$t</td>";
                echo "<td>$f</td>";
                echo "<td>$l</td>";
//                echo "<td>$e</td>";
//                echo "<td>$w</td>";
//                echo "<td>$cell</td>";
//                echo "<td>$h</td>";
//                echo "<td>$o</td>";
//                echo "<td>$twt</td>";
//                echo "<td>$fb</td>";
//                echo "<td>$c</td>";
                echo "<td><a href='edit.php?get=$alltext[$i]'>Edit</a></td>";//create a unique link with unique id by get method
                echo "<td><input type='button'  id='del' onclick='delt($file_id)' name='Delete' value='Delete'></td>";
                //echo "<td><a href='delete.php?get=$alltext[$i]'>delete</a></td>";
                echo "</tr>";
                //$multiarray[$i]=$a;
            }
        }
    }
    echo "</table>";
    echo "<br/>";

}

?>
<script>
    function delt(delid)//onclick calling this function if confirm return true it willgo
    // the delete.php file with specific id with  the url, so that i can delete that specific contact

    {
        if(confirm("do you want to delete?"))
        {
            window.location.href='http://localhost:802/finalassignment/delete.php?get='+delid;
        }
    }

</script>