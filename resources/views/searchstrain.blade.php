@extends('master') @section('content')



<div id="bottom" class="row">


    <div id="paddingrop1" class="col-11">
        @if(!empty($strains))
        @foreach($strains as $strain)
        <div class="borderbottom row runRouteWithinStack">
            <div class="pic col">
                <div class="circle">{{$strain['name']}}</div>
            </div>

            <div class="col">
                <ul id="moveul">
                    <h3 class="yo">Race:</h3>
                    <p>{{$strain['race']}}</p>
                    <h6 class="yo">Description:</h6>
                    <p>{{$strain['desc']}}</p>
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
