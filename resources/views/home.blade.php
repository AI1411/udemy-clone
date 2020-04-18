@extends('layouts.app')

@section('content')
    <section class="home-banner-area" style="background-image: url({{ asset('images/learning.jpg') }})">
        <div class="container-lg">
            <div class="row">
                <div class="col">
                    <div class="home-banner-wrap">
                        <h2>Best place for learning</h2>
                        <p>Learn from any topic, choose from category</p>
                        <form class="" action=""
                              method="get">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="home-fact-area">
        <div class="container-lg">
            <div class="row">
                <div class="col-md-4 d-flex">
                    <div class="home-fact-box mr-md-auto ml-auto mr-auto">
                        <i class="fas fa-bullseye float-left"></i>
                        <div class="text-box">
                            <p>Explore A Variety Of Fresh Topics</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 d-flex">
                    <div class="home-fact-box mr-md-auto ml-auto mr-auto">
                        <i class="fa fa-check float-left"></i>
                        <div class="text-box">
                            <h4>Expert Instruction</h4>
                            <p>Find The Right Course For You</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 d-flex">
                    <div class="home-fact-box mr-md-auto ml-auto mr-auto">
                        <i class="fa fa-clock float-left"></i>
                        <div class="text-box">
                            <h4>Lifetime Access</h4>
                            <p>Learn On Your Schedule</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
