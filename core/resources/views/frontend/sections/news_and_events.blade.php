@php
    $newsEventsElement = element('news_and_events.element');
    $newsEventsContent = content('news_and_events_content.content');
@endphp

<!-- News and event Section starts -->
<section class="home-publications">
    <div class="container">
        <div class="news-head">{{ @$newsEventsContent->data->title }}</div>

        <div class="row">
            <div class="news">
                @foreach ($newsEventsElement as $item)
                    <div class="col-md-6 col-sm-12 col-12">
                        <div class="box">
                            <a href="{{ url('news-and-events-details',$item->data->slug) }}">
                                <img src="{{ @$item->data->image }}" alt="Box Image" />
                            </a>
                            <i class="fa-solid fa-calendar-days"></i>
                            {{ \Carbon\Carbon::parse(@$item->data->date)->format('d F Y') }}
                            <a href="{{ url('news-and-events-details',$item->data->slug) }}"><h4>{{ @$item->data->title }}</h4></a>
                            <p>{{ strip_tags(Str::limit(@$item->data->short_description, 200, '...')) }}</p>
                            <br />
                            
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>


    <center>
        <a href="{{ url('all-news-and-events') }}">
            <button class="btn btn-primary sis">View More</button>
        </a>
    </center>
    </div>
</section>
<!-- News and event Section ends -->
