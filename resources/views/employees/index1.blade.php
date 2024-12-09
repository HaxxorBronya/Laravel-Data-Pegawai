@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-body shadow-sm">
            <div class="mb-3 p-2">
            <h2>Data Employee</h2>
            <a href="{{ route('employees.create') }}" class="btn btn-md btn-primary mb-3">Add Employee</a>
            <form method="GET" action="/filter">
                <div class="row pb-3">
                    <div class="col-md-3">
                        <label for="">Start Date:</label>
                        <input type="date" name="start_date" class="form-control">
                    </div>
                
                    <div class="col-md-3">
                        <label for="">End Date:</label>
                        <input type="date" name="end_date" class="form-control">
                    </div>
                    <div class="col-md-1 pt-3 mt-1">
                        <button type="submit" class="btn btn-primary">Filter</button>
                    </div>

                </div>
            </form>
            {{ $dataTable->table() }}
            </div>
        </div>
    </div>
</div>


@endsection
@push('scripts')
    {{ $dataTable->scripts(attributes: ['type' => 'module']) }}
@endpush