<DOCTYPE html>
    <html>
        <head>
            <title>led</title>

        </head>
        <body>
            <div>
                <h1>Turn on the LED!</h1>
            </div>

            

            <script>

                async function toggle() {   
                    let file = await fetch("gpio.php");
                }
                
            </script>



            <div>
                
            
                <button type="button" onclick="toggle()">Toggle</button><br><br>
                
               

            </div>

            <div>
                <h2>Links</h2>
                <a href="index.html">Home Page</a><br>
                <a href="beerlist.php">Favourite Beers</a><br>
                <a href="Contestants.html">The contestants</a><br><br>
            </div>
        </body>
    </html>
