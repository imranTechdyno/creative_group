@php
    $productElement = element('product.element');
    $productContent = content('product_content.content');
@endphp

<!-- News and event Section starts -->
<div class="page-title text-center">
        <p class="contact_tag1 text-center text-bold">{{ $productContent->data->top_title }}</p>
        <hr class="hr_for_all">
</div>
<section class="home-publications product_bg">
    <div class="container">
        
        <div class="news-head"></div>

        <div class="row">
           
                @foreach ($productElement as $item)
                    <div class="col-md-3 col-sm-12">
                        <div class="box">
                            <a href="{{ url('product-details', $item->data->slug) }}">
                                <img src="{{ @$item->data->image }}" alt="Box Image" />
                            </a>
                            <h4 style="min-height: 40px">{{ @$item->data->title }}</h4>
                            <p>{{ strip_tags(Str::limit(@$item->data->short_description, 130, '...')) }}
                                <a href="{{ url('product-details', $item->data->slug) }}"><button style="font-size: 18px;">See More</button></a>
                            </p>
                            
                        </div>
                    </div>
              
            @endforeach
              </div>

        </div>
</section>
