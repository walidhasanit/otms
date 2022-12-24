@extends('website.master')

@section('title')
    contact page
@endsection

@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="card card-body rounded-0 border-0">
                        <h2 class="text-center">CONTACT INFO</h2>
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-md-6">
                    <div class="card card-body rounded-0 border-0">
                        <address>
                            <h6 class="fw-bold">For Dhaka Division:</h6>
                            BASIS Institute of Technology & Management (BITM)
                            BDBL Bhaban (3rd Floor – East), 12 Kawran Bazar, Dhaka -1215.
                            Contact Number: +8809612342486 Ext: 209-211 (from 9:30am – 5:00 pm)
                            Email address: info@bitm.org.bd
                        </address>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card card-body rounded-0 border-0">
                        <address>
                            <h6 class="fw-bold">For Chittagong Division:</h6>
                            BASIS Institute of Technology & Management (BITM)
                            R.I Tower (4th Floor), 23/A M M Ali Road, Golpahar Circle (Beside Evergreen Health Center), Mehedibag, Chittagong.
                            Contact Number: +8809612342486 Ext: 220 (from 9:30am – 5:00 pm)
                            Email address: info@bitm.org.bd
                        </address>
                    </div>
                </div>
                <div class="col-md-6 py-5">
                    <div class="card card-body rounded-0 border-0 shadow">
                        <h4>CONTACT</h4>
                        <P>BITM, Cell: +8809612342486, Email: info@bitm.org.bd</P>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3651.9024424301397!2d90.39108011498136!3d23.750858084589126!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8bd552c2b3b%3A0x4e70f117856f0c22!2sBASIS%20Institute%20of%20Technology%20%26%20Management%20(BITM)!5e0!3m2!1sbn!2sbd!4v1670167799401!5m2!1sbn!2sbd" width="515" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
                <div class="col-md-6 py-5">
                    <div class="card  rounded-1 border-0 shadow">
                        <div class="card-body bg-dark text-white">
                            <h3 class="py-2 ">Contact Us</h3>
                            <form action="" method="POST">
                                <div class="row mb-3">
                                    <label class="col-md-3">Name</label>
                                    <div class="col-md-9">
                                        <input type="text" name="name" class="form-control"/>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-md-3">Email</label>
                                    <div class="col-md-9">
                                        <input type="email" name="email" class="form-control"/>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-md-3">Cell No:</label>
                                    <div class="col-md-9">
                                        <input type="number" name="number" class="form-control"/>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-md-3">Message</label>
                                    <div class="col-md-9">
                                        <textarea  name="message" class="form-control"></textarea>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-md-3"></label>
                                    <div class="col-md-9">
                                        <button type="submit" class="btn btn-success">Send
                                            <i class="fa-solid fa-paper-plane"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
