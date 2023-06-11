@extends('frontend.layout.master')
@section('content')
    <!-- News and event Section starts -->
    <section class="home-publications product_bg">
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-lg-12 col-md-6 col-sm-12 col-12 box ">
                    <div class="text-center">
                        <img src="{{ @$sister_concern->data->image }}" class="img-fluid concern_img" alt="Box Image" />
                        <div class="col-md-12 text-justify">
                            <h4>{{ @$sister_concern->data->title }}</h4>
                            <p>{{ strip_tags(@$sister_concern->data->short_description) }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- News and event Section ends -->
@endsection
