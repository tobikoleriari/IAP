<?php

class layout{
    public function heading(){
        ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel = "stylesheet" href="css\style.css"/>
            <title>Document</title>
        </head>
        <body>
            <?php
    }
    public function footer(){
        ?>
        <div class="footer">
            Copy right &copy; ICS <?php print date("Y");?>
        </div>
        </body>
        </html>
        <?php
    }
}
