<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container" style="max-widht: 50%;">
        <div class="text-center mt-5 mb-4">
            <h2>Live Search</h2>
        </div>
        <input style="width:600px; margin-left:250px;"  type="text" class="form-control" id="live_search" autocomplate="off"
        placeholder="Ara...">
    </div>

    <div id="aramasonucu"></div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>  
    <script type="text/javascript">

$(document).ready(function(){
    
        $("#live_search").keyup(function(){
            var input=$(this).val();    
        //alert (input);  
        if(input !=""){
            $.ajax({
                url:"livesearch.php",
                method:"POST",
                data:{ input:input},

                success:function(data){
                    $("#aramasonucu").html(data);
                }

            });
        }else{
            $("#aramasonucu").css("display","none");
        }
      });
    });


    </script>
</body>
</html>