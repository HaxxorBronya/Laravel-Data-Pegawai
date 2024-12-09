@extends('layouts.app')

@section('content')

<link href="https://cdn.datatables.net/1.11.4/css/dataTables.bootstrap5.min.css" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.4/js/dataTables.bootstrap5.min.js"></script>
<div class="container">
    <div class="card">
        <div class="card-body shadow-sm">
            <div class="mb-3 p-2">
            <h2>Data Employee</h2>
            <a href="{{ route('employees.create') }}" class="btn btn-md btn-primary mb-3">Add Employee</a>
            <form method="POST" action="" id="myForm">
                <div class="row pb-3">
                    <div class="col-md-3">
                        <label for="">Start Date:</label>
                        <input type="date" name="from_date" id="from_date" class="form-control">
                    </div>
                
                    <div class="col-md-3">
                        <label for="">End Date:</label>
                        <input type="date" name="to_date" id="to_date" class="form-control">
                    </div>
                    <div class="col-md-1 pt-3 mt-1">
                        <button type="submit" class="btn btn-primary" id="submitBtn">Filter</button>
                    </div>

                </div>
            </form>
            <table class="table table-bordered data-table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Name</th>
                        <th>Position</th>
                        <th>Email</th>
                        <th>Hire Date</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
  $(function () {
    var table = $('.data-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ route('employees.index') }}",
        columns: [
            {data: 'id', name: 'id'},
            {data: 'name', name: 'name'},
            {data: 'position', name: 'position'},
            {data: 'email', name: 'email'},
            {data: 'hire_date', name: 'hire_date'},
        ]
    });
    $("#submitBtn").click(function(){        
        event.preventDefault();
        // alert('test');
        // $("#myForm").submit(); // Submit the form
        var formData = {
            from_date: $("#from_date").val(),
            to_date: $("#to_date").val(),
        };
        $.ajax({
            type: "GET",
            url: "/employees",
            data: formData,
            dataType: "json",
            encode: true,
        }).done(function (data) {
            console.log(data);
            data["draw"] = 1;

            // create an array of the keys in the object myMap1
            let myMap1_keys = Object.keys(data);
            var hasil = JSON.stringify(data);
            // alert(hasil);
            // var data = [
            //     { "name" : "david", "lastname" : "konrad" }
            // ];
            var table2 = $('.data-table').DataTable({
                processing: true,
                serverSide: true,
                data: hasil,
                columns: [
                    {data: 'id', name: 'id'},
                    {data: 'name', name: 'name'},
                    {data: 'position', name: 'position'},
                    {data: 'email', name: 'email'},
                    {data: 'hire_date', name: 'hire_date'},
                ]
            });
            // table2.draw();
        });
        
        
    });
    
        
  });
</script>

@endsection
