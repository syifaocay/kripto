<?php
include "convert.php";

include('./template.php');

$t = new Template();

$t->header();

?>

<html>

<head>
    <title>vigenere cipher</title>
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

        .tombol {
            padding: 10px 25px;
            font-size: 16px;
            border: none;
            position: relative;
            cursor: pointer;
            box-sizing: border-box;
            overflow: hidden;
            background: #3b3b3b;
            border-radius: 5px;
            min-width: 125px;
            color: #fff;
            z-index: 0;
            text-transform: uppercase;
            font-weight: 600;
            letter-spacing: 2px;
            transition: all 0.3s;
        }

        .tombol::before {
            content: "";
            position: absolute;
            display: block;
            top: 0;
            left: -50px;
            width: 70%;
            height: 100%;
            background:
                linear-gradient(90deg, transparent, #ffffff71, transparent);
            transition: all 1s;
            z-index: -1;
            transform: translateX(-120px) skew(-20deg);
        }

        .tombol:hover::before {
            transform: translateX(300px)skew(-200deg);
        }

        .tombol:hover {
            background: #ff006a;
        }
    </style>
    <script type="text/javascript">
        function SelectAll(id) {
            document.getElementById(id).focus();
            document.getElementById(id).select();
        }
    </script>
</head>

<body>
    <br><br>

    <center>
        <br>
        <div class="card bg-light mb-3" style="max-width: 800px;">
            <form action="" method="post">
                <div style="margin: 10px;">
                    <label>Kunci</label>
                    <input type="text" class="form-control" name="key_vigenere" id="key_vigenere" onclick="SelectAll('key_vigenere')" style="width: 77%;" />
                    <small id="messageHelp" class="form-text text-muted"></small>
                </div>
                <div>
                    <label>Plan Text</label>
                    <textarea rows="4" class="form-control" name="plantext_vigenere" id="plantext_vigenere" cols="33" onclick="SelectAll('plantext_vigenere')" style="width: 75%;"></textarea><br />
                    <!-- <input type="submit" class="form-control" value="Info?" onclick="InfoVigenere()" /> -->

                    <small id="keyHelp" class="form-text text-muted"></small>
                </div>
                <div style="margin: 10px;">
                    <button type="submit" class="tombol" name="encrypt_vigenere" value="Encrypt">Enkripsi</button>
                    <button type="submit" class="tombol" name="decrypt_vigenere" value="Decrypt">Dekripsi</button>
                    <button type="reset" class="tombol" value="Reset" style="background: #e36666;">Reset</button>
                </div>
            </form>
        </div>
    </center>

    <br>
    <center>
        <div class="card bg-light mb-3" style="max-width: 800px;">
            <form action="" method="post">
                <div class="form-group">

                    <label><b>Cipher Text</b></label>
                    <br>

                    <?php
                    if ((isset($_POST['key_vigenere'])) && (isset($_POST['plantext_vigenere'])) && (isset($_POST['encrypt_vigenere']))) {
                        $key = $_POST['key_vigenere'];
                        $plantext = $_POST['plantext_vigenere'];
                        $len_key = strlen($key);
                        $len_plantext = strlen($plantext);
                        $split_key = str_split($key);
                        $split_plantext = str_split($plantext);

                        echo '<textarea rows="4" class="form-control" id="result" cols="33" onclick="SelectAll(\'result\')" style="width: 75%">';
                        $i = 0;
                        for ($j = 0; $j < $len_plantext; $j++) {
                            if ($i == $len_key) {
                                $i = 0;
                            }
                            $split_key2[$j] = $split_key[$i];
                            $i++;
                        }
                        for ($k = 0; $k < $len_plantext; $k++) {
                            $a = char_to_dec($split_key2[$k]);
                            $b = char_to_dec($split_plantext[$k]);
                            if (($a && $b) != null) {
                                echo (tabel_vigenere_encrypt($a, $b));
                            } else {
                                echo $split_plantext[$k];
                            }
                        }

                        echo '</textarea><br/>';
                    } else if ((isset($_POST['key_vigenere'])) && (isset($_POST['plantext_vigenere'])) && (isset($_POST['decrypt_vigenere']))) {
                        $key = $_POST['key_vigenere'];
                        $plantext = $_POST['plantext_vigenere'];
                        $len_key = strlen($key);
                        $len_plantext = strlen($plantext);
                        $split_key = str_split($key);
                        $split_plantext = str_split($plantext);

                        echo '<textarea rows="4" class="form-control" id="result" cols="33" onclick="SelectAll(\'result\')" style="width: 75%">';
                        $i = 0;
                        for ($j = 0; $j < $len_plantext; $j++) {
                            if ($i == $len_key) {
                                $i = 0;
                            }
                            $split_key2[$j] = $split_key[$i];
                            $i++;
                        }

                        for ($k = 0; $k < $len_plantext; $k++) {
                            $a = char_to_dec($split_key2[$k]);
                            $b = char_to_dec($split_plantext[$k]);
                            if (($a && $b) != null) {
                                echo (tabel_vigenere_decrypt($b, $a));
                            } else {
                                echo $split_plantext[$k];
                            }
                        }

                        echo '</textarea><br/>';
                    } else {
                        echo "";
                    }
                    ?>
                    </td>
                    </tr>
                    <tr>
                        <td valign="top">

                        </td>
                    </tr>
                </div>
            </form>
        </div>

</body>

</html>
<br><br><br>
</center>
<?php
$t->footer();

?>