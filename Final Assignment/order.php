

<head>
    
    <!-- BOotstrap CCSS GO$ES HERE -->
    <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="style.css">
      <style>

  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
      width: 70%;
      margin: auto;
  }

  </style>
</head>

<body>


<div id="container">
    <div id="header">
        <img src="logo.png" width="400px">
    </div>


<center>
<div class="container">
<a href="index.html" class="classname">Home</a>
<a href="cupcake.html" class="classname">Cupcakes</a>
<a href="order.html" class="classname">Order</a>
<a href="about.html" class="classname">About</a>
<a href="contact.html" class="classname">Contact Us</a>
<a href="Login.html" class="classname">Login</a>


<br />
<br />
<br />

<div class="container-fluid text-center">
  <h2><font color="#1ec1f4">ORDER ONLINE</h2>
  <h4>What we offer</h4>
  <br>
  <div class="row">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-heart logo-small"></span>
      <h4>LOW-CALORIE</h4>
      <p></p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-leaf logo-small"></span>
      <h4>VEGAN</h4>
      <p></p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-tree-deciduous logo-small"></span>
      <h4>GLUTEN FREE</h4>
    </div>
  </div>
</div>

<br />
<br />
<div style="background-color:#e1f7fd; border-radius = 20px; color:white; padding:20px;">

<center>
<h2><font color="#1ec1f4">YOUR ORDER</h2>
  <h4>Choose your Location..</h4>
 </center>
 
 <div class="form-group">
  <label for="sel1"></label>
<label class="radio-inline"><input type="radio" name="optradio">Coventry</label>
<label class="radio-inline"><input type="radio" name="optradio">Birmingham</label>
<label class="radio-inline"><input type="radio" name="optradio">Liverpool</label>
<label class="radio-inline"><input type="radio" name="optradio">Manchester</label>
<label class="radio-inline"><input type="radio" name="optradio">New York</label>
<label class="radio-inline"><input type="radio" name="optradio">Cardiff</label>
<label class="radio-inline"><input type="radio" name="optradio">Rome</label>


<br />
<br />
<center>
    <h2><font color="#1ec1f4">3 Cupcake Bundle</h2>
  <h4><font color="#1ec1f4">Choose your First Cupcakes..</h4>
 </center>

 <div class="form-group">
  <label for="sel1">Select your first Cupcake:</label>
  <select class="form-control" id="sel1">
    <option>Dark Chocolate</option>
    <option>Vanilla Swirl</option>
    <option>Kiwi Cake</option>
    <option>M&M Chocolate</option>
    <option>Oreo Special</option>
    <option>Coffee Cake</option>
    <option>Strawberry & Cream</option>
    <option>Toffee & Nut</option>
    <option>Lemon Cupcake</option>
    <option>Orange Delight</option>
    <option>BubbleGum</option>
     <option>Bannana Melt</option>
  </select>
</div>

<br />
<center>
  <h4><font color="#1ec1f4">Choose your Second Cupcakes..</h4>
 </center>

 <div class="form-group">
  <label for="sel1">Select your first Cupcake:</label>
  <select class="form-control" id="sel1">
    <?php
         $servername = getenv('IP');
         $username = getenv('C9_USER');
         $password = "";
         $database = "cupcake";
         $dbport = 3306;
        echo getenv('IP');
        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        } 
        
        $sql = "SELECT cupcake_type FROM cupcakes";
        $result = $conn->query($sql);
        
        echo "Result" .$result. "";

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "hello ";
    }
} else {
    echo "0 results";
}

mysqli_close($conn);
?>
<!--    <option>Dark Chocolate</option>-->
<!--    <option>Vanilla Swirl</option>-->
<!--    <option>Kiwi Cake</option>-->
<!--    <option>M&M Chocolate</option>-->
<!--    <option>Oreo Special</option>-->
<!--    <option>Coffee Cake</option>-->
<!--    <option>Strawberry & Cream</option>-->
<!--    <option>Toffee & Nut</option>-->
<!--    <option>Lemon Cupcake</option>-->
<!--    <option>Orange Delight</option>-->
<!--    <option>BubbleGum</option>-->
<!--     <option>Bannana Melt</option>-->
  </select>
</div>

<br />
<center>
  <h4><font color="#1ec1f4">Choose your Last Cupcakes..</h4>
 </center>

 <div class="form-group">
  <label for="sel1">Select your first Cupcake:</label>
  <select class="form-control" id="sel1">
    <option>Dark Chocolate</option>
    <option>Vanilla Swirl</option>
    <option>Kiwi Cake</option>
    <option>M&M Chocolate</option>
    <option>Oreo Special</option>
    <option>Coffee Cake</option>
    <option>Strawberry & Cream</option>
    <option>Toffee & Nut</option>
    <option>Lemon Cupcake</option>
    <option>Orange Delight</option>
    <option>BubbleGum</option>
     <option>Bannana Melt</option>
  </select>
</div>

<br />
<br />
<br />
<form onsubmit="return false" oninput="amount.value = (hours.valueAsNumber * 10) + ((hours.valueAsNumber * 10) * 0.20 + 2.50)">
  <legend><font color="#1ec1f4">Invoice</legend>

  <p><label for="hours">Number of Bundles Selected</label>
  <input type="number" min="0" id="hours" name="hours"></p>

  <p><label for="rate">3 Cupcake Bundle = £10</label>


  <p><label for="vat">VAT = 20% of Total Price</label>
  
    <p><label for="vat">Delivery Fee = £2.50</label>


  <p>Total: <strong>£<output name="amount" for="hours rate vat"></output></strong></p>
</form>

<center>




<!-- Trigger/Open The Modal -->
<button id="myBtn">Checkout</button>

<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">x</span>
    <p><font color="#F3F6FA"> <h2><font color="#F3F6FA">Thank You!</h2><br />We will email you shortly with an invoice for your purchase and the details of your order!  <br>
Thank You for shopping at Eve's Cupcakes<br>
Please Return to the Main Menu<br></p>
  </div>

</div>

<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

<footer>
    <center>
  <p>Copyright @ IevaMedonaite</p>
  <p>Email Us: <a href="medonaite123@gmail.com">
  medonaite123@gmail.com</a>.</p>
  </center>
</footer>







</body>
</html>