
@extends('backend.layouts.master')

@section('title')
Multiple SMS Create - Admin Panel
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
                <h4 class="page-title pull-left">Multiple SMS Create</h4>
                <ul class="breadcrumbs pull-left">
                    <li><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                    <li><a href="{{ route('admin.sms.index') }}">All SMS</a></li>
                    <li><span>Create SMS</span></li>
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
                    <h4 class="header-title">Send Multiple Single SMS</h4>
                    @include('backend.layouts.partials.messages')
                    
                    <form action="{{ route('admin.sms.store') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-12 col-sm-12">
                                <div class="form-group">
                                    <label for="password">Phone number</label>
                                    <select name="" id="" class="form-control select2" multiple>
                                        
                                            <option value="">phone number</option>
                                            <option value="">082761671</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-sm-12">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Subject</label>
                                    <input type="text" name="" class="form-control"  >
                                  </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-sm-12">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Message</label>
                                    <textarea class="form-control" name="" id="exampleFormControlTextarea1" rows="3"></textarea>
                                  </div>
                            </div>
                        </div>
                        
                        
                        <button type="submit" class="btn btn-primary mt-4 pr-4 pl-4">SMS send</button>
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