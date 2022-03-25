<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Documentation</title>
    <!-- Font -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
    <!-- style -->
    <style>
        *{
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: 'nunito';
        }

        body{
            height: 100vh;
            background-color: #222;
            color: lightgrey;
            padding: 3rem 0;
        }

        h1{
            text-align: center;
        }

        button{
            display: block;
            padding: 6px 12px;
            border: none;
            background-color: transparent;
            border: 3px solid lightgray;
        }

        button a {
            text-decoration: none;
            color: lightgray;
        }

        .container{
            width: 80%;
            margin: 2rem auto;
        }

        .btn-container{
            display: flex;
            justify-content: center;
        }

        button:hover{
            transform: scale(1.2);
        }

        ul{
            list-style-type: none;
        }

        li {
            margin: 2rem 0;
        }

    </style>
</head>
<body>
    
    <h1> Non vendiamo sogni, ma ci andiamo vicino!</h1>

    <div class="container">
        <div class="faq">
            <ul>
                <li>
                    <h2>Come ti chiami?</h2>
                    <p>Dovresti saperlo...</p>
                </li>
                <li>
                    <h2>Cosa vendete?</h2>
                    <p>Ci occupiamo di vendere...</p>
                </li>
            </ul>
        </div>
    </div>
    
    <div class="btn-container">
        <button><a href="/">HOME</a></button>
    </div>

</body>
</html>