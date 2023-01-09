@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Albums</div>

                <div class="card-body">
                    <div class="row">
                    @if(isset($album))
                        @foreach($album as $al)
                        <a href="ver_fotos/{{$al->id}}">
                        {{$al->titulo}}
                          <img src="/download.png" alt="" width="100">
                        </a>
                        @endforeach
                    @endif
                </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
