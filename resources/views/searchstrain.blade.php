@extends('master')
@section('content')
@if(!empty($strains))
@foreach($strains as $strain)
<div id="bottom" class="row">
    <div class=col-4>
        <div class="circle">{{$strain['name']}}</div>
    </div>

    <div id="paddingrop1" class="col-4">
            <ul id="moveul">
                <li>Race: {{$strain['race']}}</li>
                <br>
                <li>Description: {{$strain['desc']}}</li>
            </ul>
    </div>
</div>
<br>
@endforeach
@endif
@endsection
