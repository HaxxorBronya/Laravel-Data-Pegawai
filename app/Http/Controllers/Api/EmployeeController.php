<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Employee;
use Illuminate\Http\Request;
use App\Http\Resources\EmployeeResource;

class EmployeeController extends Controller
{
     /**
     * index
     *
     * @return void
     */
    public function index()
    {
        //get all posts
        $employees = Employee::latest()->paginate(5);

        //return collection of posts as a resource
        return new EmployeeResource(true, 'List Data Pegawai', $employees);
    }
}
