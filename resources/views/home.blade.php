@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6 card">
            <div class="row">
                <div class="col-md-4">
                   <img src="/img/dan.png">
                </div>
                <div class="col-md-4 leftmargin">
                    <h4>Kiwi King</h4>
                    <p>A girl in Architecture, Life companion of Sir Mango, kind-hearted,
                        smiles like an angel!
                    </p>
                </div>
                <div class="col-md-3 leftmargin">


                    <div class="weather">
                        <i class="{{$icondan}}"></i>
                        <div class="subweather">{{$weatherdan}}</div>
                    </div>
                    <div class="degree">{{$degreedan}}&#x2109;</div>


                </div>
                <div class="date">{{$today}}</div>
            </div>
        </div>

        <div class="col-md-6 cardboy">
            <div class="row">
                <div class="col-md-4">
                    <img src="/img/ian.png">
                </div>
                <div class="col-md-4 leftmargin">
                    <h4>Sir Mango</h4>
                    <p>A boy in Computer Science, beloved of Kiwi King, Easy-going, smart and cool as RockStar!
                    </p>
                </div>
                <div class="col-md-3 leftmargin">


                    <div class="weather">
                        <i class="{{$iconian}}"></i>
                        <div class="subweather">{{$weatherian}}</div>
                    </div>
                    <div class="degree">{{$degreeian}}&#x2109;</div>

                </div>
                <div class="date">{{$today}}</div>
            </div>
        </div>


    </div>
</div>
@endsection
