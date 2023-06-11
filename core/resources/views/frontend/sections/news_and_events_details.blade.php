@extends('frontend.layout.master')
@section('content')
    <!-- News and event Section starts -->
    <section class="home-publications product_bg">
        <div class="container">

            <div class="row">
                <div class="">
                    <div class="col-md-12 box">
                        <div class="col-md-6 col-sm-12" style="vertical-align: middle">
                            <div class="">
                                <h4 >{{ @$news_and_events->data->title }}</h4>
                                <p>{{ @$news_and_events->data->short_description }}</p>
                                <p>Publish Date : {{ @$news_and_events->data->date }}</p>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="">
                                <img src="{{ @$news_and_events->data->image }}" alt="Box Image" />
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- News and event Section ends -->
@endsection