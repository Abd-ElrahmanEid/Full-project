@extends('layouts.admindesign')

@section('content')

<div class="container alert alert-dark text-center fs-4" role="alert" style="height: 10vh; font-family: Georgia">
    More Information about Transactions
</div><br>



{{-------chart-----------------------------------------------------------------------------------------}}
<script src="https://www.amcharts.com/lib/4/core.js"></script>
<script src="https://www.amcharts.com/lib/4/charts.js"></script>
<script src="https://www.amcharts.com/lib/4/themes/animated.js"></script>
<div style="display: flex; justify-content: center; align-items: center">
    <div id="chartdiv"></div>

</div><br>

{{------------------------------------------------------------------------------------------------}}

{{--cards---------------------------------------}}
    <div class="main">
        <div class="box-container">

            <div class="box box1">
                <div class="text">
                    <h2 class="topic-heading">60.5k</h2>
                    <h2 class="topic">Product Views</h2>
                </div>

                <i class="fa-sharp fa-solid fa-eye" style="color: white; font-size: 40px; margin-bottom: 10px"></i>
            </div>


            <div class="box box2">
                <div class="text">
                    <h2 class="topic-heading">150</h2>
                    <h2 class="topic">Likes</h2>
                </div>

                <i class="fa-solid fa-heart" style="color: white; font-size: 40px; margin-bottom: 10px"></i>
            </div>


            <div class="box box3">
                <div class="text">
                    <h2 class="topic-heading">70</h2>
                    <h2 class="topic">Published</h2>
                </div>

                <i class="fa-solid fa-check" style="color: white; font-size: 55px; margin-bottom: 10px"></i>
            </div>

        </div>
    </div>


@endsection
