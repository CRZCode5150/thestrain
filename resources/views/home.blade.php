@extends('master') @section('content')


<div class="row figure justify-content-center">
    <div class="movehigher col-6 search-form text-center">
        <h2 class="heading">Search Your Strain</h2>
        <form action="/get_strains" method="post">
            @csrf
            <div class="control-group">
                <input name="strain" class="form-control mr-sm-2 mb-2" type="search" placeholder="Search Strain" aria-label="Search">
                <button class="btn btn-outline" type="submit">Search</button>
            </div>
        </form>
    </div>

    <div class="row">
        <div id="blueOG" class="col-4">
            <aside class="profile-card">

                <header>

                    <!-- here’s the avatar -->
                    <a href="https://www.leafly.com/sativa/ghost-train-haze"><img src="/img/GTH.png"></a>

                    <!-- the username -->
                    <h1>Ghost Train Haze</h1>

                    <!-- and role or location -->
                    <h2>- Sativa -</h2>

                </header>

                <!-- bit of a bio; who are you? -->
                <div class="profile-bio">

                    <p>With a sour citrus and floral aroma, Ghost Train Haze delivers a potent dose of THC to knock out pain, depression, and appetite loss.</p>

                </div>

            </aside>
        </div>
        <!-- that’s all folks! -->


        <div class="TopTwo col-4">
            <h1 class="litty" >TOP TWO STRAINS THIS WEEK!</h1>
        </div>





        <div class="col-4">



            <aside class="profile-card">

                <header>

                    <!-- here’s the avatar -->
                    <a href="https://www.leafly.com/indica/northern-lights"><img src="/img/NL.png"></a>

                    <!-- the username -->
                    <h1>Northern Lights</h1>

                    <!-- and role or location -->
                    <h2>- Indica -</h2>

                </header>

                <!-- bit of a bio; who are you? -->
                <div class="profile-bio">

                    <p>Northern Lights’ psychoactive effects settle in firmly throughout the body, relaxing muscles and pacifying the mind in dreamy euphoria.</p>

                </div>

            </aside>
        </div>
        <!-- that’s all folks! -->
    </div>
</div>



@endsection
