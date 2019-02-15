<?php
/*Noy and Aline*/

    require_once("shoeClass.php");
    require_once("storeClass.php");
    require_once("home.html");

 /*insert the data from Fields to data base and cheack if all Fields is fill*/
    if(isset($_POST['id_item']) && (!is_numeric($_POST['id_item'])))/*if id not correct or  not exist*/
	{
        echo "<p>please enter right Id item</p>";
    }
	else if(isset($_POST['id_item']) && (shoe::checkId($_POST['id_item'])))/*cheak if item already exist*/
	{
        echo "<p>Id: ".$_POST['id_item'].";  is already exist</p>";
    }
	else if(isset($_POST['price_item']) && (!is_numeric($_POST['price_item'])))/*if price not correct or not exists */
	{
        echo "<p>please enter right item</p>";
    }
	else if((isset($_POST['id_item'])&&($_POST['id_item']!= null))&&(isset($_POST['model_item'])&&($_POST['model_item'] != null))&&(isset($_POST['price_item'])&&($_POST['price_item'] != null))&&(isset($_POST['nameOfStore'])&& ($_POST['nameOfStore'] != null))){
       /*cheak all fields fill and put the in varibles*/
	   $id = $_POST['id_item'];
        $model= $_POST['model_item'];
        $price = $_POST['price_item'];
        $s_name= $_POST['nameOfStore']; 
        
        $shoe = new shoe();
        $shoe->insert($id, $model, $price);

        $someStore = new store();
        $someStore->insert($id, $s_name);/*insert to name of store*/
        echo "<br><p>insert sucsses</p><br> 
              id: $id, model: $model, price: $price, Store Name: $s_name</p>";
    }
	else
	{
		/*if all fields not fill*/
        echo "<p>please enter all fields</p>";
    }

   /*delete the item from data base*/
    if(isset($_POST['_idDel'])){
        $shoe = new shoe();
        $shoe->delete($_POST['_idDel']);
        echo "<p>
            Succses Delete<br> shoe:<br><br>;".$_POST['_idDel']."</p>";
    }
?>
<html>
<head>
<meta charset="utf-8">
        <title>Shoes Store</title>
		<!--link to css-->
        <link href="styles/s.css" rel="stylesheet" type="text/css">
</head>
<body>
<br>

<pre>Insert Shoes to Store</pre>
<form action="" method="post"><br><br><p>
    Id &#160;<input type="text" name="id_item" placeholder="id"><br><br>
    Model &#160; <input type="text" name="model_item" placeholder="model"><br><br>
    Price &#160; <input type="text" name="price_item" placeholder="price"><br><br>
    Store &#160;<input type="text" name="nameOfStore" placeholder="Store Name"><br><br>
</p>
    <input type="submit" value="Add Shoes">
</form> 

<div class="_del"><br>
    <pre>Delete Shoes from Store</pre><br><br>
    <form action="" method="post">
	<p>
        item Id <input type="text" name="_idDel" placeholder="id"><br><br>
	</p>
        <input type="submit" value="Delete Shoes">
    </form>
</div>
<br>
<br>
<br>
</body>
</html>

