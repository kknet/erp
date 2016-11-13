<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Oiltech - 用户信息</title>

    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/datepicker3.css" rel="stylesheet">
    <link href="/css/bootstrap-table.css" rel="stylesheet">
    <link href="/css/styles.css" rel="stylesheet">

    <!--[if lt IE 9]>
    <script src="/js/html5shiv.js"></script>
    <script src="/js/respond.min.js"></script>
    <![endif]-->

</head>

<body>
@include('common.header')

@include('common.sidebar')


<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
            <li class="active">用户信息</li>
        </ol>
    </div><!--/.row-->

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">用户信息</h1>
        </div>
    </div><!--/.row-->


    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">用户信息列表</div>
                <div class="panel-body">
                    <table data-toggle="table" data-show-refresh="true" data-show-toggle="true" data-show-columns="true"
                           data-search="true" data-select-item-name="toolbar1" data-pagination="true"
                           data-sort-name="name" data-sort-order="desc">
                        <thead>
                        <tr>
                            <th data-field="state" data-checkbox="true">Item ID</th>
                            <th data-field="id" data-sortable="true">ID</th>
                            <th data-field="name" data-sortable="true">用户名</th>
                            <th data-field="email" data-sortable="true">邮箱</th>
                            <th data-field="operation" data-sortable="false">操作</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td></td>
                                <td>{{$user->id}}</td>
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                                <td>
                                    @if($user->role!==0)
                                        <a href="/user/{{$user->id}}/edit">编辑</a>|<a
                                                href="/user/{{$user->id}}/delete">删除</a>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div><!--/.row-->
    <!--/>
    <div class="row">
        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading">Basic Table</div>
                <div class="panel-body">
                    <table data-toggle="table" data-url="tables/data2.json">
                        <thead>
                        <tr>
                            <th data-field="id" data-align="right">Item ID</th>
                            <th data-field="name">Item Name</th>
                            <th data-field="price">Item Price</th>
                        </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading">Styled Table</div>
                <div class="panel-body">
                    <table data-toggle="table" id="table-style" data-url="tables/data2.json" data-row-style="rowStyle">
                        <thead>
                        <tr>
                            <th data-field="id" data-align="right">Item ID</th>
                            <th data-field="name">Item Name</th>
                            <th data-field="price">Item Price</th>
                        </tr>
                        </thead>
                    </table>
                    <script>
                        $(function () {
                            $('#hover, #striped, #condensed').click(function () {
                                var classes = 'table';

                                if ($('#hover').prop('checked')) {
                                    classes += ' table-hover';
                                }
                                if ($('#condensed').prop('checked')) {
                                    classes += ' table-condensed';
                                }
                                $('#table-style').bootstrapTable('destroy')
                                        .bootstrapTable({
                                            classes: classes,
                                            striped: $('#striped').prop('checked')
                                        });
                            });
                        });

                        function rowStyle(row, index) {
                            var classes = ['active', 'success', 'info', 'warning', 'danger'];

                            if (index % 2 === 0 && index / 2 < classes.length) {
                                return {
                                    classes: classes[index / 2]
                                };
                            }
                            return {};
                        }
                    </script>
                </div>
            </div>
        </div>
    </div><!--/.row-->
    <!-->

</div><!--/.main-->

<script src="/js/jquery-1.11.1.min.js"></script>
<script src="/js/bootstrap.min.js"></script>
<script src="/js/chart.min.js"></script>
<script src="/js/chart-data.js"></script>
<script src="/js/easypiechart.js"></script>
<script src="/js/easypiechart-data.js"></script>
<script src="/js/bootstrap-datepicker.js"></script>
<script src="/js/bootstrap-table.js"></script>
<script>
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
