@php
    $newsEventsElement = element('news_and_events.element');
    $newsEventsContent = content('news_and_events_content.content');
@endphp
<div class="page-title text-center">
    <p class="contact_tag1 text-center text-bold">{{ @$newsEventsContent->data->title }}</p>
    <hr class="hr_for_news">
</div>
<!-- News and event Section starts -->
<section class="home-publications">
    <div class="container">

        <div class="row">
            
                @foreach ($newsEventsElement as $item)
             
                    <div class="col-md-3 col-sm-6">
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
</section>
<!-- News and event Section ends -->
