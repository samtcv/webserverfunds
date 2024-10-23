<DOCTYPE html>
    <html>
        <head>
            <title>BeerResult</title>

            <!-- sql connect -->
            <?php
                $beer_type = htmlspecialchars($_get["beertype"]);
                $server = "localhost";
                $username = "sam";
                $password = "2004";
                $database = "beer";
                $conn = mysqli_connect($server, $username, $password, $database);
            

                if (!$conn) {
                    die("connection failed: {mysqli_connect_error()}");
                }
                $sql = "select distinct Name, Fav_beer_type from fav_beer where Fav_beer_type = '{$beer_type}';";
                $result = mysqli_query($conn, $sql);
            
            ?>



        </head>
        <body>
            <div>
                <h1>Favourite beers</h1>
                <p>Who has the same favourite beer as you?</p>
            </div>

            <div>
                You selected favourite beer type <?= $beer_type ?>.<br/>
                <?php
                    foreach($result as $row)
                    {
                        echo "{$row['Name']}'s favourite beer type is also {$row['Fav_beer_type']}\n";
                    }
                    mysqli_close($conn);
                ?>

            </div>

            <div>
                <h2>Links</h2>
                <a href="index.html">Home Page</a><br>
                <a href="Contestants.html">The contestants</a><br>
                <a href="Signup.html">Signup!</a><br><br>
            </div>
        </body>
    </html>