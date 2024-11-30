@extends('layouts.master')

@push('css')
<style>
    #loading {
        text-align: center;
        display: none;
    }
</style>
@endpush

@section('title')
Product list
@endsection

@section('content')
<div class="container-fluid px-0 d-flex">
    @include('layouts.sidebar')

    <!-- Main Content -->
    <div class="main-content">
        @include('layouts.navbar')
        <div class="content">
            <h1>Products<h1>
                <div id="product-list" class="row"></div>
                <div id="loading" style="display: none">
                    <img src="{{ asset('spinner.gif')}}" width="83"/>
                </div>
        </div>
    </div>
</div>
@endsection
@push('scripts')
<script>
    let product_url = "<?php echo url('/api/products'); ?>";
    let base_url = "<?php echo url(''); ?>";
</script>
<!-- Dynamically add specific JavaScript for this page -->
<script src="{{ asset('js/product.js') }}"></script>

@endpush