@extends('layouts.admin')
@section('title','Chi Tiết')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Chi tiết thương hiệu</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard.index')  }}">Bảng điều khiển</a></li>
                        <li class="breadcrumb-item active">Chi tiết thương hiệu</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-6">
                       
                    </div>
                    <div class="col-md-6 text-right">
                        <div class="text-right">                            
                            <a class="btn btn-sm btn-info" href="{{ route('brand.index') }}">
                                <i class="fas fa-arrow-circle-left"></i> Quay về danh sách
                            </a>                            
                            <a class="btn btn-sm btn-primary" href="{{ route('brand.edit',['brand'=>$row->id]) }}">
                                <i class=" fas fa-edit"></i>
                            </a>
                            <a class="btn btn-sm btn-danger" href="{{ route('brand.trash',['brand'=>$row->id]) }}">
                                <i class=" fas fa-trash"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-bordered border-primary table-hover ">
                    <thead class="bg-orange">
                        <tr class="fs-1">
                            <th width="30%">
                                Tên trường
                            </th>
                            <th>
                                Giá trị
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th>ID</th>
                            <td>{{ $row->id }}</td>
                        </tr>
                        <tr>
                            <th>Tên thương hiệu</th>
                            <td>{{ $row->name }}</td>
                        </tr>
                        <tr>
                            <th>Tên thường</th>
                            <td>{{ $row->slug }}</td>
                        </tr>
                        <tr>
                            <th>Sắp xếp</th>
                            <td>{{ $row->sort_order }}</td>
                        </tr>
                        <tr>
                            <th>Hình đại diện</th>
                            <td class="index-img">
                                <img src="{{ asset('img/brand'.$row->image) }}" class="card-img-top index-img" alt="">
                            </td>
                        </tr>
                        <tr>
                            <th>Từ khóa </th>
                            <td>{{ $row->metakey }}</td>
                        </tr>
                        <tr>
                            <th>Mô tả</th>
                            <td>{{ $row->metadesc }}</td>
                        </tr>
                        <tr>
                            <th>Ngày tạo</th>
                            <td>{{ $row->created_at }}</td>
                        </tr>
                        <tr>
                            <th>Người tạo</th>
                            <td>{{ $row->created_by }}</td>
                        </tr>
                        <tr>
                            <th>Ngày sửa cuối</th>
                            <td>{{ $row->updated_at }}</td>
                        </tr>
                        <tr>
                            <th>Người sửa cuối</th>
                            <td>{{ $row->updated_by }}</td>
                        </tr>
                        <tr>
                            <th>Trạng thái</th>
                            <td>{{ $row->status }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                <div class="row">
                    <div class="col-md-6">
                       
                    </div>
                </div>
            </div>
            <!-- /.card-footer-->
        </div>
    </section>
  </div>
@endsection