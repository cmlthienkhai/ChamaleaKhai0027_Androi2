@extends('layouts.admin')
@section('title', 'Liên hệ')
@section('content')
<form action="{{ route('contact.store') }}" method="post" enctype="multipart/form-data">
  @csrf
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Thêm liên hệ</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Thêm liên hệ</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="card">
           <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-12 text-right">
                        <button name="THEM" type="submit" class="btn btn-sm btn-success">
                            <i class="fas fa-save"></i> Thêm
                        </button>
                        <a class="btn btn-sm btn-info" href="{{ route('category.index')  }}">
                            <i class="fas fa-arrow-circle-left"></i> Quay về danh sách
                        </a>
                    </div>
                </div>
            </div>

                <div class="card-body">
                  <div class="row">
                    <div class="col-md-7">
                      <div class="mb-3">
                        <label for="name">Họ và tên</label>
                        <input type="text" name="name" id="name" value="{{ old('name') }}" class="form-control">
                        @if ($errors->has('name'))
                        <div class="text-danger">
                          {{ $errors->first('name') }}
                        </div>
                        @endif
                      </div>
                      <div class="mb-3">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" value="{{ old('email') }}" class="form-control">
                        @if ($errors->has('email'))
                        <div class="text-danger">
                          {{ $errors->first('email') }}
                        </div>
                        @endif
                      </div>
                      <div class="mb-3">
                        <label for="phone">Phone</label>
                        <input type="tel" name="phone" id="phone" placeholder="0912345678" pattern="[0-9]{4}[0-9]{3}[0-9]{3}" value="{{ old('phone') }}" class="form-control">
                        @if ($errors->has('phone'))
                        <div class="text-danger">
                          {{ $errors->first('phone') }}
                        </div>
                        @endif
                      </div>
                      
                    </div>
                    <div class="col-md-5">
                      <div class="mb-3">
                        <label for="title">Tiêu đề</label>
                        <input type="text" name="title" id="title" value="{{ old('title') }}" class="form-control">
                        @if ($errors->has('title'))
                        <div class="text-danger">
                          {{ $errors->first('title') }}
                        </div>
                        
                        @endif
                      </div>
                      <div class="mb-3">
                        <label for="status">Trạng thái</label>
                        <select name="status" id="status" class="form-control">
                            <option value="1">Chưa trả lời</option>
                            <option value="2">Đã trả lời</option>
                        </select>
                      </div>
                    </div>
                  </div>
                </div>

    </section>
    <!-- /.content -->
  </div>
</form>
@endsection