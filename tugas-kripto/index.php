<html>

<head>
    <title>vigenere chipper</title>
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(-45deg, #ee7752, #e73c7e, #23a6d5, #23d5ab);
            background-size: 400% 400%;
            -webkit-animation: gradient 15s ease infinite;
            animation: gradient 15s ease infinite;
        }

        @-webkit-keyframes gradient {
            0% {
                background-position: 0% 50%;
            }

            50% {
                background-position: 100% 50%;
            }

            100% {
                background-position: 0% 50%;
            }
        }

        @keyframes gradient {
            0% {
                background-position: 0% 50%;
            }

            50% {
                background-position: 100% 50%;
            }

            100% {
                background-position: 0% 50%;
            }
        }

        button {
            padding: 18px 30px;
            font-family: 'Press Start 2P', cursive;
            font-size: 9px;
            border: none;
            position: relative;
            cursor: pointer;
            box-sizing: border-box;
            overflow: hidden;
            background: #FF9CA0;
            border-radius: 0;
            min-width: 200px;
            color: #FFF;
            z-index: 0;
            text-transform: uppercase;
            font-weight: 600;
            letter-spacing: 2px;
        }

        button::before {
            content: "";
            position: absolute;
            display: block;
            top: 0;
            left: -50px;
            width: 150%;
            height: 100%;
            background: #14202D;
            transition: all 0.7s ease-in-out;
            z-index: -1;
            transform: translate(-300px) skew(-20deg);
        }

        button:hover::before {
            transform: translate(0px) skew(-20deg);
        }

        .flex-container {
            display: flex;
            height: 300px;
            justify-content: center;
            align-items: center;
        }

        .font {
            font-family: 'Press Start 2P', cursive;
            font-size: 20px;
        }
    </style>

    <script type="text/javascript">
        function SelectAll(id) {
            document.getElementById(id).focus();
            document.getElementById(id).select();
        }
    </script>
</head>

<body bgcolor="#E2EBF0">
    <br><br>
    <div class="flex-container">
        <center>
            <h1 class="font">ENKRIPSI DAN DESKRIPSI MENGGUNAKAN METODE VIGENERE CIPHER</h1>
            <br>
            <div>
                <form action="vigenere.php" method="post">
                    <div>
                        <button class="btn">VIGENERE CIPHER</button>

                    </div>
                </form>
                <form action="des.php" method="post">
                    <div>
                        <button class="btn" style="min-width: 225px;">DES CIPHER</button>
                    </div>
                </form>
            </div>
            <h7>created by</h7>
            <h5>1. Ahmad Syifaul Umam (a11.2019.11987) <br>
                2. Wildan Aldi Pamungkas (a11.2019.11995) <br>
                3. Amirul Wildan (a11.2019.11876) <br>
                4. Ivan Muhammad Reza (a11.2019.11876)

            </h5>
        </center>
    </div>

</body>

</html>