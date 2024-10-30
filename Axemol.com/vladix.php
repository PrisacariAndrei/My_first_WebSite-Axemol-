<?php include("rates.php");?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="./style.css">
    <script src="./script.js"></script>
    <!-- <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&display=swap" rel="stylesheet"> -->
    <title>AXEMOL.com</title>
</head>

<body>


<!--
    <svg style ="display: none;">
        <symbol id = "facebook" viewBox="0 0 24 24">
            <path d="m15.997 3.985h2.191v-3.816c-.378-.052-1.678-.169-3.192-.169-3.159 0-5.323 1.987-5.323 5.639v3.361h-3.486v4.266h3.486v10.734h4.274v-10.733h3.345l.531-4.266h-3.877v-2.939c.001-1.233.333-2.077 2.051-2.077z"/>
        </symbol>

        <symbol id = "facebook" viewBox="0 0 24 24">
            <path d="m12 24c6.629 0 12-5.371 12-12s-5.371-12-12-12-12 5.371-12 12 5.371 12 12 12zm-6.509-12.26 11.57-4.461c.537-.194 1.006.131.832.943l.001-.001-1.97 9.281c-.146.658-.537.818-1.084.508l-3-2.211-1.447 1.394c-.16.16-.295.295-.605.295l.213-3.053 5.56-5.023c.242-.213-.054-.333-.373-.121l-6.871 4.326-2.962-.924c-.643-.204-.657-.643.136-.953z"/>
        </symbol>
    </svg>
-->

    <!--Header-->
    <header class="header">
        <div class="container">
            <div class="header__inner">
                <div class="header__logo">Axemol</div>

                <nav class="nav">
                    <div id="compani1" class=" compain nav__link" href = ""> <a class="href" href="index.php">VECTOR-AP</a></div>
                    <div id="compani2" class=" compain nav__link" href = ""> <a class="href" href="vladix.php">VLADIX-MV</a></div>
                    <div id="compani3" class=" compain nav__link" href = ""><a class="href" href="maxbemol.php">MAXBEMOL</a></div>
                    <div id="compani4" class=" compain nav__link" href = ""><a class="href" href="axemol.php">AXEMOL</a></div>
                    <!-- <a class="nav__link" href="#">Филиал 3</a> -->
                    <div class="contact nav__link href">Contacte</div>

                </nav>
                
                <button class="burger" type="button">
                    <span class = "burger_item"></span>
                </button>
            </div>
        </div>
    </header>


        <div class="sidebar">
                <div class="branch__div">

                    <ul class = "branch">
                        <li class = "branch1">Sediu central: <a class="li_adres">Str.Sciusev,55</a></li>
                        <li class = "branch2 ">Sucursala Nr.1: <a class="li_adres">Str.Testemitanu,23</a></li>
                        <li class = "branch3 ">Sucursala Nr.2: <a class="li_adres">Str.Sarmizegetusa,35/1</a></li>
                    </ul>

                </div>
           </div>

<div class="content">
        <!-- sidebar branches start -->
        <div class="container">



        <!-- sidebar branches end -->

        <div id = "branch1" class="main-content">

            <div class="curs">
                <div class="container">
                    <div class="curs__items">

                        <h1 class="curs__title">VLADIX-MV:  Sediu central</h1>
                        <p class="adres">Str.Sciusev,55</p>
                        <a class="btn  btn--gray" href="https://goo.gl/maps/hdAQCk7tEmpMwRYR9" target="_blank">adresa pe hartă</a>
                        <p class="update__date">Numar de telefon:  +373 672 89 301</p>

                        <table class="main__container main__container1" id="first">
                            <tr class="text__div">
                                <th>
                                    <p class="text">Buy</p>
                                </th>
                                <th>
                                    <p class="Currency_text">Currency</p>
                                </th>
                                <th>
                                    <p class="text">Sell</p>
                                </th>
                            </tr>

                            <tr class="currencies">
                                <td>
                                    <p class="block"><?php echo get_num("vladixmv","sediucentral","usd","buy");?></p>
                                </td>
                                <td><img src="./assets/icons/united-states.png" alt="" class="icon"></td>
                                <td>
                                    <p class="block2"><?php echo get_num("vladixmv","sediucentral","usd","sell");?></p>
                                </td>
                            </tr>

                            <tr class="currencies">
                                <td>
                                    <p class="block"><?php echo get_num("vladixmv","sediucentral","eur","buy");?></p>
                                </td>
                                <td><img src="./assets/icons/eu-main-flag.png" alt="" class="icon"></td>
                                <td>
                                    <p class="block2"><?php echo get_num("vladixmv","sediucentral","eur","sell");?></p>
                                </td>
                            </tr>

                            <tr class="currencies">
                                <td>
                                    <p class="block"><?php echo get_num("vladixmv","sediucentral","rub","buy");?></p>
                                </td>
                                <td><img src="./assets/icons/russia-flag.png" alt="" class="icon"></td>
                                <td>
                                    <p class="block2"><?php echo get_num("vladixmv","sediucentral","rub","sell");?></p>
                                </td>
                            </tr>

                            <tr class="currencies">
                                <td>
                                    <p class="block"><?php echo get_num("vladixmv","sediucentral","ron","buy");?></p>
                                </td>
                                <td><img src="./assets/icons/romania-flag.png" alt="" class="icon"></td>
                                <td>
                                    <p class="block2"><?php echo get_num("vladixmv","sediucentral","ron","sell");?></p>
                                </td>
                            </tr>

                            <tr class="currencies">
                                <td>
                                    <p class="block"><?php echo get_num("vladixmv","sediucentral","uah","buy");?></p>
                                </td>
                                <td><img src="./assets/icons/ukraine-flag.png" alt="" class="icon"></td>
                                <td>
                                    <p class="block2"><?php echo get_num("vladixmv","sediucentral","uah","sell");?></p>
                                </td>
                            </tr>

                            <tr class="currencies">
                                <td>
                                    <p class="block"><?php echo get_num("vladixmv","sediucentral","gbp","buy");?></p>
                                </td>
                                <td><img src="./assets/icons/united-kingdom.png" alt="" class="icon"></td>
                                <td>
                                    <p class="block2"><?php echo get_num("vladixmv","sediucentral","gbp","sell");?></p>
                                </td>
                            </tr>
                            <tr class="currencies cb1">
                                <td><a class="btn2 b1 btn--gray">All currencies</a></td>
                            </tr>
                        </table>
                    </div>
                 </div>
            </div>
        </div>
     </div>
