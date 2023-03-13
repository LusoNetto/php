<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Luso Netto PHP</title>
</head>
<body>
    <h1>Luso Netto Request / Response</h1>
    <p>The SHA256 hash of "Charles Severance" is </p>
    <?php
        print hash('sha256', 'Charles Severance');
    ?>
    <br>
    <p>ASCII ART:</p>
    <pre>    **</pre>
    <pre>    **</pre>
    <pre>    **</pre>
    <pre>    **</pre>
    <pre>    **</pre>
    <pre>    **</pre>
    <pre>    ***********</pre>

    <a href="./check.php">Click here to check the error setting</a>
    <a href="./fail.php">Click here to cause a traceback</a>
</body>
</html>