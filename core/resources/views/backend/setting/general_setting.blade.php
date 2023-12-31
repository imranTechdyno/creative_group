@extends('backend.layout.master')
@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>{{ __($pageTitle) }}</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="{{ route('admin.home') }}">{{ __('Dashboard') }}</a>
                </div>
                <div class="breadcrumb-item">{{ __($pageTitle) }}</div>
            </div>
        </div>

        <div class="section-body ">
            <div class="row">
                <div class="col-md-12 stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <form action="" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="form-group col-md-2">
                                        <label for="sitename">{{ __('Site Name') }}</label>
                                        <input type="text" name="sitename" placeholder="@lang('site name')"
                                            class="form-control form_control" value="{{ @$general->sitename }}">
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label for="sitename">{{ __('Site Email') }}</label>
                                        <input type="text" name="site_email" placeholder="@lang('site email')"
                                            class="form-control form_control" value="{{ @$general->site_email }}">
                                    </div>
                                     <div class="form-group col-md-2">
                                        <label for="sitename">{{ __('Site Address') }}</label>
                                        <input type="text" name="address" placeholder="@lang('Site Address')"
                                            class="form-control form_control" value="{{ @$general->address }}">
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label for="phone_no">{{ __('Phone Number') }}</label>
                                        <input type="text" name="phone" placeholder="@lang('Phone Number')"
                                            class="form-control form_control" value="{{ @$general->phone }}">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="facebook">{{ __('Facebook') }}</label>
                                        <input type="text" name="facebook" placeholder="@lang('Facebook')"
                                            class="form-control form_control" value="{{ @$general->facebook }}">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="twitter">{{ __('Twitter') }}</label>
                                        <input type="text" name="twitter" placeholder="@lang('Twitter')"
                                            class="form-control form_control" value="{{ @$general->twitter }}">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="linked_in">{{ __('Linked in') }}</label>
                                        <input type="text" name="linked_in" placeholder="@lang('Linked in')"
                                            class="form-control form_control" value="{{ @$general->linked_in }}">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="youtube">{{ __('youtube') }}</label>
                                        <input type="text" name="youtube" placeholder="@lang('Youtube')"
                                            class="form-control form_control" value="{{ @$general->youtube }}">
                                    </div>

                                    <div class="form-group col-md-4 mb-3">
                                        <label class="col-form-label">{{ __('Site logo') }} (165 x 68)</label>

                                        <div id="image-preview" class="image-preview"
                                            style="background-image:url({{ getFile('logo', @$general->logo) }});">
                                            <label for="image-upload" id="image-label">{{ __('Choose File') }}</label>
                                            <input type="file" name="logo" id="image-upload" />
                                        </div>

                                    </div>
                                    <div class="form-group col-md-4 mb-3">
                                        <label class="col-form-label">{{ __('Footer logo') }} (165 x 68)</label>

                                        <div id="image-preview" class="image-preview"
                                            style="background-image:url({{ getFile('logo', @$general->logo) }});">
                                            <label for="image-upload" id="image-label">{{ __('Choose File') }}</label>
                                            <input type="file" name="footer_logo" id="image-upload" />
                                        </div>

                                    </div>

                                    <div class="form-group col-md-4 mb-3">
                                        <label class="col-form-label">{{ __('Favicon Icon') }} (80 x 80)</label>
                                        <div id="image-preview-icon" class="image-preview"
                                            style="background-image:url({{ getFile('icon', @$general->favicon) }});">
                                            <label for="image-upload-icon" id="image-label-icon">{{ __('Choose File')
                                                }}</label>
                                            <input type="file" name="icon" id="image-upload-icon" />
                                        </div>
                                    </div>                                   

                                    <div class="form-group col-md-4 mb-3">
                                        <label class="col-form-label">{{ __('Breadcumb Image') }} (461 x 419 png)</label>
                                        <div id="image-preview-default" class="image-preview"
                                            style="background-image:url({{ getFile('default', @$general->default_image) }});">
                                            <label for="image-upload-default" id="image-label-default">{{ __('Choose
                                                File') }}</label>
                                            <input type="file" name="default" id="image-upload-default" />
                                        </div>
                                    </div>
                                    
                                    



                                    <div class="form-group col-md-12">
                                        <button type="submit" class="btn btn-primary float-right">{{ __('Update General
                                            Setting') }}</button>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
</div>
@endsection


@push('script')
<script>
    $(function() {

            'use strict'
  
            $.uploadPreview({
                input_field: "#image-upload",
                preview_box: "#image-preview",
                label_field: "#image-label",
                label_default: "Choose File",
                label_selected: "Update Image",
                no_label: false,
                success_callback: null
            });

            $.uploadPreview({
                input_field: "#image-upload-icon",
                preview_box: "#image-preview-icon",
                label_field: "#image-label-icon",
                label_default: "Choose File",
                label_selected: "Update Image",
                no_label: false,
                success_callback: null
            });


            $.uploadPreview({
                input_field: "#image-upload-default",
                preview_box: "#image-preview-default",
                label_field: "#image-label-default",
                label_default: "Choose File",
                label_selected: "Update Image",
                no_label: false,
                success_callback: null
            });

        })
</script>
@endpush