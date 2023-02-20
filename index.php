<!doctype html>
<html lang="en">
    <head>
        <title>Document</title>
        <style>
            body {
                display: grid;
                place-items: center;
                margin: 0;
                font-family: sans-serif;
                height: 100vh;
            }
        </style>
    </head>
    <body>
    <?php
        $book = "Dark Matters";
        $hasRead = 0;

         if($hasRead === true) {
            $message = "You have read Dark Matters!";
        } else {
             $message = "You have not read Dark Matters!";
         }
    ?>

        <h1><?php echo $message; ?></h1>
    </body>
</html>
