@php
    
    $sister_concernElement = element('sister_concern.element');
    $sister_concernContent = content('sister_concern_content.content');
@endphp

<!-- box slider our sister concern -->
<div class="sister">{{ @$sister_concernContent->data->title }}</div>
<section class="card_container">
    <div class="container">
        <div class="row">
            <div class="multiple-items">
                @forelse ($sister_concernElement as $item)
                    <div class="col-md-12 col-sm-12 col-12">
                        <div class="card">
                            <h2>{{ @$item->data->title }}</h2>

                            <p class="text-justify">
                                {{ Str::limit(@$item->data->short_description, 200, '...') }}
                                @if ($item->data->website_link)
                                    <a href="{{ $item->data->website_link }}">VIEW MORE..</a>
                                @else
                                    <a href="{{ url('sister-concern-details', $item->data->slug) }}">VIEW MORE..</a>
                                @endif

                            </p>
                        </div>
                    </div>
                @empty
                @endforelse
            </div>
        </div>
        <center>
            <div class="sis-ter">
                <a href="{{ url('all-sister-concern') }}">
                    <button class="btn btn-primary sis">All Sister Concern</button>
                </a>
            </div>
        </center>
    </div>
</section>

<!-- box slider our sister concern end-->
