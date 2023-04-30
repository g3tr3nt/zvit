<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="assets/q.css">
    <title><?= 'J&B' ?></title>
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
            <img src="b2.png" class="b2">
        </div>
        <div class="bshoptext">
            <p class="neonText"><i class="name">J&B</i> </p>
            <p class="neonText"><i class="cost">21.5$-25.3$</i></p>
            <button type="submit" class="buy2">Buy now</button>
            <p class="neonText"><i class="stext2">J&B is a brand of blended Scotch whisky owned by Diageo. It was created in the mid-19th century
                    by Giacomo Justerini and George Johnson. The brand's logo is a Stag and a cross.
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