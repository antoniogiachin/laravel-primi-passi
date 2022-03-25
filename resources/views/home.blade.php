<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HomePage</title>
    <!-- Font -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
    <!-- style -->
    <style>

        *{
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: 'Nunito';
        }

        body{
            height: 100vh;
            background-color: #222;
            color: lightgrey;
        }
        .saluto{
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 100px;
        }

        .lista ul{
            display: flex;
            justify-content: space-around;
            list-style-type: none;
        }

        h1{
            margin-right: 3rem;
        }

        span{
            margin-right: 1rem;
        }

        a{
            text-decoration: none;
            color: lightgray;
            padding: 20px;
        }

        a:hover{
            color: cyan;
            text-decoration: underline;
            text-transform: uppercase;
        }

    </style>
</head>
<body>
    <div class="saluto">
        <h1>{{$saluto}}</h1>
        <span>{{$nome}}</span> <span>{{$cognome}}</span>
    </div>
    <div class="lista">
        <ul>
            @foreach ($lista as $item)
            <li><a href="#">{{$item}}</a></li>
            @endforeach
            <!-- <li><a href="#">Ciao</a></li>
            <li><a href="#">Ciao</a></li>
            <li><a href="#">Ciao</a></li>
            <li><a href="#">Ciao</a></li> -->
        </ul>
    </div>
</body>
</html>