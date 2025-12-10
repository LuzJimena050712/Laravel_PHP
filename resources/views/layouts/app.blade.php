<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        table, th, td, text {
            color: #16c809;
            border: 1px solid #16c809;
            border-collapse: collapse;
            text-align: center;
        }
    </style>
    <title>Proyecto</title>
</head>
<body style="background-color: rgb(0, 0, 0); font-family: monospace;">
    <a href="#">Opción 1</a> |
    <a href="#">Opción 2</a> |
    <a href="/alumnos">Alumnos</a>
    @yield(section: 'content')
</body>
</html>