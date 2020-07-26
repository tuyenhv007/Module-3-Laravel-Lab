<?php

use Illuminate\Database\Seeder;

class EmployessTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $employee = new \App\Employee();
        $employee->employeeNumber = '1101';
        $employee->group = 'Quản trị hệ thống';
        $employee->name = 'Trịnh Minh Hạo';
        $employee->dob = '1988-05-20';
        $employee->gender = 'Nam';
        $employee->phone = '0971222789';
        $employee->card = '121212121';
        $employee->email = 'minhhao1502@gmail.com';
        $employee->address = 'Hà Nội';
        $employee->save();

        $employee = new \App\Employee();
        $employee->employeeNumber = '1201';
        $employee->group = 'Quản lý nhân sự';
        $employee->name = 'Lưu Thiên Hương';
        $employee->dob = '1995-07-15';
        $employee->gender = 'Nữ';
        $employee->phone = '0913456789';
        $employee->card = '181513715';
        $employee->email = 'huongthienvns@gmail.com';
        $employee->address = 'Hải Phòng';
        $employee->save();

        $employee = new \App\Employee();
        $employee->employeeNumber = '1301';
        $employee->group = 'Quản lý văn phòng';
        $employee->name = 'Lưu Thiên Hương';
        $employee->dob = '1995-07-15';
        $employee->gender = 'Nữ';
        $employee->phone = '0913456789';
        $employee->card = '181513715';
        $employee->email = 'huongthienvns@gmail.com';
        $employee->address = 'Hải Phòng';
        $employee->save();

        $employee = new \App\Employee();
        $employee->employeeNumber = '1401';
        $employee->group = 'Quản lý dịch vụ';
        $employee->name = 'Lưu Thiên Hương';
        $employee->dob = '1995-07-15';
        $employee->gender = 'Nữ';
        $employee->phone = '0913456789';
        $employee->card = '181513715';
        $employee->email = 'huongthienvns@gmail.com';
        $employee->address = 'Hải Phòng';
        $employee->save();

        $employee = new \App\Employee();
        $employee->employeeNumber = '1501';
        $employee->group = 'Lễ Tân';
        $employee->name = 'Lưu Thiên Hương';
        $employee->dob = '1995-07-15';
        $employee->gender = 'Nữ';
        $employee->phone = '0913456789';
        $employee->card = '181513715';
        $employee->email = 'huongthienvns@gmail.com';
        $employee->address = 'Hải Phòng';
        $employee->save();
    }
}
