@extends('master')

@section('content')

            <!-- general form elements disabled -->
            <div class="ml-3 mt-3 col-sm-6">
            <div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title">Create New Question</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form role="form" action="/pertanyaan" method="post">
                @csrf
                  <div class="row">
                    <div class="col-sm-12">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Title</label>
                        <input type="text" class="form-control" id="judul" name="judul" value="{{ old('judul', ' ')}}" placeholder="Enter ...">
                        @error('judul')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12">
                      <!-- textarea -->
                      <div class="form-group">
                        <label>Question</label>
                        <textarea class="form-control" rows="3" id="isi" name="isi" value="{{ old('isi', ' ')}}" placeholder="Enter ..."></textarea>
                        @error('isi')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    </div>
                  </div>
                  <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  </div>

              <!-- /.card-body -->
            </div>
            <!-- /.card -->
            <!-- general form elements disabled -->
            </div>

@endsection