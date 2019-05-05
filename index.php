<?php

//Declaring blank strings to prevent errors
$string = "";
$string_length = "";
$algorithm = "";
$salt = "";
$salt_length = "";
$hashed_string = "";
$length_output = "";

if(isset($_POST['generate_hash']))
{
    $string = $_POST['string'];
    $algorithm = $_POST['algorithm'];
    $salt = $_POST['salt'];
    
    $data = $string . $salt;
    
    $hashed_string = hash($algorithm, $data);
    $hash_length = strlen($hashed_string);
    $hashed_string = "Hashed Text  [$hash_length]: $hashed_string";
    
    $length = strlen($hashed_string);
    $length_output = "[$length]";
    
    $string_length = strlen($string);
    $string = "Input Text [$string_length]: $string";
    
    $salt_length = strlen($salt);
    $salt = "Input Salt [$salt_length]: <br> $salt";
}

?>
   

<html>
    <head>
        <title>Hash Encryption</title>
    </head>
    <link href="style.css" type="text/css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    
    <script>
        $(document).ready(function(){
            $("button").click(function(){
                $.ajax({url: "demo_test.txt", success: function(result){
                    $("#div1").html(result);
                }});
            });
        });
    </script>
    
    <body>
        <div class="background">
            <div class="main_column">
                <div class="header">
                    <h1>Hash Strings</h1>
                </div>
                <div class="form">
                   <form method="post" action="index.php">
                       <textarea name="string" placeholder="Enter Your Text" required></textarea>
                        <select name="algorithm" required>
                            <option value="" selected disabled hidden>Algorithm</option>
                            <option value="md2">MD2</option>
                            <option value="md4">MD4</option>
                            <option value="md5">MD5</option>
                            <option value="sha1">SHA-1</option>
                            <option value="sha224">SHA-224</option>
                            <option value="sha256">SHA-256</option>
                            <option value="sha384">SHA-384</option>
                            <option value="sha512/224">SHA-512/224</option>
                            <option value="sha512/256">SHA-512/256</option>
                            <option value="sha512">SHA-512</option>
                            <option value="sha3-224">SHA-3-224</option>
                            <option value="sha3-256">SHA-3-256</option>
                            <option value="sha3-384">SHA-3-384</option>
                            <option value="sha3-512">SHA-3-512</option>
                            <option value="ripemd128">RipeMD 128</option>
                            <option value="ripemd160">RipeMD 160</option>
                            <option value="ripemd256">RipeMD 256</option>
                            <option value="ripemd320">RipeMD 320</option>
                            <option value="whirpool">Whirpool</option>
                            <option value="tiger123,3">Tiger128,3</option>
                            <option value="tiger160,3">Tiger160,3</option>
                            <option value="tiger192,3">Tiger192,3</option>
                            <option value="tiger123,4">Tiger128,4</option>
                            <option value="tiger160,4">Tiger160,4</option>
                            <option value="tiger192,4">Tiger192,4</option>
                            <option value="snefru">Snefru</option>
                            <option value="snefru256">Snefru256</option>
                            <option value="gost">Gost</option>
                            <option value="gost-crypto">Gost-Crypto</option>
                            <option value="adler32">Adler 32</option>
                            <option value="crc32">CRC32</option>
                            <option value="crc32b">CRC32b</option>
                            <option value="fnv132">FNV 132</option>
                            <option value="fnv1a32">FNV 1a32</option>
                            <option value="fnv164">FNV 164</option>
                            <option value="fnv1a64">FNV 1a64</option>
                            <option value="joaat">Joaat</option>
                            <option value="haval128,3">Haval128,3</option>
                            <option value="haval160,3">Haval160,3</option>
                            <option value="haval192,3">Haval192,3</option>
                            <option value="haval224,3">Haval224,3</option>
                            <option value="haval256,3">Haval256,3</option>
                            <option value="haval128,4">Haval128,4</option>
                            <option value="haval160,4">Haval160,4</option>
                            <option value="haval192,4">Haval192,4</option>
                            <option value="haval224,4">Haval224,4</option>
                            <option value="haval256,4">Haval256,4</option>
                            <option value="haval128,5">Haval128,5</option>
                            <option value="haval160,5">Haval160,5</option>
                            <option value="haval192,5">Haval192,5</option>
                            <option value="haval224,5">Haval224,5</option>
                            <option value="haval256,5">Haval256,5</option>
                        </select>
                        <textarea name="salt" id="salt_box" placeholder="Enter Your Salt (Optional)"></textarea>
                        <abbr title="Generate Random String of 20 characters"><input type="button" name="generate_salt" id="salt" value="Generate Salt"></abbr>
                        <input type="submit" name="generate_hash" id="hash" value="Generate Hash"><br>
                        <input type="reset" name="reset" value="Reset">
                    </form>
                </div>
                <div class="result">
                    <h1 id="hashed_result">
                    <?php
                        echo $string;
                        echo "<br>";
                        echo $salt;
                        echo "<br>";
                        echo "<br>";
                        echo $hashed_string;
                    ?></h1>
                </div>
            </div>
        </div>
    </body>
    
    <script src="js.js"></script>
    <script src="pr.js"></script>
</html>