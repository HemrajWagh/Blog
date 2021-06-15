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
						<h3 class="card-title">Add Admin</h3>
					</div><br>
					@if(count($errors)>0)
					@foreach($errors->all() as $error)
					<a class="alert alert-danger">{{$error}}</a>
					@endforeach
					@endif
					<!-- /.card-header -->
					<!-- form start -->
					<form role="form" action="{{ route('user.store')}}" method="post">
						{{csrf_field()}}
						<div class="card-body">

							<div class="col-lg">

								<div class="form-group">
									<label for="name">User Name</label>
									<input type="text" name="name" class="form-control" id="name" placeholder="Username">
								</div>


								<div class="form-group">
									<label for="email">Email</label>
									<input type="text" name="Email" class="form-control" id="Email" placeholder="Email">
								</div>

								<div class="form-group">
									<label for="password">Password</label>
									<input type="password" name="password" class="form-control" id="password" placeholder="Password">
								</div>

								<div class="form-group">
									<label for="confirm_password">Confirm Password</label>
									<input type="password" name="confirm_password" class="form-control" id="confirm_password" placeholder="Confirm Password">
								</div><br>
								
								<div class="form-group">
									<label>Assign Role</label>
									<div class="row">
										@foreach($roles as $role)
										<div class="col-lg-3">
											<div class="checkbox">
												<input type="checkbox"name="role[]"value="{{ $role->id}}" >{{ $role->name}}
											</div>
										</div>	
										@endforeach
									</div>
									
								</div>
							</div>




						</div>

						<div class="card-footer">
							<button type="submit" class="btn btn-primary">Submit</button>
							<a href="{{route('user.index')}}" class="btn btn-warning">Back</a>
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
<script src="{{asset('admin/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('admin/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('admin/dist/js/adminlte.min.js')}}"></script>
<!-- Summernote -->
<script src="{{asset('admin/plugins/summernote/summernote-bs4.min.js')}}"></script>
<!-- CodeMirror -->
<script src="{{asset('admin/plugins/codemirror/codemirror.js')}}"></script>
<script src="{{asset('admin/plugins/codemirror/mode/css/css.js')}}"></script>
<script src="{{asset('admin/plugins/codemirror/mode/xml/xml.js')}}"></script>
<script src="{{asset('admin/plugins/codemirror/mode/htmlmixed/htmlmixed.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('admin/dist/js/demo.js')}}"></script>
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