<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/billing.css">
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

    <link rel="stylesheet" href="css/itemlist.css">
</head>

<body>

    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>



    <!-- addd row and remove -->
    <script type="text/javascript">
    var x = 1;
    $(document).ready(function() {
        $("#date").datepicker({
            dateFormat: "dd-mm-yy"
        });

        var html = '<tr><td><input disabled="disabled" name="SN"></td><label for="ppname"></label><td>  <select class="dropdown" name="dropdown"><option value=" ">Select an option</option></select></td><label for="pprice"></label><td><input type="text" onkeyup="price()" name="pqty" class="pqty"></td><td><input type="text" class="ppid" name="field2" placeholder="Field 2"></td><td><input type="text" disabled="disabled" name="ptotal"></td><td><button type="button" class="action" name="add" id="add">ADD</button></td></tr>';

        $("#add").click(function() {

            $("#t_body").append(html);
            $.ajax({
                url: 'fetch.php',
                type: 'GET',
                dataType: 'json',
                success: function (data) {
                    var dropdown = $('.dropdown');
                  
                    $.each(data, function (key, value) {
                        dropdown.append($('<option  ></option>')
                        .attr("value", value.np_id)
                            .text(value.np_name));
                           
                    });
                }
            });
            
            $('.dropdown').change(function () {
                var selectedOption = $(this).val();
                console.log(selectedOption);
                $.ajax({
                    url: 'fetch2.php',
                    type: 'GET',
                    data: { id: selectedOption },
                    dataType: 'json',
                    success: function (data) {

                        // consol.log(val(data.np_price));
                        $('.ppid').val(data.np_price);
                      
                    }


                    
                });
            });
            
        });
        $("#t_body").on('click', '#remove', function() {
            if (confirm("Are you sure ?")) {
                $(this).closest('tr').remove();
            }
        });
    });
    </script>



    <?php
    include 'nav.php';

    include '../connect.php';
  ?>


    <center> Billing</center>




    <p>Invoice details</p>
    Invoice No
    <input type="number" name="i_no">
    Invoice Detail
    <input type="date" name="i_date">

    <div>
        <form action="billing2.php" method="post" autocomplete="off">
            <div class="cdiv">
                <p> Customer Details</p>
                Customer Nam
                <input type="text" name="c_name" id="cus_name">
                Table N
                <input type="number" name="t_no" id="cus_t_no">
            </div>
    </div>


    <div class="container">

        <table id="mytable">
            <thead>
                <tr>
                    <th>
                        SN.
                    </th>
                    <th>
                        Product
                    </th>
                    <th>
                        Qty
                    </th>
                    <th>
                        Price
                    </th>
                    <th>
                        Total
                    </th>
                    <th>
                        Action
                    </th>

                </tr>
            </thead>


            <tbody id="t_body">

                <tr>
                    <td><input disabled="disabled" name="SN"></td>
                    <label for="ppname"></label>
                    <td>  <select class="dropdown" name="dropdown">
                        <option value="">Select an option</option>
                     </select>


                    </td>
                    <label for="pprice"></label>
                    <td><input type="text" onkeyup="price()" name="pqty" class="pqty"></td>
                    <td><input type="text" class="ppid" name="field2" placeholder="Field 2"></td>
                    <td><input type="text" disabled="disabled" name="ptotal"></td>
                    <td><button type="button" class="action" name="add" id="add">ADD</button></td>
                </tr>





            </tbody>

            <tr class="totalsum">
                <td>Total :</td>
                <td><input type="text" disabled="disabled" name="total" id="total"></td>

            </tr>

        </table>
        <button class="print" name="save">save</button>
    </div>





    </form>

<!-- <script>
 $(document).ready(function(){
    $(".form-control").select2({
  tags: true
});
 })




</script> -->

<script>
        $(document).ready(function () {
            // When the page loads, fetch dropdown options
            $.ajax({
                url: 'fetch.php',
                type: 'GET',
                dataType: 'json',
                success: function (data) {
                    var dropdown = $('.dropdown');
                  
                    $.each(data, function (key, value) {
                        dropdown.append($('<option  ></option>')
                        .attr("value", value.np_id)
                            .text(value.np_name));
                           
                    });
                }
            });

            // When the user selects an option, fetch and display auto-filled fields
            $('.dropdown').change(function () {
                var selectedOption = $(this).val();
                console.log(selectedOption);
                $.ajax({
                    url: 'fetch2.php',
                    type: 'GET',
                    data: { id: selectedOption },
                    dataType: 'json',
                    success: function (data) {

                        // consol.log(val(data.np_price));
                        $('.ppid').val(data.np_price);
                      
                    }


                    
                });
            });


            function update() {
    var sum = 0.0;
    var quantity;
    $('#myTable > tbody  > tr').each(function() {

      quantity = $(this).find('.quant').val();
      var price = parseFloat($(this).find('.price').attr('data-price').replace(',', '.'));
      var amount = (quantity * price);

      sum += amount;
      $(this).find('.amount').text('' + amount + ' грн');
    });
    $('.total').text(sum + ' грн');
  }
        });
    </script>









    <!-- <script>
            // calculation for total billing 
            function price() {
                var price = document.getElementById('pprice').value;
                var qty = document.getElementById('pqty').value;
                if (price != '') {
                    var total = price * qty;
                    document.getElementById('ptotal').value = total;
                } else {
                    alert('Please Select a Product First');
                }
            }
            </script> -->

</body>

</html>