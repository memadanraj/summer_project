<?php
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />
    <link rel="stylesheet" href="./global.css" />
    <link rel="stylesheet" href="./style.css" />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Inter:wght@200;400;500;600;700&display=swap"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Baloo Bhai:wght@400&display=swap"
    />
  </head>
  <body>
    <div class="side-nav-parent">
      <div class="side-nav">
        <div class="side-nav-child"></div>
        <a href="#" class="billing">Billing</a>
        <a href="#" class="transaction-record">Transaction Record</a>
        <a href="" class="item-list">Item List</a>
       
    
      </div>
      <div class="nav-haed-parent">
        <div class="nav-haed">
          <div class="nav-haed-child"></div>
          <b class="newa-cottage-e-billing">Newa Cottage e-Billing</b>
          <div class="logout">
            <!-- <div class="logout-child"></div> -->
            <!-- <b class="logout1">Logout</b> -->
            <button class="logout1" onclick="blur">Logout</button>
          </div>
        </div>
        <img class="logo-here" alt="" src="newlogo.png" />
      </div>
      <b class="billing1">BILLING </b>
      <div class="customer-details">
        <div class="cname">
            <form method="post" >
               
                <label for="cname">Name :</label>
                <input type="text" class="rounded-rectangle" name="cname">
                
              </div>
              <div class="c-address">
                <label for="caddress">Address :</label>
                <input type="text"  class="rounded-rectangle" name="caddress">
                
              </div>
              <div class="ccity">
                <label for="ccity" >City :</label>
                <input type="text" class="rounded-rectangle" name="ccity">
                <!-- <input type="submit" value="submit"> -->
              </div>
              
          
         
      </div>
      <div class="invoice-details">
        <div class="cname">
         
                <label for="invoiceno">Invoice No.</label>
                <input type="number" value="0" class="rounded-rectangle" >
         
        </div>
        <div class="invoice-date">
          
                <label for="invoicedate">Invoice Date :</label>
              <input type="date" name="invdate" class="rounded-rectangle">
           
          
        </div>
      </div>
      <b class="invoice-details1">Invoice Details</b>
      <b class="customer-details1">Customer Details</b>
      <b class="product-details">Product Details</b>
      <div class="product-info">

        <table style="border: 1px solid black ;" >
          <tr>
            <th>ProductId</th>
            <th>Product name</th>
            <th>Qty</th>
            <th>Price </th>
            <th>Total </th>
            <th>Action </th>
  
          </tr>
          <tr>
            <td><input type="text" class="ptext" ></td>
            <td><input type="text"></td>
            <td><input type="text"></td>
            <td><input type="number"></td>
            <td><input type="text"></td>
            <td><button class="action" onclick="AnimationEffect">X</button></td>
          </tr>
          <tr class="totalsum">
            <td>Total :</td>
            <td><input type="text" name="" id=""></td>
          </tr>
          <tfoot>
            <td>
              <button class="addrowbtn " value="+AddRow" > +AddRow</button>
            </tfoot>
            </td>
          
        </table>
        
      </form>
      </div>
    </div>
  </body>
</html>
