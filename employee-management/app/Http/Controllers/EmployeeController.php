<?php

namespace App\Http\Controllers;

use App\Employee;
use App\Http\Service\EmployeeService;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    protected $employeeService;

    public function __construct(EmployeeService $employeeService)
    {
        $this->employeeService = $employeeService;
    }

    public function index()
    {
        $employees = $this->employeeService->getAll();
        return view('admin.employees.list', compact('employees'));
    }

    public function create()
    {
        return view('admin.employees.create');
    }

    public function store(Request $request)
    {
        $this->employeeService->create($request);
        toastr()->success('Thêm mới thành công');
        return redirect()->route('admin.index');
    }

    public function edit($id)
    {
        $employee = $this->employeeService->findById($id);
        return view('admin.employees.edit', compact('employee'));
    }

    public function update(Request $request, $id)
    {
        $employee = $this->employeeService->findById($id);
        $this->employeeService->update($employee, $request);
         toastr()->success('Cập nhập thành công');
        return redirect()->route('admin.index');
    }

    public function delete($id)
    {
        $employee = $this->employeeService->findById($id);
        $this->employeeService->delete($employee);
        toastr()->success('Xóa nhân viên thành công');
        return redirect()->route('admin.index');
    }

    public function search(Request $request)
    {
        $employees = Employee::where('employeeNumber', 'LIKE', '%' . $request->keyword . '%')
        ->orWhere('name', 'LIKE', '%' . $request->keyword . '%')->get();
        return response()->json($employees);
    }
//    public function search(Request $request)
//    {
//        $employees = Employee::where('employeeNumber', 'LIKE', '%' . $request->keyword . '%')
//            ->orWhere('name', 'LIKE', '%' . $request->keyword . '%')->get();
//        return view('admin.employees.list', compact('employees'));
//    }
}
