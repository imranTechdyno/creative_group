@extends('frontend.layout.master')
@section('content')
<div class="page-title text-center">
    <p class="contact_tag1 text-center text-bold">{{ @$product_details->data->title }}</p>
    <hr class="hr_for_all">
</div>
    <!-- News and event Section starts -->
    <section class="home-publications product_bg">
        <div class="container">

            <div class="row">
                <div class="">
                    <div class="col-md-12 box" style="border: none!important">
                        <div class="col-md-6 col-sm-12 col-12">
                            <div class="">
                                <img src="{{ @$product_details->data->image }}" alt="Box Image" />
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12 col-12" style="vertical-align: middle">
                            <div class="" style="padding-top:20px">
                                <h3 style="padding-left: 15px">{{ @$product_details->data->title }}</h3>
                                <p style="padding-left: 0px!important" class="text-justify">{!! @$product_details->data->short_description !!}</p>
                            </div>
                        </div>


                    </div>

                </div>
            </div>
            <div class="row">
                <div class="">
                    <div class="">
                        <div class="col-md-9 col-sm-12 col-12 box product_des">
                            <div class="">
                                <h3 style="padding-left:30px">Description:</h3>
                                <p class="text-justify" >{!! (@$product_details->data->description) !!}</p>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-12 col-12 py-3 box" style="border: none!important">
                            <h3 style="margin-top: 20px;padding-left:20px">Related Products</h3>
                            @foreach ($related_product as $item)
                                <a href="{{ url('product-details', $item->data->slug) }}">
                                    <div class="productItem">


                                        <img src="{{ $item->data->image }}" class="rel_p_img" alt="">

                                        <p class="caption">
                                            {{ $item->data->title }}
                                        </p>
                                    </div>
                                </a>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- News and event Section ends -->
@endsection
