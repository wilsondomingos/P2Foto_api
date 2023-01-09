@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Fotos</div>

                <div class="card-body">
                    <div class="row">
                    @if(isset($fotos))
                        @foreach($fotos as $foto)

                          <img src="{{asset('storage/'.$foto->foto)}}" class="ml-2" alt="" width="200">
                    
                        @endforeach
                    @endif
                </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
