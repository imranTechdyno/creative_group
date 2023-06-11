@php
    $at_a_glanceElement = element('at_a_glance.element');
    $at_a_glanceContent = content('at_a_glance_content.content');
    
@endphp
<!-- Group at a glance section starts -->
<section class="home-company">
    <div class="">
        <!-- background image here -->
        <div class="back">
            <div class="write">{{ @$at_a_glanceContent->data->title }}</div>
            <!--  -->
            <div class="container one">
                @forelse ($at_a_glanceElement as $item)
                    <div class="col-md-4 col-sm-6">
                        <div class="child">
                            <center>
                                <img src="{{ @$item->data->image }}" alt="industry_image" />
                            </center>
                            <p>{{ @$item->data->title }} <br />{{ @$item->data->glance_number }}</p>
                        </div>
                    </div>
                @empty
                    @include('frontend.partial.no_record_found')
                @endforelse
            </div>
            <!--  -->
        </div>
    </div>
</section>
<!-- Group at a glance section starts -->
