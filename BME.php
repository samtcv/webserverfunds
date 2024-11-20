
<DOCTYPE html>
    <html>
        <head>
            <title>BME</title>

        </head>
        <body>
            <?php

            $raw = `./bme280`;
            echo $raw;
            $deserialized = json_decode($raw, true);
            var_dump($deserialized);
            echo $deserialized["temperature"];


            ?>


        </body>
    </html>