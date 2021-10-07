
<style>.serif {
  font-family: "Times New Roman", Times, serif;
  color:blue;
  background-color: lightgrey;
  font-size:30px;
}
.fakeimg2 {
  background-color: #f9f6f6;
  width: 100%;
  padding: 2px;
  border-radius: 25px;
}

.button{
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  font-size: 15px;
}
<head>
<style>
		#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}
.bg{
     background-image: url("{% static 'img/paddy2.jpg'%}");
     height: 100%;
    background-position: center;
    background-repeat: no-repeat;
    background-size: 100%;
     }
#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}
#customers td{
color:orangered;
font-weight: bold;
}

#customers tr:nth-child(even){background-color: }

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #1a6692;
  color: white;
}
</style>
</style>

</head>


<center>
        <?php $conn=mysqli_connect("localhost","root","","animal"); 
        $sel="select * from visitor";
        $s=mysqli_query($conn,$sel);
        while($v=$s->fetch_assoc()){
          $vis=$v['visitor'];
          //echo"visitors count=".$vis;
        }
        $visit="update visitor set visitor=$vis+1";
        $r=mysqli_query($conn,$visit);
        
        ?>
        
		<p class="serif"><b>Animal Listing</b></p></center>visitors count=<?php echo $vis; ?><br><br>
        <div class="fakeimg2" style="height:"><br>
        <div class="bg">
          <link rel="stylesheet" href="dist/sortable-tables.min.css">
          <script src="dist/sortable-tables.min.js"></script>
       
					<table class="sortable-table" id="customers">
                        <center>
			<form method="post" action="" enctype="multipart/form-data" >
    <thead>
      <tr>
        <th>Animal Name</th>
		<th>Category</th>
		<th>Image</th>
		<th>Description</th>
        <th>Life expectancy</th>
      </tr>
    </thead>
        
                <?php // view data in table
                $sql="select * from animal_info";
                $res=mysqli_query($conn,$sql);
			    if(mysqli_num_rows($res)>0) 
                {
              				$flag=1;
            				
            				while($row = $res->fetch_assoc()) 
                            {			
								echo "<tbody><tr><td>".$row['name']."</td>";
				                echo "<td>".$row['category']."</td> "; ?>
								<td><img src="<?php echo $row['image']; ?>" width="100" height="100"></td>;
                                <?php
                                echo "<td>".$row['description']."</td>";
                                echo "<td>".$row['life']."</td></tr></tbody>";
                                
                            }
                    }
                    else{echo"No record found";}
                    
                    
                ?>
                </table>

          