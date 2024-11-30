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
            <h1 class="text-center mb-4">Order Listing</h1>
            <!-- Table -->
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Customer Name</th>
                        <th scope="col">Order ID</th>
                        <th scope="col">Date</th>
                        <th scope="col">Total</th>
                        <th scope="col">Status</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Order Row 1 -->
                    <tr>
                        <th scope="row">1</th>
                        <td>John Doe</td>
                        <td>#12345</td>
                        <td>2024-11-25</td>
                        <td>$150.00</td>
                        <td><span class="badge bg-success">Completed</span></td>
                        <td>
                            <button class="btn btn-primary btn-sm">View</button>
                            <button class="btn btn-danger btn-sm">Delete</button>
                        </td>
                    </tr>
                    <!-- Order Row 2 -->
                    <tr>
                        <th scope="row">2</th>
                        <td>Jane Smith</td>
                        <td>#12346</td>
                        <td>2024-11-26</td>
                        <td>$200.00</td>
                        <td><span class="badge bg-warning">Pending</span></td>
                        <td>
                            <button class="btn btn-primary btn-sm">View</button>
                            <button class="btn btn-danger btn-sm">Delete</button>
                        </td>
                    </tr>
                    <!-- Add more rows here -->
                    <tr>
                        <th scope="row">2</th>
                        <td>Jane Smith</td>
                        <td>#12346</td>
                        <td>2024-11-26</td>
                        <td>$200.00</td>
                        <td><span class="badge bg-warning">Pending</span></td>
                        <td>
                            <button class="btn btn-primary btn-sm">View</button>
                            <button class="btn btn-danger btn-sm">Delete</button>
                        </td>
                    </tr>
                    <!-- Add more rows here -->
                    <tr>
                        <th scope="row">2</th>
                        <td>Jane Smith</td>
                        <td>#12346</td>
                        <td>2024-11-26</td>
                        <td>$200.00</td>
                        <td><span class="badge bg-warning">Pending</span></td>
                        <td>
                            <button class="btn btn-primary btn-sm">View</button>
                            <button class="btn btn-danger btn-sm">Delete</button>
                        </td>
                    </tr>
                    <!-- Add more rows here -->
                    <tr>
                        <th scope="row">2</th>
                        <td>Jane Smith</td>
                        <td>#12346</td>
                        <td>2024-11-26</td>
                        <td>$200.00</td>
                        <td><span class="badge bg-warning">Pending</span></td>
                        <td>
                            <button class="btn btn-primary btn-sm">View</button>
                            <button class="btn btn-danger btn-sm">Delete</button>
                        </td>
                    </tr>
                    <!-- Add more rows here -->
                    <tr>
                        <th scope="row">2</th>
                        <td>Jane Smith</td>
                        <td>#12346</td>
                        <td>2024-11-26</td>
                        <td>$200.00</td>
                        <td><span class="badge bg-warning">Pending</span></td>
                        <td>
                            <button class="btn btn-primary btn-sm">View</button>
                            <button class="btn btn-danger btn-sm">Delete</button>
                        </td>
                    </tr>
                    <!-- Add more rows here -->
                    <tr>
                        <th scope="row">2</th>
                        <td>Jane Smith</td>
                        <td>#12346</td>
                        <td>2024-11-26</td>
                        <td>$200.00</td>
                        <td><span class="badge bg-warning">Pending</span></td>
                        <td>
                            <button class="btn btn-primary btn-sm">View</button>
                            <button class="btn btn-danger btn-sm">Delete</button>
                        </td>
                    </tr>
                    <!-- Add more rows here -->
                    <tr>
                        <th scope="row">2</th>
                        <td>Jane Smith</td>
                        <td>#12346</td>
                        <td>2024-11-26</td>
                        <td>$200.00</td>
                        <td><span class="badge bg-warning">Pending</span></td>
                        <td>
                            <button class="btn btn-primary btn-sm">View</button>
                            <button class="btn btn-danger btn-sm">Delete</button>
                        </td>
                    </tr>
                    <!-- Add more rows here -->
                    <tr>
                        <th scope="row">2</th>
                        <td>Jane Smith</td>
                        <td>#12346</td>
                        <td>2024-11-26</td>
                        <td>$200.00</td>
                        <td><span class="badge bg-warning">Pending</span></td>
                        <td>
                            <button class="btn btn-primary btn-sm">View</button>
                            <button class="btn btn-danger btn-sm">Delete</button>
                        </td>
                    </tr>
                    <!-- Add more rows here -->
                    <tr>
                        <th scope="row">2</th>
                        <td>Jane Smith</td>
                        <td>#12346</td>
                        <td>2024-11-26</td>
                        <td>$200.00</td>
                        <td><span class="badge bg-warning">Pending</span></td>
                        <td>
                            <button class="btn btn-primary btn-sm">View</button>
                            <button class="btn btn-danger btn-sm">Delete</button>
                        </td>
                    </tr>
                    <!-- Add more rows here -->
                </tbody>
            </table>

            <!-- Pagination -->
            <nav aria-label="Page navigation">
                <ul class="pagination justify-content-center">
                    <li class="page-item disabled">
                        <a class="page-link" href="#" tabindex="-1">Previous</a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#">Next</a>
                    </li>
                </ul>
            </nav>
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