@extends('admin.layouts.app')

@section('main-content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1>Text Editors</h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="#">Home</a></li>
						<li class="breadcrumb-item active">Text Editors</li>
					</ol>
				</div>
			</div>
		</div><!-- /.container-fluid -->
	</section>

	<!-- Main content -->
	<section class="content">
		<div class="row">
			<div class="col-md-12">

				<!-- general form elements -->
				<div class="card card-primary">
					<div class="card-header">
						<h3 class="card-title">Title</h3>
					</div><br>
					@if(count($errors)>0)
					@foreach($errors->all() as $error)
						<a class="alert alert-danger">{{$error}}</a>
					@endforeach
					@endif
					<!-- /.card-header -->
					<!-- form start -->
					<form role="form" action="{{ route('tag.store')}}" method="post">
						{{csrf_field()}}
						<div class="card-body">

							<div class="col-lg">

								<div class="form-group">
									<label for="name">Tag Title</label>
									<input type="text" name="name" class="form-control" id="name" placeholder="Tag Title">
								</div>


								<div class="form-group">
									<label for="tag">Tag Slug</label>
									<input type="text" name="slug" class="form-control" id="slug" placeholder="Slug">
								</div>

							</div>




						</div>

						<div class="card-footer">
							<button type="submit" class="btn btn-primary">Submit</button>
						</div>

					</form>
				</div>
				<!-- /.card -->



			</div>
			<!-- /.col-->
		</div>
		<!-- ./row -->




		<!-- ./row -->
	</section>
	<!-- /.content -->
</div>
<!-- /.content-wrapper -->


<!-- jQuery -->
<script src="../../admin/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../admin/dist/js/adminlte.min.js"></script>
<!-- Summernote -->
<script src="../../admin/plugins/summernote/summernote-bs4.min.js"></script>
<!-- CodeMirror -->
<script src="../../admin/plugins/codemirror/codemirror.js"></script>
<script src="../../admin/plugins/codemirror/mode/css/css.js"></script>
<script src="../../admin/plugins/codemirror/mode/xml/xml.js"></script>
<script src="../../admin/plugins/codemirror/mode/htmlmixed/htmlmixed.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../admin/dist/js/demo.js"></script>
<!-- Page specific script -->
<script>
	$(function () {
	      // Summernote
	      $('#summernote').summernote()

	      // CodeMirror
	      CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
	      	mode: "htmlmixed",
	      	theme: "monokai"
	      });
	  })
	</script>



	
	@endsection	