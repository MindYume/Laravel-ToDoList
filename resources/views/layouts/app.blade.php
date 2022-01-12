<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Laravel ToDoList</title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        
        <style type="text/css">
            .container{
                box-shadow: 0px 3px 10px rgb(0,0,0,0.5);
                border-radius: 5px;
            }
        </style>
    </head>

    <body>
        <div class="container w-25 mt-5">
            @yield('content')
        </div>
    </body>
</html>