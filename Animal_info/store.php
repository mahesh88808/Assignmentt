<?php 
 session_start();
 //insert the data
 if(isset($_POST['save'],$_POST['calc']))
{	
    $cal=$_SESSION['c'];
    $calc=$_POST['calc'];
   if($calc==$cal)
    {
		$name=$_POST["name"];
		$cat=$_POST["cat"];
        $life=$_POST["life"];

        $imgname=$_FILES['image']['name'];//name of the image
		$tmpname=$_FILES['image']['tmp_name'];
        $target = "./photo/$name";//image storing address
        if(!file_exists($target)){
            mkdir($target,0775,true);
        } 
        $target=$target.basename("$imgname");
		//$ext=array("image/jpeg","PNG","JPG");
			$c=move_uploaded_file($tmpname,$target);
       // echo $name;echo $cat;echo $img;echo $life;	
        $desc=$_POST['desc'];
        if($c){
        $conn=mysqli_connect("localhost","root","","animal"); //Databse connection
        $sql="INSERT INTO `animal_info`(`name`,`category`,`image`,`description`,`life`) VALUES('$name','$cat','$target','$desc','$life')";	
        if(mysqli_query($conn,$sql))
					
					{
					echo "<script>alert('successfully inserted')
					window.location='anilmal_listing.php'</script>";
					
					}
                    else{echo"field to insert";}
        }
        else{echo "image upload field";}	



    }
    else{
        echo"<script>alert('calculation is incorrect')
        window.location='project.php'</script>";
        
        exit();
    }
}
	
?>		