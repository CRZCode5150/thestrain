@extends('master') @section('content')

<div id="bottom" class="row">


    <div id="paddingrop1" class="col-11">
        @if(!empty($strains))
        @foreach($strains as $strain)
        <div class="borderbottom" class="row runRouteWithinStack">
            <div class="circle col">{{$strain['name']}}</div>
            <div class="col">
                <ul id="moveul">
                    <h3>Race: {{$strain['race']}}</h3>
                    <br>
                    <p>Description: {{$strain['desc']}}</p>
                </ul>
            </div>
        </div>
        @endforeach
        @endif
    </div>
    <div id="sidebar" class="col-1 text-center">
        @foreach($allStrains as $strainName => $strainDetails)
            <a class="borderbottom1" href="">{{$strainName}}</a>
        @endforeach

    </div>
</div>
<br> @endsection
