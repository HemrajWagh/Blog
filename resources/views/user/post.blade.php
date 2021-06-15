@extends('user/app')


@section('bg-img',Storage::disk('local')->url($post->image)))

@section('head')
<link rel="stylesheet" href="{{asset('user\css\prism.css')}}">
@endsection

@section('title',$post->title)

@section('subheading',$post->subtitle)

@section('main-content')

<!-- Post Content-->
<article class="mb-4">
    <div class="container px-4 px-lg-5">

        <div class="row gx-4 gx-lg-5 justify-content-center">

            <div class="col-md-10 col-lg-8 col-xl-7">
                <small>Created at {{$post->created_at->diffForHumans()}}</small>
                    @foreach ($post->categories as $category)
                        <small class="pull-right" >
                            <a href="{{ route('category',$category->slug) }}">{{$category->name}}</a>
                        </small>
                    @endforeach
                    {!! htmlspecialchars_decode($post->body)!!}

               <!-- Tag clouds  -->
               <h3>Tags Clouds</h3>
                    @foreach ($post->tags as $tag)
                        <small class="pull-right" style="border-radius: 5px;border:solid,gray;padding: 5px;">
                            <a href="{{ route('tag',$tag->slug) }}">{{$tag->name}}</a>
                        </small>
                    @endforeach
            </div>
        </div>
    </div>
</article>
@endsection

@section('footer')
<script src="{{asset('user\js\prism.js')}}">

</script>

@endsection