<?php 
/*Noy and Aline*/

    require_once("home.html"); 
    require_once("brandsclass.php");

    $brand = new brandsclass();
    $a = array();

	
	/*when we got the serial and description we update*/
    if(isset($_POST['_serial'])&& isset($_POST['_description']))
	{
		 $a = $brand->update($_POST['_serial'], $_POST['_description']);
     $brand->slider($a[0]['description'], $a[1]['description'],$a[2]['description'],$a[3]['description']);
       
    }
	else{
      
		echo "<p>please fill the fields serial and description to update data:</p>";
	    $a = $brand->update("","");
        $brand->slider($a[0]['description'], $a[1]['description'],$a[2]['description'],$a[3]['description']);
    
	}
?>
<!-- form fields -->
<br><br><br>
<h1>data about brand's item</h1><br><br>
<form action="" method="post">  
<p>            
    Item Id
    <input type="text" name="_serial" placeholder="Enter Id"><br><br><br>
    Description
    <input type="text" name="_description" placeholder="Enter New Description"><br><br><br>
	</p>
    <input type="submit" name="_update" value="Press Me To Change Description">
</form> 
<br>
<br>
<br>
<br>

<!-- code java script slider -->
<script>
    var slideIndex = 1;
    showSlides(slideIndex);

    function plusSlides(n) {
      showSlides(slideIndex += n);
    }

    function currentSlide(n) {
      showSlides(slideIndex = n);
    }

    function showSlides(n) {
      var i;
      var slides = document.getElementsByClassName("mySlides");
      var dots = document.getElementsByClassName("dot");

      if (n > slides.length) {
          slideIndex = 1
      } 

      if (n < 1) {
          slideIndex = slides.length
      }

      for (i = 0; i < slides.length; i++) {
          slides[i].style.display = "none"; 
      }

      for (i = 0; i < dots.length; i++) {
          dots[i].className = dots[i].className.replace(" active", "");
      }

      slides[slideIndex-1].style.display = "block"; 
      dots[slideIndex-1].className += " active";
    }
</script>