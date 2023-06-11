@php
    $career= element('career.element');
@endphp
<div class="page-title text-center">
    <p class="contact_tag1 text-center text-bold">Career</p>
    <hr class="hr_for_career">
    <p class="contact_tag text-center text-bold">We welcome competent people to join us. Join our leading team.</p>
</div>
<div class="container">
    <div class="career_tag_align">
        
    </div>
    <div class="job">

        @foreach ($career as $job)
            <div class="col-md-4">
                <div class="card career_card">
                    <a href="{{ url('job-details', $job->data->slug) }}">
                        <img class="card-img-top" src="{{ $job->data->image }}" alt="Card image cap">
                    </a>
                    <div class="card-body">
                        <a href="{{ url('job-details', $job->data->slug) }}">
                        <h3 style="padding-left: 20px" class="card-title">{{ $job->data->job_title }}</h3>
                        </a>
                    </div>
                    <hr class="card_body_hr">
                    <div class="dead-line">
                        <a href="{{ url('job-details', $job->data->slug) }}">
                         <p class="card-title card_p">Dead Line:{{ \Carbon\Carbon::parse(@$job->data->dead_line)->format('d F Y') }}</p>
                         
                         </a>
                    </div>
                </div>
            </div>
        @endforeach

    </div>
</div>
