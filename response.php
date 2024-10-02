<DOCTYPE HTML>
    <html>
        <head>
            <title>dump</title>
        </head>

        <body>
            <div>
            <p> Welcome <?= htmlspecialchars($_POST['fname']) . " " . htmlspecialchars($_POST['lname']) ?> 
            to the BEERLYMPIC! ...or should I say <?= html special chars($_POST['gtag']) ?>!!
            </p> <br>

            <p> You've selected that you <br>
            <?= htmlspecialchars($_POST['ride1']) . " " . htmlspecialchars($_POST['ride2']) . " " .
            htmlspecialchars($_POST['ride3']) ?> <br>
            a driver
            </p> <br>

            <p> Get ready for lots of fun activities and lots of <?= htmlspecialchars($_POST['robot']) ?>!! 
            But make sure to <?= htmlspecialchars($_POST['agreement']) ?>!
            And don't drink if your underage! We have you birthday: <br>
            <?= htmlspecialchars($_POST['birthday']) ?>
            </p> <br>
            </div>

        </body>

    </html>