</div>

<div class="content">
        <!-- sidebar branches start -->
        <div class="container">



        <!-- sidebar branches end -->

        <div id = "branch2" class="main-content">

            <div class="curs">
                <div class="container">
                    <div class="curs__items">

                        <h1 class="curs__title">VLADIX-MV:  Sucursala Nr.1</h1>
                        <p class="adres">Str.Testemitanu,23</p>
                        <a class="btn  btn--gray" href="https://goo.gl/maps/hdAQCk7tEmpMwRYR9" target="_blank">adresa pe hartă</a>
                        <p class="update__date">Numar de telefon:  +373 672 89 304</p>

                        <table class="main__container main__container2" id="first">
                            <tr class="text__div">
                                <th>
                                    <p class="text">Buy</p>
                                </th>
                                <th>
                                    <p class="Currency_text">Currency</p>
                                </th>
                                <th>
                                    <p class="text">Sell</p>
                                </th>
                            </tr>

                            <tr class="currencies">
                                <td>
                                    <p class="block"><?php echo get_num("vladixmv","sucursalanr1","usd","buy");?></p>
                                </td>
                                <td><img src="./assets/icons/united-states.png" alt="" class="icon"></td>
                                <td>
                                    <p class="block2"><?php echo get_num("vladixmv","sucursalanr1","usd","sell");?></p>
                                </td>
                            </tr>

                            <tr class="currencies">
                                <td>
                                    <p class="block"><?php echo get_num("vladixmv","sucursalanr1","eur","buy");?></p>
                                </td>
                                <td><img src="./assets/icons/eu-main-flag.png" alt="" class="icon"></td>
                                <td>
                                    <p class="block2"><?php echo get_num("vladixmv","sucursalanr1","eur","sell");?></p>
                                </td>
                            </tr>

                            <tr class="currencies">
                                <td>
                                    <p class="block"><?php echo get_num("vladixmv","sucursalanr1","rub","buy");?></p>
                                </td>
                                <td><img src="./assets/icons/russia-flag.png" alt="" class="icon"></td>
                                <td>
                                    <p class="block2"><?php echo get_num("vladixmv","sucursalanr1","rub","sell");?></p>
                                </td>
                            </tr>

                            <tr class="currencies">
                                <td>
                                    <p class="block"><?php echo get_num("vladixmv","sucursalanr1","ron","buy");?></p>
                                </td>
                                <td><img src="./assets/icons/romania-flag.png" alt="" class="icon"></td>
                                <td>
                                    <p class="block2"><?php echo get_num("vladixmv","sucursalanr1","ron","sell");?></p>
                                </td>
                            </tr>

                            <tr class="currencies">
                                <td>
                                    <p class="block"><?php echo get_num("vladixmv","sucursalanr1","uah","buy");?></p>
                                </td>
                                <td><img src="./assets/icons/ukraine-flag.png" alt="" class="icon"></td>
                                <td>
                                    <p class="block2"><?php echo get_num("vladixmv","sucursalanr1","uah","sell");?></p>
                                </td>
                            </tr>

                            <tr class="currencies">
                                <td>
                                    <p class="block"><?php echo get_num("vladixmv","sucursalanr1","gbp","buy");?></p>
                                </td>
                                <td><img src="./assets/icons/united-kingdom.png" alt="" class="icon"></td>
                                <td>
                                    <p class="block2"><?php echo get_num("vladixmv","sucursalanr1","gbp","sell");?></p>
                                </td>
                            </tr>
                            <tr class="currencies cb2">
                                <td><a class="btn2 b2 btn--gray">All currencies</a></td>
                            </tr>
                        </table>
                    </div>
                 </div>
            </div>
        </div>
     </div>
