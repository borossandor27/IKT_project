<!DOCTYPE html>

<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            span {
                font-family: 'Courier New', monospace;
            }
            span#egyenlo {
                color: blue;
            }
        </style>
    </head>
    <body>
        
        <div>
            <p>A klienstől érkező adatok alapján az index.php-ban átirányítunk.</p>
            <?php
                foreach($_SERVER as $key => $value){
                    echo '$_SERVER[<strong>"'.$key.'</strong>"] <span id="egyenlo">=></span> <span>'.$value."</span><br />";
                }
            ?>  
        </div>
    </body>
</html>
