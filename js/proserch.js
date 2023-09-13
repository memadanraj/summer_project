$( "#ppname" ).autocomplete({
    source: function(request, response ){
        $.ajax(
            {
                url: 'productname.php',
                type: 'GET',
                dataType: 'json',
                success: function(data){
                    // console.log(data);
                    aData = $.map(data,function(value,key){
                        return {
                            ppid:value.p_id,
                            ppname: value.p_name,
                            pprice: value.p_price,
                        };
                    });
                        var result =$.ui.autocomplete.filter(aData,request.term);
                        response(result);
                }
            }
        )
    }
  });