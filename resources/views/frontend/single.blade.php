@extends('layouts.app')
@section('content')
<div class="py-2">




    <div class="container">
         <div class="row">

          <div class="col-8">

            @foreach ($posts as $post)
            <div class="card mt-3 sha">
                <div class="card-header">
                {{ $post->user['name'] }}
                </div>
                <img src="{{url('post')}}/{{$post->post_images}}" style="width:100%; height: 450px;" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">{{ $post->post_body }} </p>
                </div>
                <div class="card-footer">
                    <div class="btn-group" role="group" aria-label="Basic example">
                        <button type="button" class="btn btn-outline-secondary"><i class="fas fa-chevron-up"></i></button>
                        <button type="button" class="btn btn-outline-secondary"><i class="fas fa-chevron-down"></i></button>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Comment!" aria-label="Recipient's username" aria-describedby="button-addon2">
                        <div class="input-group-append">
                          <button class="btn btn-outline-secondary" type="submit">Comment</button>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach


          </div>



          <div class="col-4">

            <div class="card mt-3 sha">
                <img src="https://wallpaperaccess.com/full/30100.jpg" style="height: 200px; width: 100%;" class="card-img-top" alt="...">
                <div class="card-footer">
                    <div class="btn-group" role="group" aria-label="Basic example">
                        <button type="button" class="btn btn-outline-secondary"><i class="fas fa-heart"></i></button>
                        <button type="button" class="btn btn-outline-secondary"><i class="far fa-surprise"></i></button>
                    </div>
                </div>
            </div>

          </div>
        </div>

</div>
</div>
</div>
@endsection
