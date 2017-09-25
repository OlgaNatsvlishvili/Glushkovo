<?php include_once 'core/core.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Инфраструктура</title>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/jquery.imagemapster.min.js"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/index.css">
</head>
<body>
    <div class="container">
            <div class="header">
                <div class="row">
                    <div class="col-md-3"><a href="index.php"><img src="img/_n.png" style="background: rgba(0, 0, 0, 0.6);padding-right: 20px;padding-bottom: 12px;"></a></div>
                    <div class="col-md-3 phone">
                        <b>Заказать звонок </b> <span style="padding: 7px;" class="glyphicon glyphicon-earphone"></span> +ххх хххх хххх
                    </div>
                    <div class="col-md-6 menu">
                        <?php foreach (core\getMenu() as $m) { ?>
                        <?php if (!empty($m['items'])) { ?>
                        <div class="dropdown">
                            <a href="<?= $m['url'] ?>" class="dropbtn"><?= $m['name'] ?></a>
                            <div class="dropdown-content">
                                <?php foreach ($m['items'] as $i) { ?>
                                <a href="<?= $i['url'] ?>" class="dropbtn"><?= $i['name'] ?></a>
                                <?php } ?>
                            </div>
                        </div>
                        <?php } else { ?>
                            <a href="<?= $m['url'] ?>"><?= $m['name'] ?></a>
                        <?php }} ?>
                    </div>
                </div>
                <div class="row structure">
                    <div class="col-md-6">
                        <div class="infra">
                            <h5 class="title">Инфраструктура</h5>
                            <h2>Парк Глушково</h2>
                            <p>На территории ЖК предусмотрены парковочные места для личных авто, детская площадка, газоны, асфальтированные дорожки.</p>
                            <p>В ЖК будет входить современный 2-х этажный торгово развлекательный центр на 2500 кв.м,  включавший в себя торговую зону для семейных покупок, детскую развлекательную игровую зону, кафе, торговые ряды и офисы.</p>
                        </div>
                    </div>
                </div>
            </div>
        <div class="row plan-2">
            <div class="col-md-12">
                <img src="img/bird4-(2).jpg" alt="infrasructure">
            </div>
        </div>
        <div class="infrastructure" style="min-height: 381px">
            <div class="row">
                <div class="col-md-1"></div>
                    <div class="col-md-3">
                        <h3 style="text-align: center;">2500<spam>M<sup>2</sup></spam></h3>
                        <p style="text-align: center;">торгово развлекательный<br>центр</p>
                    </div>
                    <div class="col-md-3">
                        <h3 style="text-align: center;">10000<spam>M</spam></h3>
                        <p style="text-align: center;">асвальтированных<br>дорожек</p>
                    </div>
                    <div class="col-md-3">
                        <h3 style="text-align: center;">175<spam>квартир</spam></h3>
                        <p style="text-align: center;">жилой комплекс из 5-ти и<br>3-х этажных домов</p> 
                    </div>
            </div>
            
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-3">
                        <h3 style="text-align: center;">250<spam>M</spam></h3>
                        <p style="text-align: center;">личного пляжа<br>на реке Сейм</p>
                    </div>
                    <div class="col-md-3">
                        <h3 style="text-align: center;">2<spam>детских сада</spam></h3>
                        <p style="text-align: center;">на територии ЖК 2й<br>очередью будет построенно</p>
                    </div>
                    <div class="col-md-3">
                        <h3 style="text-align: center;">2,5<spam>га</spam></h3>
                        <p style="text-align: center;">огромный парк примыкающий<br>к територии ЖК</p> 
                    </div>
                </div>
        </div>
        <div class="row">
                 <div class="col-md-12">
                     <div class="footer"></div>
                </div>
            </div>
    </div>
</body>
</html>