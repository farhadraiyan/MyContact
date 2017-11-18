<?php
include "htmlcode.php";

?>


<form method="post" action="Contact.php" enctype="multipart/form-data">
    <h2>Create your contact here</h2>
    <label><b>Title</b></label><br/>
    <input type="text" name="title" required/><br/><br/>
    <label><b>First Name</b></label><br/>
    <input type="text" name="fname" placeholder="First Name" required/><br/><br/>
    <label><b>Last Name</b></label><br/>
    <input type="text" name="lname" placeholder="Last Name" required/><br/><br/>
<!--    <button style="width:120px; height:30px; text-align: center;" onclick="document.getElementById('getFile').click()"><b>Upload Image</b></button>-->
<!---->
<!--    <input type="file" id="getFile" name="image" accept="image/*" style="display:none"/><br/><br/>-->


    <label>Email</label><br/>
    <input type="text" name="email" placeholder="Email"/><br/><br/>
    <label>Site</label><br/>
    <input type="text" name="site" placeholder="Site"/><br/><br/>
    <label>Cell Number</label><br/>
    <input type="text" name="cellnum" placeholder=" Cell Number"/><br/><br/>
    <label>Home Number</label><br/>
    <input type="text" name="homenum" placeholder="Home Number"/><br/><br/>
    <label>Office Number</label><br/>
    <input type="text" name="officenum" placeholder="Office Number"/><br/><br/>
    <label>Twitter url</label><br/>
    <input type="text" name="twitter" placeholder="Twitter url"/><br/><br/>
    <label>Fcebook Url</label><br/>
    <input type="text" name="facebook" placeholder="Facebook Url"/><br/><br/>
    <label>comment</label><br/>
    <textarea name="comment" cols="25" rows="5"></textarea><br/><br/>
    <label><b>Upload Your Image (JPG, PNG)</b></label><br/><br/>
    <label id="piclbl" for="picture" class="btn">Upload</label><br/>
    <input type="file" name="image" id="picture" style="visibility:hidden;" ><br/>
    <input class="create" type="submit" name="create" value="Create Contact">

</form>


