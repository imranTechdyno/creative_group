@php
    $productElement = element('product.element');
    $productContent = content('product_content.content');
@endphp

<!-- News and event Section starts -->
<section class="home-publications product_bg">
    <div class="container">
        <div class="news-head">{{ $productContent->data->top_title }}</div>

        <div class="row">
            <div class="news">
                @foreach ($productElement as $item)
                    <div class="col-md-6 col-sm-12">
                        <div class="box">
                            <a href="{{ url('product-details', $item->data->slug) }}">
                                <img src="{{ @$item->data->image }}" alt="Box Image" />
                            </a>
                            <a href="{{ url('product-details', $item->data->slug) }}"><h4>{{ @$item->data->title }}</h4></a>
                            <p>{{ strip_tags(Str::limit(@$item->data->short_description, 200, '...')) }}</p>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>


    <center>
        <a href="{{ url('all-product') }}">
            <button class="btn btn-primary sis">View More</button>
        </a>
    </center>
    </div>
</section>
<!-- News and event Section -->