</div>

<div class="content">
        <!-- sidebar branches start -->
        <div class="container">



        <!-- sidebar branches end -->

        <div id = "branch3" class="main-content">

            <div class="curs">
                <div class="container">
                    <div class="curs__items">

                        <h1 class="curs__title">VLADIX-MV:  Sucursala Nr.2</h1>
                        <p class="adres">Str.Sarmizegetusa,35/1</p>
                        <a class="btn  btn--gray" href="https://goo.gl/maps/hdAQCk7tEmpMwRYR9" target="_blank">adresa pe hartă</a>
                        <p class="update__date">Numar de telefon:  +373 677 89 300</p>

                        <table class="main__container main__container3" id="first">
                            <tr class="text__div">
                                <th>
                                    <p class="text">Buy</p>
                                </th>
                                <th>
                                    <p class="Currency_text">Currency</p>
                                </th>
                                <th>
                                    <p class="text">Sell</p>
                                </th>
                            </tr>

                            <tr class="currencies">
                                <td>
                                    <p class="block"><?php echo get_num("vladixmv","sucursalanr2","usd","buy");?></p>
                                </td>
                                <td><img src="./assets/icons/united-states.png" alt="" class="icon"></td>
                                <td>
                                    <p class="block2"><?php echo get_num("vladixmv","sucursalanr2","usd","sell");?></p>
                                </td>
                            </tr>

                            <tr class="currencies">
                                <td>
                                    <p class="block"><?php echo get_num("vladixmv","sucursalanr2","eur","buy");?></p>
                                </td>
                                <td><img src="./assets/icons/eu-main-flag.png" alt="" class="icon"></td>
                                <td>
                                    <p class="block2"><?php echo get_num("vladixmv","sucursalanr2","eur","sell");?></p>
                                </td>
                            </tr>

                            <tr class="currencies">
                                <td>
                                    <p class="block"><?php echo get_num("vladixmv","sucursalanr2","rub","buy");?></p>
                                </td>
                                <td><img src="./assets/icons/russia-flag.png" alt="" class="icon"></td>
                                <td>
                                    <p class="block2"><?php echo get_num("vladixmv","sucursalanr2","rub","sell");?></p>
                                </td>
                            </tr>

                            <tr class="currencies">
                                <td>
                                    <p class="block"><?php echo get_num("vladixmv","sucursalanr2","ron","buy");?></p>
                                </td>
                                <td><img src="./assets/icons/romania-flag.png" alt="" class="icon"></td>
                                <td>
                                    <p class="block2"><?php echo get_num("vladixmv","sucursalanr2","ron","sell");?></p>
                                </td>
                            </tr>

                            <tr class="currencies">
                                <td>
                                    <p class="block"><?php echo get_num("vladixmv","sucursalanr2","uah","buy");?></p>
                                </td>
                                <td><img src="./assets/icons/ukraine-flag.png" alt="" class="icon"></td>
                                <td>
                                    <p class="block2"><?php echo get_num("vladixmv","sucursalanr2","uah","sell");?></p>
                                </td>
                            </tr>

                            <tr class="currencies">
                                <td>
                                    <p class="block"><?php echo get_num("vladixmv","sucursalanr2","gbp","buy");?></p>
                                </td>
                                <td><img src="./assets/icons/united-kingdom.png" alt="" class="icon"></td>
                                <td>
                                    <p class="block2"><?php echo get_num("vladixmv","sucursalanr2","gbp","sell");?></p>
                                </td>
                            </tr>
                            <tr class="currencies cb3">
                                <td><a class="btn2 b3 btn--gray">All currencies</a></td>
                            </tr>
                        </table>
                    </div>
                 </div>
            </div>
        </div>
     </div>
</div>


<div class = "contacts">
    <div class="container">
        <div class="contact__items">
           <h1 class = "contacts__title">Сontacts</h1>
           <div class="flex_box">
           <div class="contacts_block">
               <p class = "manager_title">Managers phone numbers</p>
               <p class="manager_number">+37345678901</p>
               <p class="manager_number">+37345678901</p>
           </div>
           <div class="contacts_block">
                <p class = "manager_title">Our social networks</p>
                <div class="social">
                <a href="" class="social__item">
                    <img src="./assets/icons/telegram.svg" alt="" height="25" class="social__img">
                </a>
                <a href="" class="social__item">
                    <img src="./assets/icons/facebook.svg" height="25" alt="" class="social__img">
                </a>
                </div>

           </div>

           </div>



        </div>
    </div>
</div>



</body>

</html>
