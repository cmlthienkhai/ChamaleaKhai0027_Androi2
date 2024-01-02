@extends('layouts.admin')
@section('title', 'Thùng rác')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Thùng rác</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard.index')  }}">Bảng điều khiển</a></li>
                        <li class="breadcrumb-item active">Thùng rác </li>
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
                            <a class="btn btn-sm btn-info" href="{{ route('page.index')  }}">
                                <i class="fas fa-arrow-circle-left"></i> Quay về danh sách
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body">
                @includeIf('backend.messageAlert', ['some' => 'data']) 
                <table class="table table-bordered" id="myTable">
                    <thead class="bg-orange">
                        <tr>
                            <th class="text-center" style="width:20px"><input type="checkbox"></th>
                            <th class="text-center" style="width:20px">ID</th>
                            <th class="text-center" style="width:100px">Hình</th>
                            <th class="text-center" style="width:250px">Tên danh mục</th>
                            <th class="text-center" style="width:250px">Tên thường</th>
                            <th class="text-center">Ngày tạo</th>
                            <th class="text-center">Chức năng</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($list as $row)
                        <tr>
                            <td>
                            <input type="checkbox" name="checkId[]" value="{{ $row->id }}">
                            </td>
                            <td>{{ $row->id }}</td>
                            <td>
                            <img src="{{ asset('images/page/'.$row->image) }}" alt="{{ $row->image }}" class="img-fluid">
                            </td>
                            <td>{{ $row->name }}</td>
                            <td>{{ $row->slug }}</td>
                            <td>{{ $row->created_at }}</td>
                            <td class="text-center">
                                <a class="btn btn-sm btn-info" href="{{ route('page.show',['page'=>$row->id]) }}">
                                    <i class="fas fa-eye"></i>
                                </a>
                                <a class="btn btn-sm btn-primary" href="{{ route('page.restore',['page'=>$row->id]) }}">
                                    <i class="fas fa-undo-alt"></i>
                                </a>                                
                                <form action="{{ route('page.destroy',['page'=>$row->id]) }}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" class="btn btn-sm btn-danger">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </form>
                            </td>
                            
                        </tr>

                        @endforeach
                    </tbody>
                    
                </table>
            </div>
            <!-- /.card-body -->
           
            <!-- /.card-footer-->
        </div>
        <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
@endsection