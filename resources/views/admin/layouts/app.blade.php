<!DOCTYPE html>
<html lang="en">
<head>
	@include('admin.layouts.head')
</head>
<body class="hold-transition sidebar-mini layout-fixed">



	
	<div class="wrapper">

		@include('admin.layouts.sidebar')
		@include('admin.layouts.header')
		@section('main-content')

		@show

		@include('admin.layouts.footer')



	</div>

</body>
</html>