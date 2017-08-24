<!DOCTYPE html>
<html lang="en" class="no-js">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <title>Home</title>
        <meta name="description" content="Fullscreen Pageflip Layout with BookBlock" />
        <meta name="keywords" content="fullscreen pageflip, booklet, layout, bookblock, jquery plugin, flipboard layout, sidebar menu" />
        <meta name="author" content="Codrops" />
        <link rel="shortcut icon" href="../favicon.ico"> 
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="stylesheet" type="text/css" href="pageEffects/css/jquery.jscrollpane.custom.css" />
        <link rel="stylesheet" type="text/css" href="pageEffects/css/bookblock.css" />
        <link rel="stylesheet" type="text/css" href="pageEffects/css/custom.css" />
        <script src="pageEffects/js/modernizr.custom.79639.js"></script>
        <script src="https://code.highcharts.com/highcharts.js"></script>
        <script src="https://code.highcharts.com/modules/exporting.js"></script>
    </head>
    <body>
        <div id="container" class="container">	

            <div class="menu-panel">
                <h3>Select Standard</h3>
                <ul id="menu-toc" class="menu-toc">
                    <li class="menu-toc-current"><a href="#item1">Std. 1</a></li>
                    <li><a href="#item2">Std. 2</a></li>
                    <li><a href="#item3">Std. 3</a></li>
                    <li><a href="#item4">Std. 4</a></li>
                    <li><a href="#item5">Std. 5</a></li>
                    <li><a href="#item6">Std. 6</a></li>
                    <li><a href="#item7">Std. 7</a></li>
                </ul>
            </div>

            <div class="bb-custom-wrapper">
                <div id="bb-bookblock" class="bb-bookblock">
                    <div class="bb-item" id="item1">
                        <div class="content">
                            <div class="scroller">
                                <h2>Std. 1</h2>
                                <div></div>
                                <div id="std1PiChart" style="width: 48%; height: 400px;float:left;border: 1px solid #dadada;box-shadow: 3px 3px 3px #dadada;"></div>
                                <div id="teacher1PiChart" style="width: 48%; height: 400px;float:right;border: 1px solid #dadada;box-shadow: 3px 3px 3px #dadada;"></div>

                            </div>
                        </div>
                    </div>
                    <div class="bb-item" id="item2">
                        <div class="content">
                            <div class="scroller">
                                <h2>Std. 2</h2>
                                <div id="std2PiChart" style="width: 48%; height: 400px;float:left;border: 1px solid #dadada;box-shadow: 3px 3px 3px #dadada;"></div>
                                <div id="teacher2PiChart" style="width: 48%; height: 400px;float:right;border: 1px solid #dadada;box-shadow: 3px 3px 3px #dadada;"></div>

                            </div>
                        </div>
                    </div>
                    <div class="bb-item" id="item3">
                        <div class="content">
                            <div class="scroller">
                                <h2>Std. 3</h2>
                                <div id="std3PiChart" style="width: 48%; height: 400px;float:left;border: 1px solid #dadada;box-shadow: 3px 3px 3px #dadada;"></div>
                                <div id="teacher3PiChart" style="width: 48%; height: 400px;float:right;border: 1px solid #dadada;box-shadow: 3px 3px 3px #dadada;"></div>

                            </div>
                        </div>
                    </div>
                    <div class="bb-item" id="item4">
                        <div class="content">
                            <div class="scroller">
                                <h2>Std. 4</h2>
                                <div id="std4PiChart" style="width: 48%; height: 400px;float:left;border: 1px solid #dadada;box-shadow: 3px 3px 3px #dadada;"></div>
                                <div id="teacher4PiChart" style="width: 48%; height: 400px;float:right;border: 1px solid #dadada;box-shadow: 3px 3px 3px #dadada;"></div>
                            </div>
                        </div>
                    </div>
                    <div class="bb-item" id="item5">
                        <div class="content">
                            <div class="scroller">
                                <h2>Std. 5</h2>
                                <div id="std5PiChart" style="width: 48%; height: 400px;float:left;border: 1px solid #dadada;box-shadow: 3px 3px 3px #dadada;"></div>
                                <div id="teacher5PiChart" style="width: 48%; height: 400px;float:right;border: 1px solid #dadada;box-shadow: 3px 3px 3px #dadada;"></div>

                            </div>
                        </div>
                    </div>
                    <div class="bb-item" id="item6">
                        <div class="content">
                            <div class="scroller">
                                <h2>Std. 6</h2>
                                <div id="std6PiChart" style="width: 48%; height: 400px;float:left;border: 1px solid #dadada;box-shadow: 3px 3px 3px #dadada;"></div>
                                <div id="teacher6PiChart" style="width: 48%; height: 400px;float:right;border: 1px solid #dadada;box-shadow: 3px 3px 3px #dadada;"></div>

                            </div>
                        </div>
                    </div>
                    <div class="bb-item" id="item7">
                        <div class="content">
                            <div class="scroller">
                                <h2>Std. 7</h2>
                                <div id="std7PiChart" style="width: 48%; height: 400px;float:left;border: 1px solid #dadada;box-shadow: 3px 3px 3px #dadada;"></div>
                                <div id="teacher7PiChart" style="width: 48%; height: 400px;float:right;border: 1px solid #dadada;box-shadow: 3px 3px 3px #dadada;"></div>

                            </div>
                        </div>
                    </div>
                </div>

                <nav>
                    <span id="bb-nav-prev">&larr;</span>
                    <span id="bb-nav-next">&rarr;</span>
                </nav>

                <span id="tblcontents" class="menu-button">Table of Contents</span>

            </div>

        </div><!-- /container -->
        <div id='y2' style="display: none;"><?php print_r($studentsDetail); ?></div>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
        <script src="pageEffects/js/jquery.mousewheel.js"></script>
        <script src="pageEffects/js/jquery.jscrollpane.min.js"></script>
        <script src="pageEffects/js/jquerypp.custom.js"></script>
        <script src="pageEffects/js/jquery.bookblock.js"></script>
        <script src="pageEffects/js/page.js"></script>
        <script type="text/javascript">
 var t2=[
<?php foreach ($studentsDetail['teachers']['1'] as $key => $value) { ?>
        {
            name: '<?php echo $key ?>',
            y: <?php echo $value; ?>
        },
<?php } ?>
];
            
var y1 = [
<?php foreach ($studentsDetail['subjects']['1'] as $key => $value) { ?>
        {
            name: '<?php echo $key ?>',
            y: <?php echo $value; ?>
        },
<?php } ?>
];
        </script>
        <script>
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            var detail = '';
            $.ajax({
                type: 'POST',
                url: 'chartData',
                data: '_token = <?php echo csrf_token() ?>',
                datatype: "JSON",
                success: function (data) {
                    detail = data;
                    console.log(detail);
                }
            });
            $(function () {
                Page.init();
            });
        </script>
    </body>
</html>
