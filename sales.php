<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
    <div>
        <h1>  SALES REPORT </h1>
        <table border=3 align="center">
                <tr align="center" id="sales_table">

                </tr>

</table>
</div>
</body>
</html>

<script>
    $(document).ready(function(){
        $.getJSON("sales.json",function(data){
            var sales_data='';
            $.each(data,function(key,value){
                sales_data+='<tr>';
                sales_data+='<td>date :'+value.date+'</td>';
                sales_data+='<td>quantity :'+value.quantity+'</td>';
                sales_data+='<td>final :'+value.final+'</td>';
                sales_data+='</tr>';
            });
            $('#sales_table').append(sales_data);

        });
    });
</script>