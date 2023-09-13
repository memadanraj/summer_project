<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        ul{
            background-color : #eee;
            cursor: pointer;
        }
        li {
            
            padding: 12px;
        }
    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
</head>
<body>

    >
          
            
       <label > product</label>
    
            
            
  
         
            
            <input type="text" name="ppname" id="ppname">
            <div id="plist"></div>
            
    

    
</body>
</html>
<script>
    $(document).ready(function(){
$('#ppname').keyup(function()
{
var query= $(this).val();

if(query!='')
{
    $.ajax({
        url: "searching.php",
        method: "POST",
        data: {query:query},
        success:function (data)
        {
            $('#plist').fadeIn();
            $('#plist').html(data);

        }
    });
}
else {
    $( '#plist').fadeOut();
    $( '#plist').html("");
}
});
$(document).on( 'click', 'li', function()
{
    $( '#pname').val($(this).text());
    $( '#plist').fadeOut();
}
);
    });
</script>