<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lumino - Dashboard</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/datepicker3.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">

    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->

</head>

<body>
@include('common.header')

@include('common.sidebar')

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
            <li class="active">概览板</li>
        </ol>
    </div><!--/.row-->

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">概览板</h1>
        </div>
    </div><!--/.row-->

    <div class="row">
        <div class="col-xs-12 col-md-6 col-lg-3">
            <div class="panel panel-blue panel-widget ">
                <div class="row no-padding">
                    <div class="col-sm-3 col-lg-5 widget-left">
                        <em class="glyphicon glyphicon-shopping-cart glyphicon-l"></em>
                    </div>
                    <div class="col-sm-9 col-lg-7 widget-right">
                        <div class="large">120</div>
                        <div class="text-muted">New Orders</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-md-6 col-lg-3">
            <div class="panel panel-orange panel-widget">
                <div class="row no-padding">
                    <div class="col-sm-3 col-lg-5 widget-left">
                        <em class="glyphicon glyphicon-comment glyphicon-l"></em>
                    </div>
                    <div class="col-sm-9 col-lg-7 widget-right">
                        <div class="large">52</div>
                        <div class="text-muted">Comments</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-md-6 col-lg-3">
            <div class="panel panel-teal panel-widget">
                <div class="row no-padding">
                    <div class="col-sm-3 col-lg-5 widget-left">
                        <em class="glyphicon glyphicon-user glyphicon-l"></em>
                    </div>
                    <div class="col-sm-9 col-lg-7 widget-right">
                        <div class="large">24</div>
                        <div class="text-muted">New Users</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-md-6 col-lg-3">
            <div class="panel panel-red panel-widget">
                <div class="row no-padding">
                    <div class="col-sm-3 col-lg-5 widget-left">
                        <em class="glyphicon glyphicon-stats glyphicon-l"></em>
                    </div>
                    <div class="col-sm-9 col-lg-7 widget-right">
                        <div class="large">25.2k</div>
                        <div class="text-muted">Visitors</div>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/.row-->


    @foreach($saleNumGrey as $index=>$saleNum)
        <input id='saleNumGrey{{$index}}' type="hidden" value="{{$saleNum?:0}}">
    @endforeach
    @foreach($saleNumBlue as $index=>$saleNum)
        <input id='saleNumBlue{{$index}}' type="hidden" value="{{$saleNum?:0}}">
    @endforeach

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">销量走势</div>
                <div class="panel-body">
                    <div class="canvas-wrapper">
                        <canvas class="main-chart" id="line-chart" height="200" width="600"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/.row-->


    {{--<input id='foo' type="hidden" value="{{$a1}}">--}}
    <div class="row">
        <div class="col-xs-6 col-md-3">
            <div class="panel panel-default">
                <div class="panel-body easypiechart-panel">
                    <h4>New Orders</h4>
                    <div class="easypiechart" id="easypiechart-blue" data-percent="92"><span
                                class="percent">92%</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xs-6 col-md-3">
            <div class="panel panel-default">
                <div class="panel-body easypiechart-panel">
                    <h4>Comments</h4>
                    <div class="easypiechart" id="easypiechart-orange" data-percent="65"><span
                                class="percent">65%</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xs-6 col-md-3">
            <div class="panel panel-default">
                <div class="panel-body easypiechart-panel">
                    <h4>New Users</h4>
                    <div class="easypiechart" id="easypiechart-teal" data-percent="56"><span
                                class="percent">56%</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xs-6 col-md-3">
            <div class="panel panel-default">
                <div class="panel-body easypiechart-panel">
                    <h4>Visitors</h4>
                    <div class="easypiechart" id="easypiechart-red" data-percent="27"><span
                                class="percent">27%</span>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/.row-->

    <div class="row">

        <div class="col-md-4">

            <div class="panel panel-blue">
                <div class="panel-heading dark-overlay"><span class="glyphicon glyphicon-check"></span>To-do List
                </div>
                <div class="panel-body">
                    <ul id="todo-loop" class="todo-list">
                        @foreach($toDoList as $toDo)
                            <li id="todo-{{$toDo->id}}" class="todo-list-item">
                                <div class="checkbox">
                                    <input type="checkbox" id="checkbox"/>
                                    <label for="checkbox">{{$toDo->content}}</label>
                                </div>
                                <div class="pull-right action-buttons">
                                    {{--<a href="#"><span class="glyphicon glyphicon-pencil"></span></a>--}}
                                    <a href="javascript:void(0)" class="flag" onclick="mark({{$toDo->id}})">
                                        <span id="flag-{{$toDo->id}}" class="glyphicon glyphicon-flag"
                                              @if($toDo->is_marked===1)
                                              style="color: darkred"
                                              @else
                                              style="color: #9fadbb"@endif>
                                        </span>
                                    </a>
                                    <a href="javascript:void(0)" class="trash" onclick="drop({{$toDo->id}})"><span
                                                class="glyphicon glyphicon-trash"></span></a>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div class="panel-footer">
                    <div class="input-group">
                        <input id="btn-input" type="text" class="form-control input-md" placeholder="to-do内容"/>
                        <span class="input-group-btn">
								<button class="btn btn-primary btn-md" id="btn-todo"
                                        onclick="add({{session('user')['id']}})">新建to-do</button>
							</span>
                    </div>
                </div>
            </div>

        </div><!--/.col-->
    </div><!--/.row-->
</div>    <!--/.main-->

<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/chart.min.js"></script>
<script src="js/chart-data.js"></script>
<script src="js/easypiechart.js"></script>
<script src="js/easypiechart-data.js"></script>
<script src="js/bootstrap-datepicker.js"></script>
<script src="js/to-do-list.js"></script>

<script>
    $('#calendar').datepicker({});

    !function ($) {
        $(document).on("click", "ul.nav li.parent > a > span.icon", function () {
            $(this).find('em:first').toggleClass("glyphicon-minus");
        });
        $(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
    }(window.jQuery);

    $(window).on('resize', function () {
        if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
    })
    $(window).on('resize', function () {
        if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
    })
</script>

</body>

</html>
