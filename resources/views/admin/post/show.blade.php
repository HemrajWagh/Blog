
@extends('admin.layouts.app')


@section('main-content')

<!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header">
     <div class="container-fluid">
       <div class="row mb-2">
         <div class="col-sm-6">
           <h1>Blank Page</h1>
         </div>
         <div class="col-sm-6">
           <ol class="breadcrumb float-sm-right">
             <li class="breadcrumb-item"><a href="#">Home</a></li>
             <li class="breadcrumb-item active">Blank Page</li>
           </ol>
         </div>
       </div>
     </div><!-- /.container-fluid -->
   </section>

   <!-- Main content -->
   <section class="content">

     <!-- Default box -->
     <div class="card">
        <div class="card-body">
           
           <!-- Default box -->
           <div class="card">
             <div class="card-header">
               <h3 class=" col-lg-5 card-title">Posts</h3>
               <a class='col-lg-2 btn btn-secondary align-self-center' href="{{route('post.create')}}">Add New</a>

               <div class="card-tools">
                 <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                   <i class="fas fa-minus"></i>
                 </button>
                 <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                   <i class="fas fa-times"></i>
                 </button>
               </div>
             </div>
             <div class="card-body">
               
                <div class="card">
                  <div class="card-header">
                    <h3 class="card-title">DataTable with default features</h3>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                      <thead>
                      <tr>
                        <th>Sr No.</th>
                        <th>Title</th>
                        <th>Sub Title</th>
                        <th>Slug</th>
                        <th>Created_At</th>
        
                        <th>Edit</th>
                        <th>Delete</th>
                      </tr>
                      </thead>
                      <tbody>
                        @foreach ($posts as $post)
                          <tr>
                            <td>{{$loop->index+ 1 }}</td>
                            <td>{{$post->title}}</td>
                            <td>{{$post->subtitle}}</td>
                            <td>{{$post->slug}}</td>
                            <td>{{$post->created_at}}</td>

                            <td><a href="{{route('post.edit',$post->id)}}"><i class="fas fa-edit"></i></a></td>
                              

                            <td>
                              <form id="delete-form-{{$post->id}}" action="{{route('post.destroy',$post->id)}}" method="post" style="display: none;">
                                {{csrf_field()}}
                                {{method_field('DELETE')}}
                              </form>

                              <a href="" onclick="
                              if(confirm('Are you sure,You want to delete it?')){
                                  event.preventDefault();
                                  document.getElementById('delete-form-{{$post->id}}').submit();
                                }
                                else{
                                  event.preventDefault();
                                }" ><i class="far fa-trash-alt"></i></a>
                            </td> 
     
                            
                          </tr>    
                        @endforeach
                      
                      
                      </tbody>
                      <tfoot>
                      <tr>
                        <th>Sr No.</th>
                        <th>Title</th>
                        <th>Sub Title</th>
                        <th>Slug</th>
                        <th>Created_At</th>
        
                        <th>Edit</th>
                        <th>Delete</th>
                      </tr>
                      </tfoot>
                    </table>
                  </div>
                  <!-- /.card-body -->
                </div>


             </div>
             <!-- /.card-body -->
             
           </div>
           <!-- /.card -->



        </div>
       </div>
       
       <!-- /.card-body -->
       <div class="card-footer">
         Footer
       </div>
       <!-- /.card-footer-->
     </div>
     <!-- /.card -->

   </section>
   <!-- /.content -->
 </div>
 <!-- /.content-wrapper -->

@endsection