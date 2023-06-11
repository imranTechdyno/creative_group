@extends('frontend.layout.master')
@section('content')
    <!-- News and event Section starts -->
    <section class="home-publications product_bg">
        <div class="container">

            <div class="row">
                <div class="">
                    <div class="col-md-6">
                        <div class="box col-md-12">
                            <img src="{{ $press_release->data->image }}" alt="Box Image" />
                            <h4>{{ $press_release->data->title }}</h4>
                            <p>{{ Str::limit($press_release->data->short_description, 200, '...') }}</p>
                            <br />
                            <i class="fa-solid fa-calendar-days"></i>
                            {{ \Carbon\Carbon::parse($press_release->data->date)->format('d F Y') }}
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- News and event Section ends -->
@endsection