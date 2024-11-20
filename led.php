<DOCTYPE html>
    <html>
        <head>
            <title>led</title>

        </head>
        <body>
            <div>
                <h1>Turn on the LED!</h1>
            </div>

            
            


            <!--If not-a-robot field is empty and unselected, set alarm saying reuired field-->
            <script>
                

                function set1() {   
                    <?= $output `gpio write 25 1`; ?>
                }
                function set0() {
                    <?= $output `gpio write 25 0`; ?>
                }
                function toggle() {
                    <?= $output `gpio toggle 25`; ?>
                }
                
            </script>

            <?= $output `gpio mode ` ?>

            <div>
                <form action="response.php" method="POST">
            
                    <button type="button" onclick="set1()">On</button><br><br>
                    <button type="button" onclick="set0()">Off</button><br><br>
                    <button type="button" onclick="toggle()">Toggle</button><br><br>
                
                </form>

            </div>

            <div>
                <h2>Links</h2>
                <a href="index.html">Home Page</a><br>
                <a href="beerlist.php">Favourite Beers</a><br>
                <a href="Contestants.html">The contestants</a><br><br>
            </div>
        </body>
    </html>
