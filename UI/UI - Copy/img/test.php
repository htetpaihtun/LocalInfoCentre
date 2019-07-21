<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
  <style type="text/css">
  .button {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
  background-color: grey; 
  border-radius: 8px;
  color: white;
  padding: 15px 30px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
.button1 {
  width: 40px;
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
  background-color: grey; 
  border-radius: 8px;
  color: white;
  padding: 15px 30px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
.disabled {
  opacity: 0.6;
  cursor: not-allowed;
}
</style>

<h2 align="center">Clover Hotel</h2><br>
<div align="center">
<img src="crec.jpg" align="left"><br><br><br><br></div>
<p>
This trendy hotel is the ideal place to enjoy a relaxed stay in Yangon, eat good Myanmar food, or sip a cocktail whilst admiring the breathtaking views of Shwedagon Pagoda. From here, you can conveniently visit attractions such as Kandawgyi Lake, Inya Lake, Ngar Htet Gyi Pagoda, etc.

The Clover Restaurant on the 7th Floor is the place to experience a melting pot of delicious cuisines! Treat yourself to our Asian Cuisines in Chinese, Thai & Malaysian styles, or our European & Western specialties.
 
Enjoy your meals with your loved ones, or have tea, coffee or drinks with friends in a relaxed ambience, whilst enjoying the panoramic views of the stunning Shwedagon Pagoda.

</p>
<br><br><br><br>

 <h2 align="center">Rooms
  <img src = "croom1.jpg">
  
  <img src="croom2.jpg"></h2>

<br><br><br><br><br><br>
    <h3 align="center">Book Now</h3>
<div align="center">
<button  type="button" class="button" onclick="myFunction(this)">R1</button>
<button  type="button" class="button" onclick="myFunction(this)">R2</button>
<button  type="button" class="button" onclick="myFunction(this)">R3</button>
<button  type="button" class="button" onclick="myFunction(this)">R4</button>
<button  type="button" class="button" onclick="myFunction(this)">R5</button>
<button  type="button" class="button" onclick="myFunction(this)">R6</button><br><br>
<button  type="button" class="button" onclick="myFunction(this)">S1</button>
<button  type="button" class="button" onclick="myFunction(this)">S2</button>
<button  type="button" class="button" onclick="myFunction(this)">S3</button>
<button  type="button" class="button" onclick="myFunction(this)">S4</button>
<button  type="button" class="button" onclick="myFunction(this)">S5</button>
<button  type="button" class="button" onclick="myFunction(this)">S6</button><br><br>
<button  type="button" class="button" onclick="myFunction(this)">T1</button>
<button  type="button" class="button" onclick="myFunction(this)">T2</button>
<button  type="button" class="button" onclick="myFunction(this)">T3</button>
<button  type="button" class="button" onclick="myFunction(this)">T4</button>
<button  type="button" class="button" onclick="myFunction(this)">T5</button>
<button  type="button" class="button" onclick="myFunction(this)">T6</button><br><br>

<p>
  

  <div align="center">
  <button type="button" class="button1">R</button> -for 2 men rooms<br>
 
  <button type="button" class="button1">S</button> -for 3 men rooms<br>
  
  <button type="button" class="button1">T</button> -for family rooms<br>
  

</div>

</p>


<br>



<div class="container">
  <h2 align="left">Register</h2>
  <p align="left">Register who you are when you choone your booking!!!!!</p>
   <form action="/action_page.php">
      <div class="form-group" align="left">
        <label for="email" align = "left">Email:</label>
        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
      </div>
      <div class="form-group" align="left">
        <label for="phno" align = "left">Ph-number:</label>
        <input type="Ph-number" class="form-control" id="phno" placeholder="Enter Ph-number" name="Ph-number">
      </div>
      <div class="form-group" align="left">
        <label for="pwd" align = "left">Password:</label>
        <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
      <br><br>
         
  <label>No: of night</label>
 <select>
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
</select>

 <label>Adult</label>
 <select>
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
</select>

 <label>Childern</label>
 <select>
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
</select>
    

 
  

 
  
      <div class="checkbox" align="left">
        <label><input type="checkbox" name="remember"> Remember me</label>
      </div>
      <button type="submit" class="btn btn-default">Submit</button>
    <br><br><br><br><br><br><br>
  </form>
</div>
</div>
<script>
  function myFunction(btn)
  {
    btn.style.background="red";
  }
</script>
</body>
</html>
