<html>
  <head>
    <title>Shopping Cart</title>
     <link rel="stylesheet" href="css\cart.css">
    <script>
      function bags()
    {
      document.getElementById('i3').style="display:block";
      document.getElementById('i1').style="display:none";
      document.getElementById('i2').style="display:none";

}
      function bagl()
      {
        document.getElementById('i3').style="display:none";
      }
      function pendrive()
      {
        document.getElementById('i1').style="display:block";
        document.getElementById('i2').style="display:none";
        document.getElementById('i3').style="display:none";

  }
        function pendrive1()
        {
          document.getElementById('i1').style="display:none";
        }
        function ss()
        {
          document.getElementById('i2').style="display:block";
          document.getElementById('i3').style="display:none";
          document.getElementById('i1').style="display:none";
    }
          function ss1()
          {
            document.getElementById('i2').style="display:none";
          }
          function ATC (pid,a,qty)
          {
            a=parseInt(a,10);
            quan=document.getElementById(qty).value;
            var t=document.getElementById('total').value;
            t=parseInt(t,10);
            t=t+document.getElementById(qty).value*a;
            document.getElementById('total').value=t;


            document.getElementById('cart').innerHTML+="";
            document.getElementById('cart').innerHTML+="<table align=center border=1><tr><td>Product ID</td><td>Quantity</td><td>Price</td></tr><tr><td>"+pid+"</td><td>"+quan+"</td><td>"+a+"</td></tr></table>";
          }
      function ATC (pid,a,qty)
      {
        a=parseInt(a,10);
        q=document.getElementById(qty).value
        var t=document.getElementById('total').value;
        t=parseInt(t,10);
        t=t+document.getElementById(qty).value*a;
        document.getElementById('total').value=t;


        
        document.getElementById('cart').innerHTML+="<table align=center border=0><tr><td>Product ID</td><td>Quantity</td><td>Price</td></tr><tr><td>"+pid+"</td><td>"+q+"</td><td>"+a+"</td></tr></table>";

      }
    </script>
  </head>
  <body bgcolor="lightgreen">
    <form method="POST" name="form1" action="cart1.php">
    <u><h1 align=center>ONLINE SHOPPING CART</h1></u><hr>
    <div class="head">
  <table class="tbl1" border="0">
    <tr bgcolor="#8ad6ff" class="tr1">
        <th><button type="button" id="2" onmouseover="javascript:bags()">Bags</button></th>
        <th><button type="button" id="3" onmouseover="javascript:pendrive()">Pendrive</button></th>
        <th><button type="button" id="1" onmouseover="javascript:ss()">sweat shirt</button></th>
      </tr>
      <tr>
      <th>
        <div id="i3" class="3" onmouseleave="javascript:bagl()">
            <a href="#">Wildcraft<br></a>
            <a href="#">Adidas<br></a>
            <a href="#">Puma<br></a>
            <a href="#">Nike<br></a>
            <a href="#">Swiss<br></a>
            <a href="#">Reebok<br></a>
        </div>
      </th>
      <th>
      <div id="i1" class="1" onmouseleave="javascript:pendrive1()">

          <a href="#">Samsung<br></a>
          <a href="#">San Disk<br></a>
          <a href="#">Sony<br></a>
          <a href="#">Dell<br></a>
          <a href="#">HP<br></a>
          <a href="#">Transcend<br></a>

      </div>
      </th>
      <th>
      <div id="i2" class="2" onmouseleave="javascript:ss1()">
        <a href="#">Adidas<br></a>
        <a href="#">Reebok<br></a>
        <a href="#">Nike<br></a>
        <a href="#">Puma<br></a>
        <a href="#">Red Chief<br></a>
        <a href="#">Woodland<br></a>
      </div>
      </th>
    </tr>
  </table>
</div>
   
    <br>
    
    <br>
    <table border=1 width="100%">
      <tr>
        <th>
          <input type="hidden" value="Rs.599" id="amt1" readonly>
          <input id="PD01" hidden value="PD01"><br>
          <img src="images/bag1.jpeg" width="20%" height="18%"><br>
          LAPTOP BAG <br>
          <font size="3" color=red><h4>Rs.599</h4></font>
           
          <label for="qty">Quantity:</label><input type="number" min="0" id="qty1" placeholder="Enter Quantity"><br>
          
          <input type="button" value="Add" onclick="javascript:ATC('PD01','599','qty1')">
        </th>
        <th>
          <br>
          <input type="hidden" value="Rs.499" id="amt2" readonly>
          <input id="PD02" value="PD02" hidden><br>
          <img src="images/pendrive1.png" width="20%" height="20%"><br>
          PENDRIVE <br>
          <font size="3" color="red"><h4>Rs.499</h4></font>
          <label for="qty">Quantity:</label><input type="number" min="0" id="qty2" placeholder="Enter Quantity"><br>
          
          <input type="button" value="Add" onclick="javascript:ATC('PD02','499','qty2')">
        </th>
        <th>
          <input type="hidden" value="Rs.699" id="amt3" readonly>
          <input id="PD03" hidden value="PD03"><br>
          <img src="images/ss1.jpeg" width="20%" height="20%"><br>
          SWEAT SHIRT <br>
          <font size="3" color="red"><h4>Rs.699</h4></font>
          <label for="qty">Quantity:</label><input type="number" min="0" id="qty3" placeholder="Enter Quantity"><br>
          
          <input type="button" value="Add" onclick="javascript:ATC('PD03','599','qty3')">
        </th>
      </tr>

    </table>
    <br>
    <h3 align=center><u>Cart</u></h3>
    <div id="cart"></div>
     <div align=right>
    <label for="total"><b><u>Total Amount </b></u>= <b>Rs.</b></label>
    <input type="number" id="total" value=0 name="total" readonly>
  </div>
    <input type="submit" name="proceed to checkout" value="proceed to checkout" style="margin-left: 1350px">
</form>
  </body>
</html>
