@extends('master') @section('content')

<div class ="row figure justify content-center">
    <div class ="movehigher col-6">
        <h2 class="heading">Search your strain</h2>
        <form action=/"get_strains" method="post">
            @crsf
    </div>
</div>



@endsection
