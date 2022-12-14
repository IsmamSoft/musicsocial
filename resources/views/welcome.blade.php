@extends('layouts.app')

@section('meta')

<meta name="description" content="All Bands are here.">
<meta name="keywords" content="Music | Social Networking">
<meta name="author" content="Ismam Tabriz">

@endsection

@section('style_css')
<style>
    .card-horizontal {
    display: flex;
    flex: 1 1 auto;
}
</style>
@endsection
@section('content')
<div class="py-2">
    <div class="row">
        <div class="col-md-8">
            <div class="row">
            @foreach ($posts as $post)
            <div class="col-sm-4 mb-4">
                <div class="card sha">
                    {{-- <div class="card-header">
                    {{ $post->user->name }}
                    </div> --}}
                    <img src="{{url('post')}}/{{$post->post_images}}" style="height: 150px;" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">{{ $post->post_body }} </p>
                    </div>
                    <div class="card-footer">
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <button type="button" class="btn btn-outline-secondary"><i class="fas fa-chevron-up"></i></button>
                                <button type="button" class="btn btn-outline-secondary"><i class="fas fa-chevron-down"></i></button>
                            </div>
                            <a href="{{ url('post') }}/{{ $post->post_id }}" class="btn btn-outline-secondary">Full Post</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        </div>



    <div class="col-md-4">
    <div class="row">
    <div class="card sha">
        <img src="https://wallpaperaccess.com/full/30100.jpg" style="height: 200px; width: 100%;" class="card-img-top" alt="...">
        <div class="card-footer">
            <div class="btn-group" role="group" aria-label="Basic example">
                <button type="button" class="btn btn-outline-secondary"><i class="fas fa-heart"></i></button>
                <button type="button" class="btn btn-outline-secondary"><i class="far fa-surprise"></i></button>
                <a href="" class="btn btn-outline-secondary">Full Post</a>
            </div>
        </div>
    </div>

    <div class="card mt-2 sha">
        <div class="card-horizontal">
            <div class="img-square-wrapper">
                <img class="" src="https://cdn.pixabay.com/photo/2018/01/14/23/12/nature-3082832__340.jpg" style="height: 150px; width:150px;" alt="Card image cap">
            </div>
            <div class="card-body">
                <p class="card-text">Some quick exa the card's content.</p>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>
    </div>
</div>

@endsection



