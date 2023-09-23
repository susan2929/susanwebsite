<?php
if (isset($_POST['added'])){
    // Database connection
    $server = "localhost";
    $username = "root";
    $password = "";
    $dbname = "hiring";

    // Create a connection
    $conn = mysqli_connect($server, $username, $password, $dbname);


    // Getting data from the form
    $name = $_POST["name"];
    $phone_number = $_POST["number"];
    $email = $_POST["email"];
    $url = $_POST["url"];
    $company_name = $_POST["cname"];
    $budget = $_POST["budget"];

    // SQL query to insert data into the 'hire' table
    $sql = "INSERT INTO `hire` (`name`, `phone_number`, `email`, `url`, `company_name`, `budget`) VALUES ('$name', '$phone_number', '$email', '$url', '$company_name', '$budget')";

    // Execute the SQL query
  $result=mysqli_query($conn,$sql);

  if(!$result){
echo"<script>alert('Error in storing data..!!')</script>";
  }
else{
  echo"<script>alert('Data is stored in database..!')</script>";
}
  }
?>



<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="style.css">
  <title>hire form</title>
</head>

<body>
<div class="hell">

<div class="nav">
  <ul>
    <li><a href="index.php">home</a></li>
  </ul>
</div>

<div class="logo">
  <img src="logo 2.PNG">

</div>

</div>
  <div class="hiring">

    <div id="hire">

      <h1><span>want to</span> hire me</h1>
      <p>please fill up the form</p>

      <form method="POST" action="">

      <div class="part1">
        
        <input type="text" placeholder="your name" name ="name"><br><br>


        <input type="number" placeholder="your phone number" name ="number"><br><br>
      </div>

      <div class="part2">
        <input type="email" placeholder="your email" name="email"><br><br>


        <input type="text" placeholder="your website url" name="url"><br><br>
      </div>


      <div class="part3">
        <input type="text" placeholder="your company name" name="cname"><br><br>



        <select name ="budget" >
          <option>budget range</option>
          <option>10$-50$</option>
          <option>50$-100$</option>
          <option>100$-250$</option>
          <option>250$-500$</option>
          <option>500$-1000$</option>

        </select><br><br>
      </div>


      <div class="btn7">
       <input type="submit" value="submit" name="added">
       <input type="button" value="reset" onclick="reset()">
      </div>

</form>
    </div>



    <div class="touch">
      <p>i will be in touch as soon as possible!</p>
    </div>



  </div>
</body>

<script>
  //function to check wheather the form is empty or not and saving it!!
  function submit(){
    let a =document.getElementById("name").value;
    let b =document.getElementById("number").value;
    let c =document.getElementById("email").value;
    let d =document.getElementById("url").value;
    let e =document.getElementById("cname").value;
    let f =document.getElementById("budget").value;
 let g= f;
    if(a == "" || b == "" || c == "" || d == "" || e == "" || f == ""){
      alert("fill up the form first!");
    }
    else{
      alert("data transfer successfully!")
    }
  }
  //function to reset the data in the form
  function reset(){
    document.getElementById("name").value = "";
    document.getElementById("number").value = "";
    document.getElementById("email").value = "";
    document.getElementById("url").value = "";
    document.getElementById("cname").value = "";
    document.getElementById("budget").innerhtml= "budget range" ;
  }
  </script>

</html>