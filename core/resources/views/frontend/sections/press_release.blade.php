@php
    $pressRelease = element('press_release.element');
   
@endphp
<div class="page-title text-center">

</div>

<!-- News and event Section starts -->
<section class="home-publications">
    <div class="container">
        <div class="news-head">Press Release</div>

        <div class="row">
                @foreach ($pressRelease as $item)
                    <div class="col-md-3">
                        <div class="box">
                            <a href="{{ url('press-release',$item->data->slug) }}">
                                <img src="{{ @$item->data->image }}" alt="Box Image" />
                            </a>
                            <h4>{{ @$item->data->title }}</h4>
                            <p>{{ Str::limit(@$item->data->short_description, 200, '...') }}</p>
                            <br />
                            <i class="fa-solid fa-calendar-days"></i>
                            {{ \Carbon\Carbon::parse(@$item->data->date)->format('d F Y') }}
                        </div>
                    </div>
                @endforeach
        </div>
    </div>
</section>
<!-- News and event Section ends -->

