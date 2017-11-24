<?php
include "htmlcode.php";

?>

<div class="contactpage">
    <form method="post" action="Contact.php" enctype="multipart/form-data">
        <h2>Create a New Contact</h2><br/><br/><br/><br/><br/><br/>
        <label>Title</label><label id="requiredstar">*</label><br/><br/>
        <input type="text" name="title" placeholder="Add a Title for the Contact"  size="40" required/><br/><br/>
        <label>Name </label><label id="requiredstar">*</label><br/><br/>
        <input type="text" name="fname" placeholder="First Name" size="20" required/>
        <input type="text" name="lname" placeholder="Last Name" size="20" required/><br/><br/>
        <!--    <button style="width:120px; height:30px; text-align: center;" onclick="document.getElementById('getFile').click()"><b>Upload Image</b></button>-->
        <!---->
        <!--    <input type="file" id="getFile" name="image" accept="image/*" style="display:none"/><br/><br/>-->


        <label>Email</label><br/><br/>
        <input type="text" name="email" placeholder="Email"/><br/><br/>
        <label>Website</label><br/><br/>
        <input type="text" name="site" placeholder="Site"/><br/><br/>
        <label>Cell Number</label><br/><br/>
        <input type="text" name="cellnum" placeholder=" Cell Number"/><br/><br/>
        <label>Home Number</label><br/><br/>
        <input type="text" name="homenum" placeholder="Home Number"/><br/><br/>
        <label>Office Number</label><br/><br/>
        <input type="text" name="officenum" placeholder="Office Number"/><br/><br/>
        <label>Twitter url</label><br/><br/>
        <input type="text" name="twitter" placeholder="Twitter url"/><br/><br/>
        <label>Fcebook Url</label><br/><br/>
        <input type="text" name="facebook" placeholder="Facebook Url"/><br/><br/>
        <label>Comment</label><br/><br/>
        <textarea name="comment" cols="60" rows="10"></textarea><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
        <label>Upload Your Image (JPG, PNG)</label><br/><br/>
        <label id="piclbl" for="picture" class="btn">Upload</label><br/>
        <input type="file" name="image" id="picture" style="visibility:hidden;" ><br/><br/><br/>
        <input class="create" type="submit" name="create" value="Create Contact"><br/><br/>

    </form>

</div>


