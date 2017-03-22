@extends('core::layouts.app')

@section('pageTitle', __("Localisation"))

@section('content')
<section class="content-header">
    <a class="btn btn-primary" href="/system/localisation/create">
        {{ __("Create Language") }}
    </a>
    <a class="btn btn-primary" href="/system/localisation/editTexts">
        {{ __("Edit Texts") }}
    </a>
    @include('core::partials.breadcrumbs')
</section>
<section class="content">
    <div class="row" v-cloak>
        <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
            <data-table source="/system/localisation">
                <span slot="data-table-title">{{ __("Languages") }}</span>
                @include('core::partials.modal')
            </data-table>
        </div>
    </div>
</section>
@endsection

@push('scripts')
<script type="text/javascript" src="{{ asset('/js/vendor/laravel-enso/pages/localisation/index.js') }}"></script>
@endpush