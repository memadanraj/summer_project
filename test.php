<!DOCTYPE html>
<html>
<head>
    <title>Dropdown Auto-fill</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <form>
        <table>
            
    <tr>
       <td>  <label for="dropdown">Select Option:</label>
        <select id="dropdown" name="dropdown">
            <option value="">Select an option</option>
        </select>
 </td>
    </tr>

        
        <h3>Auto-filled Fields:</h3>
        <td><input type="text" id="ppid" name="field1" placeholder="Field 1"> </td>
        
        <td><input type="text" id="pprice" name="field2" placeholder="Field 2"></td>
        </table>
    </form>

    <script>
        $(document).ready(function () {
            // When the page loads, fetch dropdown options
            $.ajax({
                url: 'tryfetch.php',
                type: 'GET',
                dataType: 'json',
                success: function (data) {
                    var dropdown = $('#dropdown');
                  
                    $.each(data, function (key, value) {
                        dropdown.append($("<option></option>")
                        .attr("value", value.np_id)
                            .text(value.np_name));
                           
                    });
                }
            });

            // When the user selects an option, fetch and display auto-filled fields
            $('#dropdown').change(function () {
                var selectedOption = $(this).val();
                console.log(selectedOption);
                $.ajax({
                    url: 'tryphpdbfetch.php',
                    type: 'GET',
                    data: { id: selectedOption },
                    dataType: 'json',
                    success: function (data) {
                        // consol.log(data);
                        $('#ppid').val(data.np_id);
                        $('#pprice').val(data.np_price);
                    }


                    
                });
            });
        });
    </script>
</body>
</html>
