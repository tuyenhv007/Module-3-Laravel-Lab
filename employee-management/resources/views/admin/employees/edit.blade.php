@extends('admin.layouts.master')

@section('content')
    <ol class="breadcrumb mb-4 mt-4">
        <li class="breadcrumb-item active">
            <a href="{{ route('admin.index') }}">Home</a>
        </li>
        <li class="breadcrumb-item active">Edit</li>
    </ol>
    <div class="col-md-12 pt-4">
        <div class="card">
            <div class="card-header">
                Edit Employee
            </div>
            <div class="card-body">
                <form method="post" action="{{ route('admin.update', $employee->id )}}">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label><strong>Mã nhân viên</strong></label>
                                <input type="number" name="empnumber" class="form-control" readonly value="{{ $employee->employeeNumber }}" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlSelect1"><strong>Nhóm nhân viên</strong></label>
                                <select class="form-control" id="exampleFormControlSelect1" name="group">
                                    <option @if($employee->group == "Quản trị hệ thống") selected @endif>Quản trị hệ thống</option>
                                    <option @if($employee->group == "Quản lý nhân sự") selected @endif>Quản lý nhân sự</option>
                                    <option @if($employee->group == "Quản lý văn phòng") selected @endif>Quản lý văn phòng</option>
                                    <option @if($employee->group == "Quản lý dịch vụ") selected @endif>Quản lý dịch vụ</option>
                                    <option @if($employee->group == "Lễ Tân") selected @endif>Lễ Tân</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label><strong>Họ tên</strong></label>
                                <input type="text" class="form-control" name="name" cols="5" value="{{ $employee->name }}" required>
                            </div>
                            <div class="form-group">
                                <label><strong>Ngày sinh</strong></label>
                                <input type="date" class="form-control" name="dob" value="{{ $employee->dob }}" required>
                            </div>
                            <div>
                                <label for=""><strong>Giới tính</strong></label>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" class="custom-control-input" id="defaultInline1" name="gender" value="Nam" {{ ($employee->gender == "Nam") ? "checked" : '' }}>
                                    <label class="custom-control-label" for="defaultInline1">Nam</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" class="custom-control-input" id="defaultInline2" name="gender" value="Nữ" {{ ($employee->gender == "Nữ") ? "checked" : '' }} >
                                    <label class="custom-control-label" for="defaultInline2">Nữ</label>
                                </div>
                            </div>

                        </div>
                        <div class="col-md-6">

                            <div class="form-group">
                                <label><strong>Số điện thoại</strong></label>
                                <input type="number" class="form-control" name="phone" value="{{ $employee->phone }}" required>
                            </div>
                            <div class="form-group">
                                <label><strong>CMT</strong></label>
                                <input type="number" class="form-control" name="card" cols="5" value="{{ $employee->card }}" required>
                            </div>
                            <div class="form-group">
                                <label><strong>Email</strong></label>
                                <input type="email" class="form-control" name="email" value="{{ $employee->email }}" required>
                            </div>
                            <div class="form-group">
                                <label><strong>Địa chỉ</strong></label>
                                <textarea class="form-control" name="address" id="" required>{{ $employee->address }}</textarea>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Sửa</button>
                                <a href="{{ route('admin.index') }}" class="btn btn-secondary">Cancel</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
