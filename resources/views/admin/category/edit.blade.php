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
	        	  @foreach ($errors->all() as $error):
	        	  	<p class="alert alert-danger">{{$error}}</p>
	        	  @endforeach
	        	  @endif
	        	  <!-- /.card-header -->
	        	  <!-- form start -->
	        	  <form action="{{route('category.update',$category->id)}}" method="post">
	        	  	{{csrf_field()}}
	        	  	{{method_field('PUT')}}
	        	    <div class="card-body">

	        	    	<div class="col-lg">
	        	    			
		        	      <div class="form-group">
		        	        <label for="name">Category Title</label>
		        	        <input type="text" name="name" class="form-control" id="name" placeholder="Category Title"value="{{$category->name}}">
		        	      </div>

		        	      
		        	        <div class="form-group">
		        	          <label for="Category">Category Slug</label>
		        	          <input type="text" name="Category" class="form-control" id="slug" placeholder="Slug" value="{{$category->slug}}">
		        	        </div>
		        	   
	        	    	</div>
			        	   
	        	    </div>

	        	    <div class="card-footer">
	        	      <button type="submit" class="btn btn-primary">Submit</button>
	        	      <a href="{{route('category.index')}}" class="btn btn-warning">Back</a>

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
	  </scriptCategory
@endsection	