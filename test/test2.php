<?php
 include '../connect.php'
?>


<!DOCTYPE html>
<html>
<head>
    <title>Add Row and Fetch Data</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>Product</th>
                <th>Quantity</th>
            </tr>
        </thead>
        <tbody id="table-body">
            <tr>
                <td>
                    <select class="product-select">
                        <option value="">Select a product</option>
                    </select>
                </td>
                <td><input type="text" class="quantity"></td>
            </tr>
        </tbody>
    </table>
    <button id="add-row">Add Row</button>

    <script>
        // Function to fetch data from PHP script and populate the select dropdown
        function populateSelect() {
            $.getJSON('fetch.php', function(data) {
                var select = $('.product-select');
                select.empty();
                $.each(data, function(key, value) {
                    select.append($('<option>').text(value.np_name).attr('value', value.np_id));
                });
            });
        }

        // Initial population of the select dropdown
        populateSelect();

        // Add a new row when the button is clicked
        $('#add-row').click(function() {
            var newRow = $('<tr>');
            newRow.append('<td><select class="product-select"></select></td>');
            newRow.append('<td><input type="text" class="quantity"></td>');
            newRow.appendTo('#table-body');

            // Populate the new row's select dropdown
            populateSelect();
        });
    </script>
</body>
</html>
