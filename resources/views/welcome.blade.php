@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-body">
        <div class="mb-3 p-2">
            <h1 class="text-center">Dashboard</h1>
            <div class="col-md-3">
                    <div class="card bg-secondary-emphasis shadow-sm ">
                        <div class="card-body text-light">
                            <a href="/employees">
                                
                                    <div class="d-flex">
                                        <div class="align-items-center">
                                            <i class="me-2 fa fa-users x2"></i>
                                        </div>
                                        <div class="fw-bold">  
                                            <span>Data Employee</span>
                                        </div>
                                    </div>
                                
                            </a>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</div>


@endsection