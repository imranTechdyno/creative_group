@php
$terms_and_condition = content('terms_and_condition.content');
@endphp


<main class="main">

    <!-- background title image starts -->
    <div class="page-title text-center">
    </div>
    <!-- background title image starts -->

    <!-- shadow below the title image -->
    <div class="breadcrumbs">
        <div class="container">
            <p>{!! $terms_and_condition->data->note !!}</p>
        </div>
    </div>
</main>