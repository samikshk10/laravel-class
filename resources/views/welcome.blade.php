<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Fake news</title>
    <style>

        body{
            font-family:'Century Gothic',CenturyGothic,sanserif;
        }
        </style>
</head>
<body class="p-3">
    <h1 class="text-center text-capitalize mt-3  ">{{$header}}</h1>
    <?php 
    // echo "<pre>";
    // print_r($articles);
    // echo "</pre>";
    ?>

    <?php
    
        ?>
       <div> @foreach($articles as $value)</div>
        <h2 class="text-center mt-4 text-italic">{{$value['title']}}  </h2>
        <div class="py-3 text-justify ml-2 mr-2"><p> {{$value['desc'] }}</p></div>
         @endforeach
        

        <!-- ':' for beginning bracket and 'endforeach' for closing bracket -->

        <!-- @ used for php code -->
        
    
    
    
    

</body>
</html>