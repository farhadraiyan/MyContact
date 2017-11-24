<?php
include "css.php";
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Contact</title>
</head>
<body >
<div id="div1">
    <a href="index.php">Create New Contact</a>
    <a href="view.php">View all Contacts</a>

</div>
<div id="div2" >
    <form action="search.php" method="post">
        <input size="50" id="searchinput" class="src" type="text" name="search" placeholder="Search by First or Last Name"/>
        <input id="s" class="src" type="submit" value="search"/>
    </form>
</div>

</body>
</html>