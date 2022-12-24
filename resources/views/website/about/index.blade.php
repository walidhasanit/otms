@extends('website.master')

@section('title')
    about us
@endsection

@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="card card-body border-0 shadow">
                        <h3>Our Mission</h3>
                        <hr/>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet deserunt dignissimos ea eligendi enim facere harum in iure nihil quas quasi quisquam saepe suscipit, ut voluptatem. Fuga, in pariatur? Neque?</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="card card-body border-0 shadow">
                        <h3>Our Vission</h3>
                        <hr/>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet deserunt dignissimos ea eligendi enim facere harum in iure nihil quas quasi quisquam saepe suscipit, ut voluptatem. Fuga, in pariatur? Neque?</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-3">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="card card-body border-0 text-center">
                        <h3>Our Instructor</h3>
                        <hr/>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet deserunt dignissimos ea eligendi enim facere harum in iure nihil quas quasi quisquam saepe suscipit, ut voluptatem. Fuga, in pariatur? Neque?</p>
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-md-4">
                    <div class="card">
                        <img src="{{asset('/')}}website/image/s4.jpg" alt="">
                        <div class="card-body">
                            <h4>Instructor Name</h4>
                            <p>Instructor Designation</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="{{asset('/')}}website/image/s4.jpg" alt="">
                        <div class="card-body">
                            <h4>Instructor Name</h4>
                            <p>Instructor Designation</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="{{asset('/')}}website/image/s4.jpg" alt="">
                        <div class="card-body">
                            <h4>Instructor Name</h4>
                            <p>Instructor Designation</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
