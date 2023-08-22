<?php
// Connect to the database
$conn = mysqli_connect("localhost", "root", "", "test");


// Retrieve the image data from the database
$query = "SELECT * FROM vehicle";
try{
    $result = mysqli_query($conn, $query);
}
    catch(Exception $e)
{
    echo $e->getMessage();
        exit;
}


?>

<html>
    <head>
        <title>Popular Vehicles</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">


	    <link rel="stylesheet" href="style.css">
    </head>
    <body>
        
        <!-- vehicles section -->
        <section class="vehicles" id="vehicles1" >
	    <h1 class="heading"> popular <span>vehicles</span></h1>
    
          
       
       <?php
          while($row = mysqli_fetch_assoc($result)) {
            echo "<div class='vehicles-container'  style='display:inline-flex;  width:500px; height:400px; margin-right:-10rem; margin-bottom: 10px;'>";
            echo"<div class='box' style='width:75%; height:100%;'>";
            echo"<div class='box-img'>";echo'<img src="data:image/jpeg;base64,'.base64_encode( $row['car_image'] ).'" style="object-fit:cover;"/>';
            echo "<h2>".$row['car_no.']."</h2>";       
            echo "<h2>".$row['car_type']."</h2>";
            echo "<h2>".$row['car_rent']."</h2>";
            echo  "<a href='index.php' class='btn'>Rent Now</a>";
            echo "</div>";echo  "</div>";echo "</div>";
     
        }
        ?>
</body>
</html> 