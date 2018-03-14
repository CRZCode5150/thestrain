@extends('master') @section('content')


<div class="row figure justify-content-center">
    <div class="col-6 search-form text-center">
        <form action="/get_strains" method="post">
            @csrf
            <div class="control-group">
                <input name="strain" class="form-control mr-sm-2 mb-2" type="search" placeholder="Search Strain" aria-label="Search">
                <button class="btn btn-outline" type="submit">Search</button>
            </div>
        </form>
    </div>
</div>

@endsection
