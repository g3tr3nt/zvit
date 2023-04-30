<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="assets/q.css">
    <title><?= 'Black Is Beautiful' ?></title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href='https://fonts.googleapis.com/css?family=Vibur:400' rel='stylesheet' type='text/css'>
</head>
<body>
<div class="page">
    <header id="header" class="header">
        <h1 class="neonText">
            Beer Shop
        </h1>
        <div class="list1">
            <ul class="a1">
                <li class="l1"><a href="index.php">Home</a></li>
                <li class="l1"><a href="index.php">Shop</a></li>

                <li class="l1"><a href="https://khmnu.edu.ua/">Blog Page</a></li>
                <li class="l1"><a href="https://t.me/g3tr3nt">Contact Us</a></li>
            </ul>
        </div>
        <div class="q">
            <input class="searchInput" type="text" name="" placeholder="Search">
            <button class="searchButton">
                <i class="material-icons">
                    <img class="search" src="search.png">
                </i>
            </button>
        </div>

    </header>
    <main  class="main">
        <div class="bshop">
            <img src="blackbeer.jpg" class="b2">
        </div>
        <div class="bshoptext">
            <p class="neonText"><i class="name">Black Is Beautiful</i> </p>
            <p class="neonText"><i class="cost">4.3$-31.5$</i></p>
            <button type="submit" class="buy">Buy now</button>
            <p class="neonText"><i class="stext3">Black is Beautiful is a collaborative initiative spearheaded by Weathered Souls Brewing Co. in San Antonio, Texas to bring awareness
                    to the injustices that many people of color face daily. The initiative encourages breweries to create their own version of the Black is Beautiful beer and donate
                    the proceeds to local foundations that support police brutality reform and legal defenses for those who have been wronged.

            </p>
        </div>
    </main>

    <footer class="footer">
        <div class="reg">
            <section class="sub_block new_dex">
                <form id="subscription_form" class="form_sub">
                    <p class="neonText">Subscribe for news<br><i class="q1">Subscribe to recieve news about sales and giveaways </i></p>
                    <input type="email" class="fsearch" placeholder="E-Mail">
                    <input type="text" class="pass" placeholder="Name">
                    <div class="button">
                        <button type="submit" class="sub">Subscribe</button>
                    </div>
                </form>
            </section>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="assets/asd.js"></script>
</body>
</html>
