<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form method="post">
        <textarea name="log" id="log"></textarea>
        <button type="submit">enter</button>
    </form>

    <?php

if (isset($_POST["log"])) {
        $shuesh = $_POST["log"];
        $date = getdate();
        $lok = fopen("log.txt", "a");
        fwrite($lok, "$shuesh" . $date['mday'] . $date['mon'] . $date['year'] . "\n" . "\r");
        fclose($lok);
    }



    ?>


</body>

</html>