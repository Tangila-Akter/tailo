
@extends('backend.layouts.master')

@section('title')
Upper Pocket Create - Admin Panel
@endsection

@section('styles')
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
                <h4 class="page-title pull-left">Upper Pocket Create</h4>
                <ul class="breadcrumbs pull-left">
                    <li><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                    <li><a href="{{ route('admin.upper-pocket.index') }}">All Upper Pocket</a></li>
                    <li><span>Create Upper Pocket</span></li>
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
                    <h4 class="header-title">Create New Upper Pocket</h4>
                    @include('backend.layouts.partials.messages')
                    
                    <form action="{{ route('admin.upper-pocket.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="name">Upper Pocket Name</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Enter a Upper Pocket Name">
                        </div>

                        
                        <button type="submit" class="btn btn-primary mt-4 pr-4 pl-4">Save Upper Pocket</button>
                    </form>
                </div>
            </div>
        </div>
        <!-- data table end -->
        
    </div>
</div>
@endsection

@section('scripts')
     @include('backend.pages.upper-pocket.partials.scripts')
@endsection