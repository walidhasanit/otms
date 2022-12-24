@extends('website.master')

@section('title')
    Best Online Training System In Bangladesh
@endsection

@section('body')
    <div class="carousel slide" id="slider" data-bs-ride="carousel" data-bs-interval="1800">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{asset('/')}}image/s1.jpg" alt="" class="w-100 bg-transparent" height="500"/>
                <div class="carousel-caption">
                    <h3 class="text-dark">PHP WITH LARAVEL FRAMEWORK</h3>
                    <p class="text-dark">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus debitis iure veritatis! Beatae culpa, doloribus est eum explicabo fugit laborum laudantium magnam maxime mollitia optio, pariatur, possimus suscipit voluptatibus voluptatum?</p>
                    <a href="" class="btn btn-outline-danger px-5">Read More</a>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{asset('/')}}image/s3.jpg" alt="" class="w-100 bg-transparent" height="500"/>
                <div class="carousel-caption">
                    <h3 class="text-white">Mobile App Development</h3>
                    <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit. A, adipisci architecto assumenda consequuntur, cumque dolorum nostrum quaerat qui quis, quisquam recusandae reprehenderit sed tempora! Aperiam culpa excepturi explicabo illo quaerat!</p>
                    <a href="" class="btn btn-outline-danger px-5">Read More</a>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{asset('/')}}image/s5.jpg" alt="" class="w-100 bg-transparent" height="500"/>
                <div class="carousel-caption">
                    <h3 class="text-white">Responsive Web Design</h3>
                    <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit. A, ab, alias autem deleniti dolore earum eveniet harum incidunt ipsa laudantium, libero possimus praesentium rem similique sit tempora temporibus tenetur vel.</p>
                    <a href="" class="btn btn-outline-danger px-5">Read More</a>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{asset('/')}}image/s7.jpg" alt="" class="w-100 bg-transparent" height="450"/>
                <div class="carousel-caption">
                    <h3 class="text-dark">Professional Digital Marketing</h3>
                    <p class="text-dark">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem consectetur deserunt dolorem, error expedita explicabo facere harum labore libero, non optio perferendis quibusdam reiciendis rem repellendus sit suscipit velit veritatis.</p>
                    <a href="" class="btn btn-outline-danger px-5">Read More</a>
                </div>
            </div>
        </div>
        <a href="#slider" class="carousel-control-prev" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a href="#slider" class="carousel-control-next" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
    </div>

    <section class="py-5 bg-light">
        <div class="container">
            <div class="row bg-danger">
                <div class="col">
                    <div class="card card-body text-center rounded-0 border-0">
                        <h3 class="">Recent Published Course</h3>
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-md-4 mb-3">
                    <div class="card rounded-0 border-0 shadow">
                        <img src="{{asset('/')}}image/s4.jpg" alt="">
                        <div class="card-body">
                            <h4>PHP with laravel Framework</h4>
                            <P class="mb-0">TK.2500</P>
                            <p>Starting Date:10-01-2022</p>
                            <hr/>
                            <a href="" class="btn btn-success">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card rounded-0 border-0 shadow">
                        <img src="{{asset('/')}}image/s4.jpg" alt="">
                        <div class="card-body">
                            <h4>PHP with laravel Framework</h4>
                            <P class="mb-0">TK.2500</P>
                            <p>Starting Date:10-01-2022</p>
                            <hr/>
                            <a href="" class="btn btn-success">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card rounded- border-0 shadow">
                        <img src="{{asset('/')}}image/s4.jpg" alt="">
                        <div class="card-body">
                            <h4>PHP with laravel Framework</h4>
                            <P class="mb-0">TK.2500</P>
                            <p>Starting Date:10-01-2022</p>
                            <hr/>
                            <a href="" class="btn btn-success">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 bg-light">
        <div class="container">
            <div class="row bg-danger">
                <div class="col">
                    <div class="card card-body text-center rounded-0 border-0">
                        <h3 class="">Popular Course</h3>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-md-4 mb-3">
                    <div class="card rounded-0 border-0 shadow">
                        <img src="{{asset('/')}}image/s3.jpg" alt="">
                        <div class="card-body">
                            <h4>PHP with laravel Framework</h4>
                            <P class="mb-0">TK.2500</P>
                            <p>Starting Date:10-01-2022</p>
                            <hr/>
                            <a href="" class="btn btn-success">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card rounded-0 border-0 shadow">
                        <img src="{{asset('/')}}image/s3.jpg" alt="">
                        <div class="card-body">
                            <h4>PHP with laravel Framework</h4>
                            <P class="mb-0">TK.2500</P>
                            <p>Starting Date:10-01-2022</p>
                            <hr/>
                            <a href="" class="btn btn-success">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card rounded- border-0 shadow">
                        <img src="{{asset('/')}}image/s3.jpg" alt="">
                        <div class="card-body">
                            <h4>PHP with laravel Framework</h4>
                            <P class="mb-0">TK.2500</P>
                            <p>Starting Date:10-01-2022</p>
                            <hr/>
                            <a href="" class="btn btn-success">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
