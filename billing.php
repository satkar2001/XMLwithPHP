<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
    <div>
        <h1>  BILLING REPORT </h1>
        <table border=3 align="center">
                <tr align="center" id="billing_table">

                </tr>

</table>
</div>
</body>
</html>

<script>
    $(document).ready(function(){
        $.getJSON("billing.json",function(data){
            var billing_data='';
            $.each(data,function(key,value){
                billing_data+='<tr>';
                billing_data+='<td>name :'+value.name+'</td>';
                billing_data+='<td>date :'+value.date+'</td>';
                billing_data+='<td>quantity :'+value.quantity+'</td>';
                billing_data+='<td>price :'+value.price+'</td>';
                billing_data+='</tr>';
            });
            $('#billing_table').append(billing_data);

        });
    });
</script>