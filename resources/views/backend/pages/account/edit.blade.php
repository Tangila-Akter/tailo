
@extends('backend.layouts.master')

@section('title')
Account Edit - Admin Panel
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
                <h4 class="page-title pull-left">Account Create</h4>
                <ul class="breadcrumbs pull-left">
                    <li><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                    <li><a href="{{ route('admin.account.index') }}">All Account</a></li>
                    <li><span>Edit Account - {{ $account->name }}</span></li>
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
                    <h4 class="header-title">Edit Account - {{ $account->name }}</h4>
                    @include('backend.layouts.partials.messages')
                    
                    <form action="{{ route('admin.account.update', $account->id) }}" method="POST">
                        @method('PUT')
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputEmail1">Date</label>
                            <input type="date" name="date" class="form-control" value="{{$account->date}}" >
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Reason</label>
                            <input type="text" name="reason" class="form-control" value="{{$account->reason}}">
                          </div>
                          <div class="form-group">
                            <label for="exampleFormControlSelect1">Type</label>
                            <select class="form-control" id="exampleFormControlSelect1" name="type">
                                <option value="{{$account->type}}" >{{$account->type}}</option>
                              <option value="income">Income</option>
                              <option value="expenses">Expenses</option>
                            </select>
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Amount</label>
                            <input type="number" name="amount" class="form-control" value="{{$account->amount}}">
                          </div>
                          <div class="form-group">
                            <label for="exampleFormControlTextarea1">Details</label>
                            <textarea class="form-control" name="text" id="exampleFormControlTextarea1" rows="3">{{$account->text}}</textarea>
                          </div>
                        
                        <button type="submit" class="btn btn-primary mt-4 pr-4 pl-4">Save Account</button>
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