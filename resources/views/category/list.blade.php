<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Oiltech - 分类管理</title>

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
                            <th data-field="name" data-sortable="true">分类名</th>
                            <th data-field="operation" data-sortable="false">操作</th>
                        </tr>
                        </thead>
                        <tbody id="category-loop">
                        @foreach ($categories as $category)
                            <tr>
                                <td></td>
                                <td>{{$category->id}}</td>
                                <td>{{$category->name}}</td>
                                <td>
                                    <a href="/category/{{$category->id}}/edit">编辑</a>|<a
                                            href="/category/{{$category->id}}/delete">删除</a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="input-group category-input">
                    <input id="btn-input" type="text" class="form-control input-md" placeholder="分类名"/>
                    <span class="input-group-btn">
								<button class="btn btn-primary btn-md" id="btn-category"
                                        onclick="add()">添加分类</button>
							</span>
                </div>
            </div>
        </div>
    </div><!--/.row-->
</div><!--/.main-->

<script src="/js/jquery-1.11.1.min.js"></script>
<script src="/js/bootstrap.min.js"></script>
<script src="/js/chart.min.js"></script>
<script src="/js/chart-data.js"></script>
<script src="/js/easypiechart.js"></script>
<script src="/js/easypiechart-data.js"></script>
<script src="/js/bootstrap-datepicker.js"></script>
<script src="/js/bootstrap-table.js"></script>
<script src="/js/category-ajax.js"></script>
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
