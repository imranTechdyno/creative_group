@php
$privacy_policy = content('privacy_policy.content');
@endphp


<main class="main">

    <!-- background title image starts -->
    <div class="page-title text-center">
        <p class="contact_tag1 text-center text-bold">Privacy Policy</p>
        <hr class="hr_for_all">
</div>
    <!-- background title image starts -->

    <!-- shadow below the title image -->
    <div class="breadcrumbs">
        <div class="container">
            <div class="privacy_policy">{!! $privacy_policy->data->note !!}</div>
        </div>
    </div>
</main>