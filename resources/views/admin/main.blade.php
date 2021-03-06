<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Lumino - Dashboard</title>

@yield('pageInfo')

{{ Html::style('Admin/css/bootstrap.min.css') }}
{{ Html::style('Admin/css/datepicker3.css') }}
{{ Html::style('Admin/css/styles.css') }}
{{ Html::style('Admin/css/bootstrap-table.css') }}
{{ Html::style('Admin/fa/css/font-awesome.css') }}
{{ Html::style('Admin/sweetalert.css') }}
<script src="js/bootstrap-table.js"></script>


<!--Icons-->
{{ Html::script('Admin/js/lumino.glyphs.js') }}

<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->

<!-- WYSIWYG -->
    {{ Html::script('plugin/tinymce/js/tinymce/tinymce.min.js') }}

    <script>
        var editor_config = {
            path_absolute : "/",
            selector: "textarea",
            style: "word-wrap: break-word",
            width: 1060,
            height: "600",
            plugins: [
                "advlist autolink lists link image charmap print preview hr anchor pagebreak",
                "searchreplace wordcount visualblocks visualchars code fullscreen",
                "insertdatetime media nonbreaking save table contextmenu directionality",
                "emoticons template paste textcolor colorpicker textpattern"
            ],
            toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify |bullist numlist outdent indent | link image media",
            relative_urls: false,
        };


        tinymce.init(editor_config);
    </script>

</head>

<body>

    @include('admin/header')
    @include('admin/navigator')

    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				@yield('rute')
			</ol>
		</div><!--/.row-->

		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">@yield('pageTitle')</h1>
			</div>
		</div><!--/.row-->


		@yield('content')
	</div>	<!--/.main-->



<!--  SCRIPT -->

    {{ Html::script('Admin/js/jquery-1.11.1.min.js') }}
    {{ Html::script('Admin/js/bootstrap.min.js') }}
    {{ Html::script('Admin/sweetalert.min.js') }}

    @yield('js')

    {{ Html::script('Admin/js/chart.min.js') }}
    {{ Html::script('Admin/js/chart-data.js') }}
    {{ Html::script('Admin/js/easypiechart.js') }}
    {{ Html::script('Admin/js/easypiechart-data.js') }}
    {{ Html::script('Admin/js/bootstrap-datepicker.js') }}
    {{ Html::script('Admin/js/bootstrap-table.js')}}


    <script>
        $('#calendar').datepicker({
        });

        !function ($) {
            $(document).on("click","ul.nav li.parent > a > span.icon", function(){
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
