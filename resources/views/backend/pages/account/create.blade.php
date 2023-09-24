
@extends('backend.layouts.master')

@section('title')
account Create - Admin Panel
@endsection

@section('styles')
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />

<style>
    .form-check-label {
        text-transform: capitalize;
    }
</style>
@endsection


@section('admin-content')

<!-- page title area start -->
<div class="page-title-area">
    <div class="row align-items-center">
        <div class="col-sm-6">
            <div class="breadcrumbs-area clearfix">
                <h4 class="page-title pull-left">account Create</h4>
                <ul class="breadcrumbs pull-left">
                    <li><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                    <li><a href="{{ route('admin.account.index') }}">All account</a></li>
                    <li><span>Create account</span></li>
                </ul>
            </div>
        </div>
        <div class="col-sm-6 clearfix">
            @include('backend.layouts.partials.logout')
        </div>
    </div>
</div>
<!-- page title area end -->

<div class="main-content-inner">
    <div class="row">
        <!-- data table start -->
        <div class="col-12 mt-5">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Create New account</h4>
                    @include('backend.layouts.partials.messages')
                    
                    <form action="{{ route('admin.account.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputEmail1">Date</label>
                            <input type="date" name="date" class="form-control" >
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Reason</label>
                            <input type="text" name="reason" class="form-control" >
                          </div>
                          <div class="form-group">
                            <label for="exampleFormControlSelect1">Type</label>
                            <select class="form-control" id="exampleFormControlSelect1" name="type">
                                <option >Select</option>
                              <option value="income">Income</option>
                              <option value="expenses">Expenses</option>
                            </select>
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Amount</label>
                            <input type="number" name="amount" class="form-control" >
                          </div>
                          <div class="form-group">
                            <label for="exampleFormControlTextarea1">Details</label>
                            <textarea class="form-control" name="text" id="exampleFormControlTextarea1" rows="3"></textarea>
                          </div>
                          
                        
                        <button type="submit" class="btn btn-primary mt-4 pr-4 pl-4">Save account</button>
                    </form>
                </div>
            </div>
        </div>
        <!-- data table end -->
        
    </div>
</div>
@endsection

@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
<script>
    $(document).ready(function() {
        $('.select2').select2();
    })
</script>
@endsection