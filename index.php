<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap');
    </style>

    <title>LOOKBACK SUPERADMIN CMS</title>
</head>

<body>
    <div class="parent">


        <div class="child">
            <!-- <iframe class="logo"
                src="https://mymailmapuaedu-my.sharepoint.com/personal/jynpascual_mymail_mapua_edu_ph/_layouts/15/embed.aspx?UniqueId=fe0269b4-d24f-43c5-8bd4-6bb208d90f8b"
                frameborder="0" scrolling="no" allowfullscreen title="logo.png">
            </iframe> -->
            <div class="login border">
                
                <?php if(isset($_GET['error'])) {?>
                <p class="error">
                    <?php echo $_GET['error']; } ?>
                </p>


                <form action="login.php" method="post">
                    <label for="username">USERNAME:</label></br>
                    <input type="text" id="username" name="username">
                    </br></br>

                    <label for="password">PASSWORD:</label></br>
                    <input type="password" id="password" name="password">
                    </br></br>
                    <button class="button" type="submit">LOGIN</button>
                </form>

            </div>

        </div>




        <p>
    </div>
</body>

</html>