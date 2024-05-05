@extends('layouts.master')
@section('content')
    <div class="container">
        <div class="text-center my-5">
            <h1>Bootstrap 5 - Blog Posts Grid Layout</h1>
            <hr />
        </div>

        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="card mb-5 shadow-sm">
{{--                    <a href="{{route('chef')}}"> <img src="{{asset('./imports/assets/img/imgs/a.jpg')}}" class="img-fluid" /></a>--}}
                    <a href="{{route('chef')}}"> <img src="{{asset('./imports/assets/img/imgs/a.jpg')}}" class="img-fluid" /></a>

                    <div class="card-body">
                        <div class="card-title">
                            <h2>This is the blog title</h2>
                        </div>
                        <div class="card-text">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Deleniti corporis quis ab. Exercitationem et quibusdam
                                impedit? Sint vitae labore nulla sit, dignissimos non tempore,
                                maxime facere, quod harum aliquid in...
                            </p>
                        </div>
                        <a href="#" class="btn btn-outline-primary rounded-0 float-end"
                        >Read More</a
                        >
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="card mb-5 shadow-sm">
                    <a href="#">  <img src="{{asset('./imports/assets/img/imgs/b.jpg')}}" class="img-fluid" /></a>
{{--                    <a href="{{route('math')}}">  <img src="{{asset('./imports/assets/img/imgs/b.jpg')}}" class="img-fluid" /></a>--}}

                    <div class="card-body">
                        <div class="card-title">
                            <h2>This is the blog title</h2>
                        </div>
                        <div class="card-text">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Deleniti corporis quis ab. Exercitationem et quibusdam
                                impedit? Sint vitae labore nulla sit, dignissimos non tempore,
                                maxime facere, quod harum aliquid in...
                            </p>
                        </div>
                        <a href="#" class="btn btn-outline-primary rounded-0 float-end"
                        >Read More</a
                        >
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="card mb-5 shadow-sm">
                    <img src="{{asset('./imports/assets/img/imgs/c.jpg')}}" class="img-fluid" />

                    <div class="card-body">
                        <div class="card-title">
                            <h2>This is the blog title</h2>
                        </div>
                        <div class="card-text">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Deleniti corporis quis ab. Exercitationem et quibusdam
                                impedit? Sint vitae labore nulla sit, dignissimos non tempore,
                                maxime facere, quod harum aliquid in...
                            </p>
                        </div>
                        <a href="#" class="btn btn-outline-primary rounded-0 float-end"
                        >Read More</a
                        >
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="card mb-5 shadow-sm">
                    <img src="{{asset('./imports/assets/img/imgs/d.jpg')}}" class="img-fluid" />

                    <div class="card-body">
                        <div class="card-title">
                            <h2>This is the blog title</h2>
                        </div>
                        <div class="card-text">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Deleniti corporis quis ab. Exercitationem et quibusdam
                                impedit? Sint vitae labore nulla sit, dignissimos non tempore,
                                maxime facere, quod harum aliquid in...
                            </p>
                        </div>
                        <a href="#" class="btn btn-outline-primary rounded-0 float-end"
                        >Read More</a
                        >
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="card mb-5 shadow-sm">
                    <img src="{{asset('./imports/assets/img/imgs/e.jpg')}}" class="img-fluid" />

                    <div class="card-body">
                        <div class="card-title">
                            <h2>This is the blog title</h2>
                        </div>
                        <div class="card-text">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Deleniti corporis quis ab. Exercitationem et quibusdam
                                impedit? Sint vitae labore nulla sit, dignissimos non tempore,
                                maxime facere, quod harum aliquid in...
                            </p>
                        </div>
                        <a href="#" class="btn btn-outline-primary rounded-0 float-end"
                        >Read More</a
                        >
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="card mb-5 shadow-sm">
                    <img src="{{asset('./imports/assets/img/imgs/f.jpg')}}" class="img-fluid" />

                    <div class="card-body">
                        <div class="card-title">
                            <h2>This is the blog title</h2>
                        </div>
                        <div class="card-text">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Deleniti corporis quis ab. Exercitationem et quibusdam
                                impedit? Sint vitae labore nulla sit, dignissimos non tempore,
                                maxime facere, quod harum aliquid in...
                            </p>
                        </div>
                        <a href="#" class="btn btn-outline-primary rounded-0 float-end"
                        >Read More</a
                        >
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
