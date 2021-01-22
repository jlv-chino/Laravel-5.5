<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        .imagenCabecera{
            float: right;
            padding-right: 150px;
            width: 150px;
        }

        .cabecera{
            text-align: center;
            font-size: x-large;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin-bottom: 100px;
            color: green;
        }

        .contenido form, table{
            width: 500px;
            margin:0 auto;
        }

        .pie{
            position: fixed;
            bottom: 0px;
            width: 100%;
            font-size: 0.7em;
            margin-bottom: 15px;
        }
    </style>
    <title>Document</title>
</head>
<body>

    <div class="cabecera">
        @yield('cabecera')
        <img src="/images/logo.png" class="imagenCabecera"/>
    </div>

    <div class="contenido">
        @yield('contenido')
    </div>

    <div class="pie">
        @yield('pie')
        Sitio Web - Laravel 5.5 - El Chino.
    </div>

</body>
</html>