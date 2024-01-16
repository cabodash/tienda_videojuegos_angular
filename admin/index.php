<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/admin.css">
    <title>Index</title>
    <style>
        *,
        *::before,
        *::after {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background-color: #272727;
            color: #FFF;
            font-family: "Roboto", sans-serif;
        }

        .input {
            border: 2px solid #e8e8e8;
            padding: 15px;
            border-radius: 10px;
            background-color: #212121;
            font-size: small;
            font-weight: bold;
            text-align: center;
            color: #888888;
        }

        .input:focus {
            outline-color: white;
            background-color: #212121;
            color: #e8e8e8;
            box-shadow: 5px 5px #888888;
        }

        button {
            font-family: Arial, Helvetica, sans-serif;
            font-weight: bold;
            color: white;
            background-color: #171717;
            padding: 1em 2em;
            border: none;
            border-radius: .6rem;
            position: relative;
            cursor: pointer;
            overflow: hidden;
        }

        button span:not(:nth-child(6)) {
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
            height: 30px;
            width: 30px;
            background-color: #0c66ed;
            border-radius: 50%;
            transition: .6s ease;
        }

        button span:nth-child(6) {
            position: relative;
        }

        button span:nth-child(1) {
            transform: translate(-3.3em, -4em);
        }

        button span:nth-child(2) {
            transform: translate(-6em, 1.3em);
        }

        button span:nth-child(3) {
            transform: translate(-.2em, 1.8em);
        }

        button span:nth-child(4) {
            transform: translate(3.5em, 1.4em);
        }

        button span:nth-child(5) {
            transform: translate(3.5em, -3.8em);
        }

        button:hover span:not(:nth-child(6)) {
            transform: translate(-50%, -50%) scale(4);
            transition: 1.5s ease;
        }
    </style>
</head>

<body>

    <?php include("menu.php"); ?>

</body>

</html>