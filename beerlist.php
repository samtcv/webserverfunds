<DOCTYPE html>
    <html>
        <head>
            <title>BeerList</title>

            <!-- sql connect -->
            <?php
                $server = "localhost";
                $username = "sam";
                $password = "2004";
                $database = "beer";
                $conn = mysqli_connect($server, $username, $password, $database);
            

                if (!$conn) {
                    die("connection failed: {mysqli_connect_error()}");
                }
                $sql = "select distinct * from fav_beer;";
                $result = mysqli_query($conn, $sql);
            
            ?>



        </head>
        <body>
            <div>
                <h1>Favourite beers</h1>
                <p>Name your favourite beer and your rating !</p>
            </div>

            
            


           
            
            <div>
                <form action="beerresult.php" method="POST">
                    <label for="fname">First Name:</label>
                    <input type="text" id="fname" name="fname" required><br><br>
                    <label for="beertype">Favourite beer type:</label>
                    <select id="beertype" name="beertype">
                        <?php 
                            foreach($result as $row)
                            {
                                echo "<option value='{$row['Fav_beer_type']}'>{$row['Fav_beer_type']}</option>\n";
                            }

                            mysqli_close($conn);
                        
                        ?>
                    </select>
                    <br/>
                    <input type="submit" value="submit"/>
                </form>

            </div>

            <div>
                <h2>Links</h2>
                <a href="index.html">Home Page</a><br>
                <a href="Contestants.html">The contestants</a><br>
                <a href="Signup.html">Signup!</a><br><br>
            </div>
        </body>
    </html>