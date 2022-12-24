@extends('website.master')

@section('title')
    training category
@endsection

@section('body')

    <section class="py-5 bg-light">
        <div class="container">
            <div class="row bg-danger">
                <div class="col">
                    <div class="card card-body text-center rounded-0 border-0">
                        <h3 class="">Category Training Course</h3>
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-md-4 mb-3">
                    <div class="card rounded-0 border-0 shadow">
                        <img src="{{asset('/')}}website/image/s4.jpg" alt="">
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
                        <img src="{{asset('/')}}website/image/s4.jpg" alt="">
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
                        <img src="{{asset('/')}}website/image/s4.jpg" alt="">
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
