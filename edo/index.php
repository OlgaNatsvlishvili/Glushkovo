<?php include_once 'core/core.php'; ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>ЖК Парк Глушково</title>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="js/jquery.imagemapster.min.js"></script>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/index.css">

    </head>
    <body>
        <div class="container">
            <div class="header">
                <div class="row">
                    <div class="col-md-3">
                        <a href="index.php">
                            <img src="img/_n.png" style="background: rgba(0, 0, 0, 0.6);padding-right: 20px;padding-bottom: 12px;">
                        </a>
                    </div>
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
                <div class="row">
                    <div class="col-md-6">
                        <div class="top-left top-left-index">
                            <h1>Парк Глушково</h1>
                            <h4>Современный малоэтажный жилой комплекс</h4>
                            <div style="padding-top: 10px;"><a href="#contact" class="contact_a">Заказать просмотр</a></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row about">
                <div class="col-md-1">
                    <a name="about"></a>
                </div>
                <div class="col-md-4">
                    <div class="about-text">
                        <h5 class="title">Про нас</h5>
                        <h2>Парк Глушково</h2>
                        <p><b>это современный малоэтажный жилой комплекс из 5-и 3-х этажных домов на 175 квартир, расположенный в центре живописного поселка Глушково, Курской области.</b></p>
                        <p>На первом этапе возводиться дом на 42 квартиры из них 2-студиит, 10-однокомнатный и 30-2-х комнатных квартК и собственный благоустроенным пляж. Современная конструкция 3-х этажные домов из…. С застекленными балконами из стеклопакета, внешняя отделка кирпич. С центральным горячим, холодным водоснабжением и отоплением. Система канализации. (возведение 2 очередью)</p>
                        <p>В ЖК будет входить современный 2-х этажный торгово развлекательный центр на 2500 кв.м, включавший в себя торговую зону для семейных покупок, детскую развлекательную игровую зону, кафе, торговые ряды и офисы. С удобным заездом и выездом с центральной площади поселка. ЖК «Глушково Парк»-это новое слово в подходе к строительству жилых комплексов в регионе. </p>
                        <div style="padding-top: 10px;"><a href="#contact">Заказать просмотр</a></div>
                    </div> 
                </div>
                <div class="col-md-1">&nbsp;</div>
                <div class="col-md-5"><img src="img/7_n.png" style="width: 100%; margin-top: 50px;"></div>
                <div class="col-md-1">&nbsp;</div>
            </div>
            <div class="row plan">
                <div class="col-md-12">
                    <a name="plan"></a>
                    <h5 class="title"><a href="plan.php">Планировки</a></h5>
                    <p>На первом этапе возводиться дом на 42 квартиры из них 2-студиит.<br>10-однокомнатный и 30-2-х комнатных квартир</p>
                </div>
            </div>
            <div class="row plan-flat">
                <div class="col-md-4">
                    <h4><span class="number">Smart </span> квартира</h4>
                    <div><img src="img/smart.png"></div>
                    <div class="count" style="font-size: 11px;">На первом этапе возводиться дом на 42<br>квартиры из них 2-студиит</div>
                </div>
                <div class="col-md-4">
                    <h4><span class="number">1 </span>комнатная</h4>
                    <div ><img src="img/1room.png"></div>
                    <div class="count" style="font-size: 11px;">На первом этапе возводиться дом на 42<br>квартиры из них 2-студиит</div>
                </div>
                <div class="col-md-4">
                    <h4><span class="number">2 </span>комнатная</h4>
                    <div><img src="img/2room.png"></div>
                    <div class="count" style="font-size: 11px;">На первом этапе возводиться дом на 42<br>квартиры из них 2-студиит</div>
                </div>
            </div>
            <div class="row order">
                <div class="col-md-12">
                    <div class="view">
                        <a href="#contact">Заказать просмотр</a>
                    </div>
                </div>
            </div>
            <div class="infrastructure">
                <div class="row">
                    <div class="col-md-1"><a name="infastrutur"></a></div>
                    <div class="col-md-5">
                        <div class="structure">
                            <h5 class="title"><a href="infrastructure.php">Инфраструктура</a></h5>
                            <h2>Парк Глушково</h2>
                            <p>На территории ЖК предусмотрены парковочные места для личных авто, детская площадка, газоны, асфальтированные дорожки.</p>
                            <p>В ЖК будет входить современный 2-х этажный торгово развлекательный центр на 2500 кв.м,  включавший в себя торговую зону для семейных покупок, детскую развлекательную игровую зону, кафе, торговые ряды и офисы.</p>
                        </div>
                    </div>
                </div>
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
            <div class="region">
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-5"><img src="img/region.png" style="width: 100%; margin-top: 50px;"></div>
                    <div class="col-md-5">
                        <div class="our_region" style="padding-left:10px;">
                            <h5 class="title">Про наш край</h5>
                            <h2>Курская область</h2>
                            <p>Одна из самых крупных в Центрально-Черноземной полосе РФ, находится в центре России в лесостепной зоне на склонах Среднерусской возвышенности. Реки и озера, пастбища и луга, красивые дубравы и заповедные степи – неоценимое природное богатство Курской области.</p>
                            <p>В этих местах обитают свыше 300 видов позвоночных и несколько десятков тысяч беспозвоночных животных; насчитываются 255 видов птиц, среди которых знаменитый курский соловей, чьи трели считаются наивысшим достижением птичьего вокала.</p>
                            <p>В течение нескольких столетий формировался культурный потенциал и ресурсы Курской области. На территории области находятся множество памятников архитектуры, археологии и искусства. В этих местах большое количество различных соборов и монастырей – шедевров архитектуры эпохи Растрелли.</p>
                            <div style="padding-top: 20px;"><a href="#contact">Заказать просмотр</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="installment" style="margin-top: 50px;">
                <div class="row">
                    <div class="col-md-12" style="text-align: center;">
                        <a name="installment"></a>
                        <h5 class="title">Рассрочка</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi alias<br /> 
                            iure cu-piditate facilis aspernatur sunt placeat quae amet, natus doloribus molestias as-<br/>
                            sumenda velit dolore maiores explicabo, aliquam debitis, recusandae voluptati-bus
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-3">
                        <h3 style="text-align: center;">8<spam>% / год.</spam></h3>
                        <p style="text-align: center;">наилучшая  процентная<br> ставка</p>
                    </div>
                    <div class="col-md-3">
                        <h3 style="text-align: center;">36<spam>мес.</spam></h3>
                        <p style="text-align: center;">термин безпроцентной<br> рассрочки</p>
                    </div>
                    <div class="col-md-3">
                        <h3 style="text-align: center;">175<spam> квартир</spam></h3>
                        <p style="text-align: center;">жилой комплекс из 5-ти и<br> 3-х этажных домов</p>
                    </div>
                    <div class="col-md-12" style="text-align: center;">
                        <p style="padding-top: 20px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi alias<br /> 
                            iure cu-piditate facilis aspernatur sunt placeat quae amet, natus doloribus molestias as-<br/>
                            sumenda velit dolore maiores explicabo, aliquam debitis, recusandae voluptati-bus<br>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi alias<br /> 
                            iure cu-piditate facilis aspernatur sunt placeat quae amet, natus doloribus molestias as-<br/>
                            sumenda velit dolore maiores explicabo, aliquam debitis, recusandae voluptati-bus</p>
                        <div class="calculating" style="padding-top: 20px; padding-bottom: 30px;"><a href="#contact">Рассчитать рассрочку</a></div>
                    </div>
                </div>
            </div>
            <div class="contact">
                <div class="row">
                    <div class="col-md-12" style="text-align: center;">
                        <h2>Если вы заинтересовались<br>закажите просмотр в<br>ЖК <spam style="color: #a38061;">Парк</spam> Глушково</h2>
                        <p style="color: #fff;">Наши специалисты свяжутся с вами в любое время</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12" style="text-align: center;">
                        <input type="text" placeholder="Имя" /><br>
                        <input type="text" placeholder="Телефон" />
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12" style="text-align: center;">
                        <div style="padding-top: 30px;"><a href="#contact">Заказать просмотр</a></div>
                    </div> 
                </div>
            </div>
            <div class="map">
                <div class="row">
                    <div class="col-md-1">
                        <a name="contact"></a>
                    </div>
                    <div class="col-md-11">
                        <h5 class="title">Контакты</h5>
                        <h2 style="font-weight: bold;">Курская область,<br>Поселок Глушково,<br>ул.Набережная 8<br><br>+ххх хххх хххх<br>e_mail@mail.ru</h2>
                        <div style="padding-top: 30px;"><a href="#contact">Заказать звонок</a></div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>