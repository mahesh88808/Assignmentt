
<style>.serif {
  font-family: "Times New Roman", Times, serif;
  color:blue;
  background-color: lightgrey;
  font-size:30px;
}
.fakeimg2 {
  background-color: #f9f6f6;
  width: 100%;
  padding: 50px;
  border-radius: 20px;
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

<html>
  <head><title>Animal Info</title></head>
  <body>
	<center>

		<p class="serif"><b>Animal Information</b></p></center><br><br>
        <div class="fakeimg2" style="height:"><br>
        <div class="bg">
					<table id="customers">
                        <center>
			<form method="post" action="store.php" enctype="multipart/form-data" >
            <tbody>
            <tr>
             <th>Name of the Animal</th>
              <td> <input type="text" name="name" required="required" pattern="^[A-Za-z -]+$"/>
              </td>
            </tr>
            <tr>
            <th>Category</th>
           <td>
            <select name="cat" >
              <option value="herbivores">herbivores</option>
              <option value="omnivores">omnivores</option>
              <option value="carnivores">carnivores</option>
            </select>
            </td></tr>
            <tr><th>Image</th>
            <td>
              <input type="file" name="image"  />
              </td>
          </tr>
          <tr><th>Description</th>
        <td><textarea name="desc"></textarea></td></tr>
        <tr>
        <th>Life Expectancy</th>
        <td><select name="life" >
              <option value="0-1">0-1</option>
              <option value="1-5">1-5</option>
              <option value="5-10">5-10</option>
              <option value="10+">10+</option>
            </select></td>
        </tr>
        <tr>
        <th>  <?php 
                  session_start();
                 $a=mt_rand(1,10);
                $b=mt_rand(1,10);
                echo $a."+".$b;
                $c=$a+$b;
                $_SESSION['c']=$c;
          ?></th>
          <td><input type="text" name="calc" required="required" ></td>
        </tr>
			<td><input  type="submit" name="save" class="button" value="Submit"></div>
		 </td>
</center>
      </tr>
    </tbody>
	</form></table>
	<tbody>	
  </table>
</body>
</html>



