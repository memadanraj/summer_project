

<?php session_start();

    if(!isset($_SESSION['isloggedin'])){

      echo '<script> alert ("You are Loged out !!"); </script> ';

        header('Location: admin.php');
    }

?>

<?php 
   include("connect.php");
    include ("nav.php");
    

// session_start();
// if(isset($_post['saveInvoice'])){
// if(isset($_SESSION['inum'])){
// {
// $myitems=array_column($_SESSION['inum'],'Item_name');
// if(in_array($_post['oname'],$myitems)){

// 	echo "<script> alert ('already added ');</script>";
// }

// $count=count($_SESSION['inum']);
// $_SESSION['inum'][$count]=array('Item_Name'=> $_POST['oname'],'qty'=>$POST['oqty']);
// print_r($_SESSION['inm']);
// }
// }
// else 
// {
//    print_r($_SESSION['inm']);
// }
// }
   ?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <title>Document</title>
      <link rel="stylesheet" href="css/itemlist.css">
      <style>

        .result{
         color:red;
        }
        td
        {
          text-align:center;
        }
       .body{
        text-align: center;
        box-sizing:unset;

       }
       .msg{
        color :darkblue;
       }
      </style>
   </head>
   <body >
   <h2> Billing </h2>
      <section>
         
        
      
         
            
               <table class="table" style="background-color:#f5f5f5;">
                  <thead>
                     <tr>
                        <th>No.</th>
                        <th>Meal Items</th>
                        <th >Qty</th>
                        <th>Price</th>
                     </tr>
                  </thead>
                  <tbody>
                     <tr>
                        <td scope="row">1</td>
                        <td>
                           <select name="menu" id="menu"  >
                              <option value="">Select Item</option>
                              <?php 
                                 $sql = "SELECT * FROM nproduct";
                                 $query = mysqli_query($conn,$sql);
                                 while($row = mysqli_fetch_assoc($query)){
                                 ?>
                              <option id="<?php echo $row['np_id']; ?>" value="<?php echo $row['np_name']; ?>" class="">
                                 <?php echo $row['np_name']; ?>
                              </option>
                              <?php  }?>   
                           </select>
                        </td>
                        <td >
                          <input type="number" id="qty" min="0" value="0" class="">
                        </td>
                        <td>
                           <p id="price"></p>
                        </td>
                        <td><button id="add" class="btnadd" name="add" type="button">Add</button></td>
                     </tr>
                  </tbody>
               </table>
               <div role="alert" id="errorMsg" class="msg" >
                 <!-- Error msg  -->
              </div>
            </div>
            
      
                 <br>
                 <br>
                 <form action="order.php" Method="POST" autocomplete="off">
                     <h4>Receipt</h4>
                  <!-- </div>
                  <span class=""> Date : <input type="date" name="date" id="date" required>
                 
                     
                     </div> -->
                     <div  style="float: left;margin-left: 40px;margin-bottom: 10px;">
                        <p>Table no:</p>
                        <input type="number" name="tbname" value="1" min="1" max="5" required >
                                 </div>
                                 <div  style="float: right;margin-right: 40px;margin-bottom: 10px;">
                        <p>Payment Mode:</p>
                        <input type="radio" name="pmode" Value="Cash" required>Cash
                        <input type="radio" name="pmode" Value="Ebanking" required>Ebanking
                     </div>
                
                  
                     </span>
                    
                     <table id="receipt_bill" class="table">
                        <thead>
                           <tr>
                              <th> No.</th>
                              <th>Product Name</th>
                              <th>Quantity</th>
                              <th class="text-center">Price</th>
                              <th class="text-center">Total</th>
                           </tr>
                        </thead>
                        <tbody id="new" >
                          <tr>
                           <td>
                           <input type="hidden" name="oid[]"    >
                           </td>
                           <td>
                           <input type="hidden" name="oname[]"  >
                           </td>
                           <td>
                           <input type="hidden" name="oqty[]"  >
                           </td>
                           <td>
                           <input type="hidden" name="oprice[]"  >
                           </td>
                           <td>
                           <input type="hidden" name="ttotal[]"  >
                           </td>

                          </tr>
                        </tbody>
                        <tr>
                           <td> </td>
                           <td> </td>
                           <td>  </td>
                           <td >
                                <h5><strong class ="sub">Sub Total:  RS. </strong></h5>
                                <p><strong>Tax (5%) : RS. </strong></p>
                           </td>
                           <td >
                              <h5> <strong><input type="text"  id="subTotal" name="subTotal" value="" ></strong></h5>
                              <h5> <strong><span ><input type="text"  id="taxAmount" name="taxAmount" value="" ></strong></h5>
                           </td>
                        </tr>
                        <tr>
                           <td> </td>
                           <td> </td>
                           <td> </td>
                           <td >
                              <h5><strong>Gross Total: Rs. </strong></h5>
                           </td>
                           <td >
                              <h5 ><strong><input type="text" id="totalPayment" name= "totalPayment" value="" ></strong></h5>
                               
                           </td>
                        </tr>
                        
                     </table>
                     
                     <button type="submit" class="btsave" style=" font-weight: 600;color: rgb(255, 255, 255);background-color: darkblue;padding: 10px;margin-top: 20px;margin-bottom: 20px;"  name="saveinvoice" id ="saveinvoice">Save Invoice</button>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </section>
     
   </body>
