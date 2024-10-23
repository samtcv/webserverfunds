<DOCTYPE html>
    <html>
        <head>
            <title>BeerResult</title>

            <!-- sql connect -->
            <?php
                $beer_type = htmlspecialchars($_POST["beertype"]);
                $fav_beer = htmlspecialchars($_POST["fbeer"]);
                $server = "localhost";
                $username = "sam";
                $password = "2004";
                $database = "beer";
                $conn = mysqli_connect($server, $username, $password, $database);
            

                if (!$conn) {
                    die("connection failed: {mysqli_connect_error()}");
                }
                $sql = "select Name, Fav_beer_type, Fav_beer from fav_beer where Fav_beer_type = '{$beer_type}';";
                $sql2 = "select Name, Fav_beer_type, Fav_beer from fav_beer where Fav_beer_type = '{$fav_beer}';";
                $result = mysqli_query($conn, $sql);
                $result2 = mysqli_query($conn, $sql2);
            
            ?>



        </head>
        <body>
            <div>
                <h1>Favourite beers</h1>
                <p>Who has the same favourite beer as you?</p>
            </div>

            <div>
                
                People who's favourite beer type is also <?= $beer_type ?>:<br>
                <?php
                    foreach($result as $row)
                    {
                        echo "{$row['Name']} - Favourite beer: {$row['Fav_beer']}\n";
                    }
                    mysqli_close($conn);
                ?>
                <br><br>
                People who's favourite beer is also <?= $fav_beer ?>:<br>
                <?php
                    foreach($result2 as $row)
                    {
                        echo "{$row['Name']} - Favourite beer type: {$row['Fav_beer_type']}\n";
                    }
                    mysqli_close($conn);
                ?>
                <br><br>

            </div>

            <div>
                <h2>Links</h2>
                <a href="index.html">Home Page</a><br>
                <a href="Contestants.html">The contestants</a><br>
                <a href="beerlist.php">Favourite Beers</a><br>
                <a href="Signup.html">Signup!</a><br><br>
            </div>
        </body>
    </html>