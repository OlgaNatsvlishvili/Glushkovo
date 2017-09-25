<?php include_once 'core/core.php'; ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>ЖК Парк Глушково</title>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="js/jquery.imagemapster.min.js"></script>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.0.47/jquery.fancybox.min.css" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.0.47/jquery.fancybox.min.js"></script>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/index.css">
        
        <script>
        $(document).ready(function() {
            $(".fancybox").fancybox();
        });
        </script>
    </head>
    <body>
        <div class="container">
            <div class="header_small">
                <div class="row">
                    <div class="col-md-3"><a href="index.php"><img src="img/_n.png"></a></div>
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
            </div>
            <div class="house">
                <div class="row">
                    <div class="col-md-12">
                        <img src="img/plan1.jpg" alt="" class="mapster" usemap="#firs_floor_1_entrance" id="firs_floor_1_entrance">
                        <map name="firs_floor_1_entrance">
                            <area shape="poly" data-key="1" href="#firs_floor_1" coords="11,210,407,220,512,222,512,290,444,285,407,290,214,277,11,266" alt="test 1" />
                            <area shape="poly" data-key="2" href="#second_floor_1" coords="11,153,217,156,263,156,407,160,512,161,512,213,409,212,219,208,11,202" alt="test 2" />
                            <area shape="poly" data-key="3" href="#second_floor_1" coords="11,98,216,98,410,100,515,100,515,156,410,156,218,152,11,149" alt="test 3" />
                            <area shape="poly" data-key="4" href="#firs_floor_2" coords="510,220,600,223,830,233,1142,247,1142,310,776,290,600,282,510,276" alt="test 4" />
                            <area shape="poly" data-key="5" href="#second_floor_2" coords="512,157,600,159,776,163,1142,172,1142,242,775,228,600,222,512,218" alt="test 5" />
                            <area shape="poly" data-key="6" href="#second_floor_2" coords="512,102,600,103,777,103,1142,103,1142,164,777,157,600,155,512,153" alt="test 6" />
                        </map>
                    </div>
                </div>
            </div>
            <script>
                $('#firs_floor_1_entrance').mapster({
                    showToolTip: true,
                    stroke: true,
                    strokeColor: 'e1e1e1',
                    fillColor: '222222',
                    isSelectable: false,
                    clickNavigate: true,
//                    onMouseover: function(e) {
//                        pageX = e.pageX;
//                        pageY = e.pageY;
//                    },
//                    onShowToolTip: function(e) {
//                        e.toolTip.css({ left: '5px', top: '0px' });
//                    },
                    areas: [
                        {
                            key: "0",
                            toolTip: "Первый подъезд, первый этаж",
                            selected: false
                        },
                        {
                            key: "1",
                            toolTip: "Первый подъезд, второй этаж",
                            selected: false
                        },
                        {
                            key: "2",
                            toolTip: "Первый подъезд, третий этаж",
                            selected: false
                        },
                        {
                            key: "3",
                            toolTip: "Второй подъезд, первый этаж",
                            selected: false
                        },
                        {
                            key: "4",
                            toolTip: "Второй подъезд, второй этаж",
                            selected: false
                        },
                        {
                            key: "5",
                            toolTip: "Второй подъезд, третий этаж",
                            selected: false
                        }
                    ]
                });
            </script>
            <div class="table">
                <div class="row">
                    <div class="col-md-2">
                        <h5 class="title" style="padding-bottom: 20px;">Информация о доме</h5>
                    </div>
                    <div class="col-md-10"></div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <table border="1">
                            <tr>
                                <th>Конструкции, материалы, виды работ</th>
                                <th>Принимаемые решения</th>
                            </tr>
                            <tr>
                                <td>Фундаменты</td>
                                <td>Ленточные сборные ж/бетонные из блоков ФБС по серии 1.116.1-8. Гидроизоляция вертикальная – обмазочная, 2 слоя битумной мастики; горизонтальная – слой ц/п р-ра  в соотношении 1:2.
                                </td>
                            </tr>
                            <tr>
                                <td>Стены техподполья</td>
                                <td>Бетонные</td>
                            </tr>
                            <tr>
                                <td>Стены наружные выше отм. 0.000</td>
                                <td>- несущие наружные стены трехслойные, утепленные: внутренний слой – газобетонный блок толщ. 300 мм; утеплитель - экструдированный пенополистирол - 100мм ; наружный слой – облицовочный керамический кирпич толщ. 120 мм, ГОСТ 530-2007.</td>
                            </tr>
                            <tr>
                                <td>Стены внутренние несущие </td>
                                <td>Газобетонный блок толщ. 375 мм</td>
                            </tr>
                            <tr>
                                <td>Перекрытия, покрытие и плиты лоджий</td>
                                <td> Сборные ж/бетонные многопустотные плиты по серии 1.141-1</td>
                            </tr>
                            <tr>
                                <td>Перегородки</td>
                                <td>Межквартирные – из газобетонных блоков толщ. 200 мм;<br> Межкомнатные – из пазогребневых плит толщ. 80 мм</td>
                            </tr>
                            <tr>
                                <td>Вентблоки</td>
                                <td>Венткороба из тонколистовой оцинкованной стали , обкладываемые плитами из ЦСП (20 мм)</td>
                            </tr>
                            <tr>
                                <td>Лестницы</td>
                                <td>Лестничные марши – сборные железобетонные по серии 1.151.1-7 в.1, площадки – сборные ж/бетонные</td>
                            </tr>
                            <tr>
                                <td>Крыша</td>
                                <td>Скатная, стропильная, деревянная, чердачная. Покрытие – металочерепица.</td>
                            </tr>
                            <tr>
                                <td>Перемычки</td>
                                <td>железобетонные по серии 1.038.1-1 и металлические из уголков для облицовочного слоя, частично – рядовые из арматуры в цементно – песчаном растворе.</td>
                            </tr>
                            <tr>
                                <td>Окна, балконные двери</td>
                                <td>Двойные стеклопакеты в ПВХ – переплетах; Окна жилых помещений, выходящие в остекленные лоджии – высотой 1720мм, высота остальных окон 1.5м;<br> -остекление лоджий – одинарное, в алюминиевом переплете, ограждения лоджий кирпичные.</td>
                            </tr>
                            <tr>
                                <td>Двери</td>
                                <td>Входные в квартиры – металлические, индивидуальные; наружные входные в подъезды  – металлические. Наружные в техпомещения – металлические.</td>
                            </tr>
                            <tr>
                                <td>Полы</td>
                                <td>Керамическая плитка - в лестничных клетках  и входных группах,  межквартирных коридорах и тамбурах. Покрытие полов в жилых квартирах не предусматривать. В технических помещениях – бетонные полы.</td>
                            </tr>
                            <tr>
                                <td>Внутренняя отделка</td>
                                <td>Во входных группах, лестничных клетках, межквартирных коридорах отделка стен: штукатурка, окраска акриловыми красками. Потолки – затирка, окраска водоэмульсионной краской<br> Внутреннюю отделку жилых квартир исключить.</td>
                            </tr>
                            <tr>
                                <td>Наружная отделка</td>
                                <td>Облицовка стен лицевым керамическим пустотелым кирпичом; цоколь – штукатурка с последующей окраской фасадными красками, либо обшивка металопрофилем по металлическому каркасу. </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>

            <div class="row plan_1">
                <div class="col-md-1"></div>
                <div class="col-md-11">
                    <a name="plan"></a>
                    <h5 class="title">Планировка</h5>
                    <h3 style="color: #fff;">I<spam> этаж</spam></h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-1">
                    <a name="firs_floor_1"></a>
                </div>
                <div class="col-md-11">
                    <h3 style="font-weight: bold; padding-top: 30px;">I подъезд</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-10">
                    <img src="img/01_FIRST_FLOOR_760.png" alt="plan_1" class="mapster" usemap="#firs_floor_1" id="firs_floor_1">
                    <map name="firs_floor_1">
                        <area shape="rect" class="fancybox" rel="group" data-key="1" href="kv/kv1.html" coords="212,280,370,460" />
                        <area shape="rect" class="fancybox" rel="group" data-key="2" href="kv/kv2.html" coords="34,252,212,490" />
                        <area shape="rect" class="fancybox" rel="group" data-key="3" href="kv/kv3.html" coords="34,47,212,252" />
                        <area shape="rect" class="fancybox" rel="group" data-key="4" href="kv/kv4.html" coords="212,47,440,226" />
                        <area shape="poly" class="fancybox" rel="group" data-key="5" href="kv/kv5.html" coords="440,47,603,47,603,86,674,86,674,220,440,220" />
                        <area shape="poly" class="fancybox" rel="group" data-key="6" href="kv/kv6.html" coords="630,220,673,220,673,86,755,86,755,416,595,416,595,282,630,282" />
                        <area shape="rect" class="fancybox" rel="group" data-key="7" href="kv/kv7.html" coords="500,280,595,460" />
                    </map>
                </div>
                <script>
                    $('#firs_floor_1').mapster({
                        showToolTip: true,
                        stroke: true,
                        strokeColor: 'e1e1e1',
                        fillColor: '222222',
                        isSelectable: false,
                        clickNavigate: false,
                        areas: [
                            {
                                key: "0",
                                toolTip: "№1",
                                selected: false
                            },
                            {
                                key: "1",
                                toolTip: "№2",
                                selected: false
                            },
                            {
                                key: "2",
                                toolTip: "№3",
                                selected: false
                            },
                            {
                                key: "3",
                                toolTip: "№4",
                                selected: false
                            },
                            {
                                key: "4",
                                toolTip: "№5",
                                selected: false
                            },
                            {
                                key: "5",
                                toolTip: "№6",
                                selected: false
                            },
                            {
                                key: "6",
                                toolTip: "№7",
                                selected: false
                            }
                        ]
                    });
                </script>
            </div>

            <div class="row">
                <div class="col-md-1">
                    <a name="firs_floor_2"></a>
                </div>
                <div class="col-md-11">
                    <h3 style="font-weight: bold; padding-top: 30px;">II подъезд</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-10">
                    <img src="img/right_first_floor.png" style="padding-top: 30px; width: 760px;" alt="plan_1" usemap="#firs_floor_2" id="firs_floor_2">
                    <map name="firs_floor_2">
                        <area shape="poly" data-key="1" class="fancybox" rel="group" href="kv/kv8.html" coords="8,187,127,187,127,385,193,385,193,476,249,476,249,686,8,686" />
                        <area shape="poly" data-key="2" class="fancybox" rel="group" href="kv/kv9.html" coords="130,184,232,184,232,119,478,119,478,385,130,385" />
                        <area shape="rect" data-key="3" class="fancybox" rel="group" href="kv/kv10.html" coords="485,120,820,385" />
                        <area shape="rect" data-key="4" class="fancybox" rel="group" href="kv/kv11.html" coords="820,120,1080,430" />
                        <area shape="rect" data-key="5" class="fancybox" rel="group" href="kv/kv12.html" coords="820,430,1080,790" />
                        <area shape="rect" data-key="6" class="fancybox" rel="group" href="kv/kv13.html" coords="825,480,580,740" />
                    </map>
                </div>
                <script>
                    $('#firs_floor_2').mapster({
                        showToolTip: true,
                        stroke: true,
                        strokeColor: 'e1e1e1',
                        fillColor: '222222',
                        isSelectable: false,
                        clickNavigate: false,
                        areas: [
                            {
                                key: "0",
                                toolTip: "№8",
                                selected: false
                            },
                            {
                                key: "1",
                                toolTip: "№9",
                                selected: false
                            },
                            {
                                key: "2",
                                toolTip: "№10",
                                selected: false
                            },
                            {
                                key: "3",
                                toolTip: "№11",
                                selected: false
                            },
                            {
                                key: "4",
                                toolTip: "№12",
                                selected: false
                            },
                            {
                                key: "5",
                                toolTip: "№13",
                                selected: false
                            }
                        ]
                    });
                </script>
            </div>

            <div class="row plan_1">
                <div class="col-md-1"></div>
                <div class="col-md-11">
                    <h5 class="title">Планировка</h5>
                    <h3 style="color: #fff;">II, III<spam> этажи</spam></h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-1">
                    <a name="second_floor_1"></a>
                </div>
                <div class="col-md-11">
                    <h3 style="font-weight: bold; padding-top: 30px;">I подъезд</h3>
                </div>
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-10">
                        <img src="img/left_second_floor.png" style="padding-top: 30px; width: 760px;" alt="plan_1" usemap="#second_floor_1" id="second_floor_1">
                        <map name="second_floor_1">
                            <area shape="rect" class="fancybox" rel="group" href="kv/kv14.html" coords="555,420,320,690" alt="test 2" />
                            <area shape="rect" class="fancybox" rel="group" href="kv/kv15.html" coords="58,380,320,730" alt="test 1" />
                            <area shape="rect" class="fancybox" rel="group" href="kv/kv16.html" coords="58,80,320,377" alt="test 5" />
                            <area shape="rect" class="fancybox" rel="group" href="kv/kv17.html" coords="320,60,660,330" alt="test 6" />
                            <area shape="poly" class="fancybox" rel="group" href="kv/kv18.html" coords="660,68,906,68,906,127,1011,127,1011,331,660,335" alt="test 7" />
                            <area shape="poly" class="fancybox" rel="group" href="kv/kv19.html" coords="892,425,946,425,946,330,1009,330,1009,129,1132,129,1132,624,892,626" alt="test 4" />
                            <area shape="rect" class="fancybox" rel="group" href="kv/kv20.html" coords="890,420,660,690" alt="test 3" />
                        </map>
                    </div>
                </div>
            </div>
            <script>
                $('#second_floor_1').mapster({
                    showToolTip: true,
                    stroke: true,
                    strokeColor: 'e1e1e1',
                    fillColor: '222222',
                    isSelectable: false,
                    clickNavigate: false,
                    areas: [
                        {
                            key: "0",
                            toolTip: "№14",
                            selected: false
                        },
                        {
                            key: "1",
                            toolTip: "№15",
                            selected: false
                        },
                        {
                            key: "2",
                            toolTip: "№16",
                            selected: false
                        },
                        {
                            key: "3",
                            toolTip: "№17",
                            selected: false
                        },
                        {
                            key: "4",
                            toolTip: "№18",
                            selected: false
                        },
                        {
                            key: "5",
                            toolTip: "№19",
                            selected: false
                        },
                        {
                            key: "6",
                            toolTip: "№20",
                            selected: false
                        }
                    ]
                });
            </script>
            <div class="row">
                <div class="col-md-1">
                    <a name="second_floor_2"></a>
                </div>
                <div class="col-md-11">
                    <h3 style="font-weight: bold; padding-top: 30px;">II подъезд</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-10">
                    <img src="img/right_second_floor.png" style="padding-top: 30px; width: 760px;" alt="plan_2" usemap="#second_floor_2" id="second_floor_2">
                    <map name="second_floor_2">
                        <area shape="rect" class="fancybox" href="kv/kv21.html" coords="250,425,480,680" alt="test 2" />
                        <area shape="poly" class="fancybox" href="kv/kv22.html" coords="10,130,126,130,127,332,195,333,195,427,247,427,247,628,10,626" alt="test 1" />
                        <area shape="poly" class="fancybox" href="kv/kv23.html" coords="127,130,237,130,237,64,476,64,475,332,127,332" alt="test 7" />
                        <area shape="rect" class="fancybox" href="kv/kv24.html" coords="480,70,825,330" alt="test 6" />
                        <area shape="rect" class="fancybox" href="kv/kv25.html" coords="820,70,1080,380" alt="test 5" />
                        <area shape="rect" class="fancybox" href="kv/kv26.html" coords="820,380,1080,740" alt="test 4" />
                        <area shape="rect" class="fancybox" href="kv/kv27.html" coords="580,425,825,680" alt="test 3" />
                    </map>
                </div>
            </div>
            <script>
                $('#second_floor_2').mapster({
                    showToolTip: true,
                    stroke: true,
                    strokeColor: 'e1e1e1',
                    fillColor: '222222',
                    isSelectable: false,
                    clickNavigate: false,
                    areas: [
                        {
                            key: "0",
                            toolTip: "№21",
                            selected: false
                        },
                        {
                            key: "1",
                            toolTip: "№22",
                            selected: false
                        },
                        {
                            key: "2",
                            toolTip: "№23",
                            selected: false
                        },
                        {
                            key: "3",
                            toolTip: "№24",
                            selected: false
                        },
                        {
                            key: "4",
                            toolTip: "№25",
                            selected: false
                        },
                        {
                            key: "5",
                            toolTip: "№26",
                            selected: false
                        },
                        {
                            key: "6",
                            toolTip: "№27",
                            selected: false
                        }
                    ]
                });
            </script>

            <div class="row">
                <div class="col-md-12">
                    <div class="footer"></div>
                </div>
            </div>
        </div>
    </body>
</html>