</html>
<script>



   $(document).ready(function(){
     $('#menu').change(function() {
      var id = $(this).find(':selected')[0].id;
       $.ajax({
          method:'POST',
          url:'fetch.php',
          data:{id:id},
          dataType:'json',
          success:function(data)
            {
               $('#price').text(data.np_price);
 
               //$('#qty').text(data.product_qty);
            }
       });
     });
    
     
     var count = 1;
     $('#add').on('click',function(){

      // var id = $("#menu").attr("id");
        var name = $('#menu').val();
        var qty = $('#qty').val();
        var price = $('#price').text();

// validate selection item not null
        var mySelect = document.getElementById("menu");
    if(!mySelect.value) {
        alert('You must select a Item!');
      //   $('#errorMsg').html(erroMsg).fadeOut(9000);
        
    }
else {
 
        if(qty == 0)
        {
           var erroMsg =  '<span >Minimum Qty should be 1 or More than 1</span>';
           $('#errorMsg').html(erroMsg).fadeOut(9000);
        }
        else
        {
           billFunction(); // Below Function passing here 
        }
      }
        function billFunction()
          {
          var total = 0;
       
          $("#receipt_bill").each(function () {
          var total =  price*qty;
          var subTotal = 0;
          subTotal += parseInt(total);
          
          var table =   '<tr><td> <input type="number" name="oid[]" value="'+ count +'" > </td><td><input type="text" name="oname[]" value="'+ name + '"  ></td><td><input type="number" name="oqty[]" value="' + qty + '"  ></td><td> <input type="number" name="oprice[]" value="' + price + '" ></td><td><strong><input type="hidden" id="total" name="ttotal[]" value="'+total+'">' +total+ '</strong></td></tr>';
          $('#new').append(table)
 
           // Code for Sub Total of items 
            var total = 0;
            $('tbody tr td:last-child').each(function() {
                var value = parseInt($('#total', this).val());
                if (!isNaN(value)) {
                    total += value;
                }
            });
            // $('#subTotal').text(total);
             $('#subTotal').val(total);
               
            // Code for calculate tax of Subtoal 5% Tax Applied
              var Tax = (total * 5) / 100;
              $('#taxAmount').val(Tax.toFixed(2));
 
             // Code for Total Payment Amount
 
             var Subtotal = $('#subTotal').val();
             var taxAmount = $('#taxAmount').val();
             
 
             var totalPayment = parseFloat(Subtotal) + parseFloat(taxAmount);
             $('#totalPayment').val(totalPayment); // Showing using ID 
        
         });
         count++;
        } 
       });
           // Code for year 
             
         //   var currentdate = new Date(); 
         //     var datetime = currentdate.getDate() + "/"
         //        + (currentdate.getMonth()+1)  + "/"
         //        + currentdate.getFullYear();
         //        $('#year').text(datetime);
 
         //   // Code for extract Weekday     
         //        function myFunction()
         //         {
         //            var d = new Date();
         //            var weekday = new Array(7);
         //            weekday[0] = "Sunday";
         //            weekday[1] = "Monday";
         //            weekday[2] = "Tuesday";
         //            weekday[3] = "Wednesday";
         //            weekday[4] = "Thursday";
         //            weekday[5] = "Friday";
         //            weekday[6] = "Saturday";
 
         //            var day = weekday[d.getDay()];
         //            return day;
         //            }
         //        var day = myFunction();
         //        $('#day').text(day);



                
     });
</script>
 
<!-- // Code for TIME -->
<script>
    window.onload = displayClock();
 
     function displayClock(){
       var time = new Date().toLocaleTimeString();
       document.getElementById("time").innerHTML = time;
        setTimeout(displayClock, 1000); 
     }
</script>

