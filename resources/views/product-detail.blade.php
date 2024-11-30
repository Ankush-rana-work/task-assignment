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
My Account
@endsection

@section('content')
<div class="container-fluid px-0 d-flex">
    @include('layouts.sidebar')

    <!-- Main Content -->
    <div class="main-content">
        @include('layouts.navbar')
        <div class="content">
            <h1 class="text-center mb-4">Product detail</h1>
        </div>
    </div>
</div>
@endsection
@push('scripts')
<script>
    let product_url = "<?php echo url('/api/products'); ?>";
</script>
<!-- Dynamically add specific JavaScript for this page -->
<script src="{{ asset('js/product.js') }}"></script>

@endpush