@php
    $faq = element('faq.element');
@endphp

<main class="main">

    <!-- background title image starts -->
    <div class="page-title text-center">
        <p class="contact_tag1 text-center text-bold">FAQ</p>
        <hr class="hr_for_all">
</div>
    <!-- background title image starts -->

    <!-- shadow below the title image -->
    <div class="breadcrumbs">
        <div class="container">
            @foreach ($faq as $index => $faqs)
                <div class="panel-group" id="accordion">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle @if ($index > 0) collapsed @endif"
                                    data-toggle="collapse" data-parent="#accordion" href="#collapse{{ $index }}">
                                    {{ $faqs->data->question }}
                                </a>
                            </h4>
                        </div>
                        <div id="collapse{{ $index }}"
                            class="panel-collapse collapse @if ($index == 0) in @endif">
                            <div class="panel-body">
                                <p>
                                    {!! preg_replace('/(<[a-zA-Z0-9\s"\-=\'\/]+) style="[^"]*font-family:[^"]*"/i', '$1', $faqs->data->ans) !!}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach



        </div> <!-- end container -->
    </div>
</main>
