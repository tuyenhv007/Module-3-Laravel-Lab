@extends('admin.layouts.master')

@section('content')

    <ol class="breadcrumb mb-4 mt-4">
        <li class="breadcrumb-item active">
            <a href="">Home</a>
        </li>
        <li class="breadcrumb-item active">List</li>
    </ol>
    <div class="card-header"><i class="fas fa-table mr-1"></i></div>
    <div class="card-body">
        <div class="table-responsive">
            <div class="row">
                <div class="col-12 col-md-1">
                    <a href=" {{ route('admin.create') }}" class="btn btn-success mb-2">Create</a>
                </div>
                <div class="col-12 col-md-4">
                    <!-- Basic dropdown -->
                    <button class="btn btn-primary dropdown-toggle mr-4" type="button" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">See
                    </button>

                    <div class="dropdown-menu">
                        <a class="dropdown-item">
                            <!-- Default unchecked -->
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input checkbox-info" data-id="data-code"
                                       id="checkbox-code" checked>
                                <label class="custom-control-label" for="checkbox-code">Mã nhân viên</label>
                            </div>
                        </a>
                        <a class="dropdown-item" href="#">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input checkbox-info" data-id="data-group"
                                       id="checkbox-group" checked>
                                <label class="custom-control-label" for="checkbox-group">Nhóm nhân viên</label>
                            </div>
                        </a>
                        <a class="dropdown-item" href="#">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input checkbox-info" data-id="data-name" id="checkbox-name"
                                       checked>
                                <label class="custom-control-label" for="checkbox-name">Họ tên</label>
                            </div>
                        </a>
                        <a class="dropdown-item" href="#">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input checkbox-info" data-id="data-dob" id="checkbox-dob" checked>
                                <label class="custom-control-label" for="checkbox-dob">Ngày sinh</label>
                            </div>
                        </a>
                        <a class="dropdown-item" href="#">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input checkbox-info" data-id="data-gender" id="checkbox-gender" checked>
                                <label class="custom-control-label" for="checkbox-gender">Giới tính</label>
                            </div>
                        </a>
                        <a class="dropdown-item" href="#">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input checkbox-info" data-id="data-phone" id="checkbox-phone" checked>
                                <label class="custom-control-label" for="checkbox-phone">Số điện thoại</label>
                            </div>
                        </a>
                    </div>
                    <!-- Basic dropdown -->
                </div>
                <div class="col-12 col-md-7">
                    <input class="form-control mr-sm-2" id="search-employee" type="search" placeholder="Search"
                           aria-label="Search" name="keyword">
                </div>
            </div>

            <table class="table table-bordered" width="100%" cellspacing="0">
                <thead>
                <tr class="table-info">
                    <th>STT</th>
                    <th class="data-code">Mã nhân viên</th>
                    <th class="data-group">Nhóm nhân viên</th>
                    <th class="data-name">Họ tên</th>
                    <th class="data-dob">Ngày sinh</th>
                    <th class="data-gender">Giới tính</th>
                    <th class="data-phone">Số điện thoại</th>
                    <th >Hành động</th>
                </tr>
                </thead>
                <tbody id="list-employee">
                @foreach($employees as $key => $employee)
                    <tr class="data-employee">
                        <td>{{ ++$key }}</td>
                        <td class="data-code">{{ $employee->employeeNumber }}</td>
                        <td class="data-group">{{ $employee->group }}</td>
                        <td class="data-name">{{ $employee->name }}</td>
                        <td class="data-dob">{{ $employee->dob }}</td>
                        <td class="data-gender">{{ $employee->gender }}</td>
                        <td class="data-phone">{{ $employee->phone }}</td>
                        <td>
                            <a href="{{ route('admin.edit', $employee->id) }}"><i class="fa fa-edit"></i></a>
                            <a href="{{ route('admin.delete', $employee->id) }}" onclick="return confirm('Bạn có chắc chắn muốn xóa?')" style="color: red"><i class="fa fa-trash"></i></a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
