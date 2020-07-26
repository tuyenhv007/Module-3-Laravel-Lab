<?php


namespace App\Http\Repositories;


use App\Employee;

class EmployeeRepository
{
    protected $employee;

    public function __construct(Employee $employee)
    {
        $this->employee = $employee;
    }

    public function getAllEmployee()
    {
        return $this->employee->all();
    }

    public function save($employee)
    {
        return $employee->save();
    }

    public function find($id)
    {
        return $this->employee->findOrFail($id);
    }

    public function destroy($employee)
    {
        $employee->delete();
    }
}
