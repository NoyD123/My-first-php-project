<?php
/*Aline and Noy*/

    require_once("storeClass.php");
    require_once("home.html");
    
    echo "<main><br><br>";
    $someStore = new store();
    $someStore->myEcho();

/*return all brands products*/
    if(isset($_POST['allPro'])){
        $someStore->getAllInfo();
    }

/*return data about spesific item*/
    if(isset($_POST['storeId'])){
        $someStore->getInfoById($_POST['storeId']);
    }

/*insert all items to file*/
    if(isset($_POST['report'])){
        $someStore->createFile();
    }
    
    echo "</main>";
?> 
<!-- form -->
<h1>Show Items on our store</h1><br><br><br>
<form action="" method="post">              
     Brand Id&#160;&#160;
    <input type="text" name="storeId" placeholder="Search By id"><br><br><br>
    <input type="submit" value="Search By Id">
    <br><br>
    <input type="submit" name="allPro" value="Show All Products">
     <br><br>
    <input type="submit" name="report" value="Save To File"><br><br><br><br>
</form>
