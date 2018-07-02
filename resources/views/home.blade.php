@extends('master') @section('content')

<div class="row figure justify-content-center">
    <div class="movehigher search-form text-center col-6">
        <h2 class="heading">Search your strain</h2>
        <form action=/"get_strains" method="post">
            @crsf
            <div class="control-group">
            <input name="srain" class="form-control mb-2" type="search" placeholder="Search Strain" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
            <button class="btn btn-outline" type="submit" >Search</button>
    </div>
</div>



@endsection
