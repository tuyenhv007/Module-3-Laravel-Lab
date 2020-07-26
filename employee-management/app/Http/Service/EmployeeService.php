<?php


namespace App\Http\Service;


use App\Employee;
use App\Http\Repositories\EmployeeRepository;

class EmployeeService
{
    protected $employeeRepository;

    public function __construct( EmployeeRepository $employeeRepository)
    {
        $this->employeeRepository = $employeeRepository;
    }

    public function getAll()
    {
        return $this->employeeRepository->getAllEmployee();
    }

    public function create($request)
    {
        $employee = new Employee();
        $employee->employeeNumber = $request->empnumber;
        $employee->group = $request->group;
        $employee->name = $request->name;
        $employee->dob = $request->dob;
        $employee->gender = $request->gender;
        $employee->phone = $request->phone;
        $employee->card = $request->card;
        $employee->email = $request->email;
        $employee->address = $request->address;
        $employee->save();
    }

    public function findById($id)
    {
        return $this->employeeRepository->find($id);
    }

    public function delete($employee)
    {
        $this->employeeRepository->destroy($employee);
    }

    public function update($employee, $request)
    {
        $employee->employeeNumber = $request->empnumber;
        $employee->group = $request->group;
        $employee->name = $request->name;
        $employee->dob = $request->dob;
        $employee->gender = $request->gender;
        $employee->phone = $request->phone;
        $employee->card = $request->card;
        $employee->email = $request->email;
        $employee->address = $request->address;
        $employee->save();
    }
}
