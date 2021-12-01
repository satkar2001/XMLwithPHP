<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
    <div>
        <h1> STOCK REPORT </h1>
        <table border=3 align="center">
                <tr align="center" id="stock_table">

                </tr>

</table>
</div>
</body>
</html>

<script>
    $(document).ready(function(){
        $.getJSON("stock.json",function(data){
            var stock_data='';
            $.each(data,function(key,value){
                stock_data+='<tr>';
                stock_data+='<td>id :'+value.id+'</td>';
                stock_data+='<td>name :'+value.name+'</td>';
                stock_data+='<td>expiry date :'+value.exp+'</td>';
                stock_data+='<td>quantity :'+value.quantity+'</td>';
                stock_data+='<td>price :'+value.price+'</td>';
                stock_data+='</tr>';
            });
            $('#stock_table').append(stock_data);

        });
    });
</script>