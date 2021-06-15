@extends('admin.layouts.app')
@section('headSection')
<link rel="stylesheet" type="text/css" href="{{asset('admin/plugins/select2/css/select2.min.css')}}">
@endsection

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
					@foreach ($errors->all() as $error)
					<p class="alert alert-danger">{{$error}}</p>
					@endforeach
					@endif

					<!-- /.card-header -->
					<!-- form start -->
					<form role="form" action="{{route('post.store')}}" method="post" enctype="multipart/form-data">

						{{csrf_field()}}
						<div class="card-body">

							<div class="col-lg">

								<div class="form-group">
									<label for="title">Post Title</label>
									<input type="text" name="title" class="form-control" id="title" placeholder="Title">
								</div>


								<div class="form-group">
									<label for="subtitle">Post Sub Title</label>
									<input type="text" name="subtitle" class="form-control" id="subtitle" placeholder="Sub Title">
								</div>


								<div class="form-group">
									<label for="slug">Post Slug</label>
									<input type="text" name="slug" class="form-control" id="slug" placeholder="Slug">
								</div>

							</div>

							<div class="col-lg">

								<div class="form-group">
									<label for="image">File input</label>
									<div class="input-group">
										<div class="custom-file">
											<input type="file" name="image" class="custom-file-input" id="exampleInputFile">
											<label class="custom-file-label" for="exampleInputFile">Choose file</label>
										</div>
										<div class="input-group-append">
											<span class="input-group-text">Upload</span>
										</div>
									</div>
								</div>

							<div class="row">
								<div class="col-md-6">
							        <div class="form-group">
							              <label>Select Tags</label>
							              <select class="select2 select2-hidden-accessible" multiple="" data-placeholder="Select a State" style="width: 100%;"   aria-hidden="true" name="tags[]">
							              	@foreach ($tags as $tag)
							                  <option value="{{$tag->id}}">{{$tag->name}}</option>
							              		
							              	@endforeach
							                  
							              </select>
							        </div>
							    </div>
							    
							    <div class="col-md-6">
							        <div class="form-group">
							              <label>Select Category</label>
							              <select class="select2 select2-hidden-accessible" multiple="" data-placeholder="Select a State" style="width: 100%;"   aria-hidden="true" name="categories[]">
							              	@foreach ($categories as $category)
							                  <option value="{{$category->id}}">{{$category->name}}</option>
							              		
							              	@endforeach
							                  
							              </select>
							        </div>
							    </div>
							</div>	


							</div>
							<!-- /.card-body -->  	   

							<div class="card card-outline card-info">
								<div class="card-header">
									<h3 class="card-title">
										Write Post Body Here
									</h3>
								</div>
								<!-- /.card-header -->
								<div class="card-body">
									<textarea id="summernote" name="body">
											<u>text</u> <strong>here</strong>
									</textarea>
								</div>

							</div>

							<div class="form-check">
								<input type="checkbox" name="status" class="form-check-input" id="exampleCheck1"value="1">
								<label class="form-check-label" for="exampleCheck1">Publish</label>
							</div>




						</div>

						<div class="card-footer">
							<button type="submit" class="btn btn-primary">Submit</button>
							<a href="{{route('tag.index')}}" class="btn btn-warning">Back</a>
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

@section('footerSection') 
<script type="text/javascript" src="{{asset('admin/plugins/select2/js/select2.full.min.js')}}"></script>
<script>
$(document).ready(function(){
//Initialize Select2 Elements
  $('.select2').select2();
});
 //Initialize Select2 Elements
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    })
</script> 


@endsection
