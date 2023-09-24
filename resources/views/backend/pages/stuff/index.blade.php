
@extends('backend.layouts.master')

@section('title')
Stuff - Admin Panel
@endsection

@section('styles')
    <!-- Start datatable css -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.jqueryui.min.css">
@endsection


@section('admin-content')

<!-- page title area start -->
<div class="page-title-area">
    <div class="row align-items-center">
        <div class="col-sm-6">
            <div class="breadcrumbs-area clearfix">
                <h4 class="page-title pull-left">Stuff</h4>
                <ul class="breadcrumbs pull-left">
                    <li><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                    <li><span>All Stuff</span></li>
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
                    <h4 class="header-title float-left">Stuff List</h4>
                    <p class="float-right mb-2">
                        <a class="btn btn-primary text-white" href="{{ route('admin.stuff.create') }}">Create New Stuff</a>
                    </p>
                    <div class="clearfix"></div>
                    <div class="data-tables">
                        @include('backend.layouts.partials.messages')
                        <div class="table-responsive">
                            <table id="dataTable" class="text-center table">
                                <thead class="bg-light text-capitalize">
                                    <tr>
                                        <th width="5%">Sl</th>
                                        <th width="10%">Name</th>
                                        <th>Phone</th>
                                        <th>Email</th>
                                        <th>Join date</th>
                                        <th>Salary</th>
                                        <th>Position</th>
                                        <th>Contract time</th>
                                        
                                        <th>Address</th>
                                        <th>Image</th>
                                        <th width="15%">Action</th>
    
                                    </tr>
                                </thead>
                                <tbody>
                                   @foreach ($stuff as $stuff)
                                   <tr>
                                        <td>{{ $loop->index+1 }}</td>
                                        <td>{{ $stuff->name }}</td>
                                        <td>{{ $stuff->phone }}</td>
                                        <td>{{ $stuff->email }}</td>
                                        <td>{{ $stuff->date }}</td>
                                        <td>{{ $stuff->salary }}</td>
                                        <td>{{ $stuff->position }}</td>
                                        <td>{{ $stuff->contract }}</td>
                                        <td>{{ $stuff->address }}</td>
                                        <td><img height="100" width="100" src="{{ asset($stuff->image) }}"></td>
                                        <td>
                                            <a class="btn btn-success text-white" href="{{ route('admin.stuff.edit', $stuff->id) }}">Edit</a>
    
                                            <a class="btn btn-danger text-white" href="{{ route('admin.stuff.destroy', $stuff->id) }}"
                                            onclick="event.preventDefault(); document.getElementById('delete-form-{{ $stuff->id }}').submit();">
                                                Delete
                                            </a>
    
                                            <form id="delete-form-{{ $stuff->id }}" action="{{ route('admin.stuff.destroy', $stuff->id) }}" method="POST" style="display: none;">
                                                @method('DELETE')
                                                @csrf
                                            </form>
                                        </td>
                                    </tr>
                                   @endforeach
                                </tbody>
                            </table>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
        <!-- data table end -->
        
    </div>
</div>
@endsection


@section('scripts')
     <!-- Start datatable js -->
     <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
     <script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
     <script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>
     <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
     <script src="https://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap.min.js"></script>
     
     <script>
         /*================================
        datatable active
        ==================================*/
        if ($('#dataTable').length) {
            $('#dataTable').DataTable({
                responsive: true
            });
        }

     </script>
@endsection