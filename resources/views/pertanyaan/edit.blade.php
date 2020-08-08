@extends('master')

@section('content')

            <!-- general form elements disabled -->
            <div class="ml-3 mt-3 col-sm-6">
            <div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title">Edit Question</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form role="form" action="/pertanyaan/{{$edit->id}}" method="post">
                @csrf
                @method('PUT')
                  <div class="row">
                    <div class="col-sm-12">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Title</label>
                        <input type="text" class="form-control" id="judul" name="judul" value="{{ old('judul', $edit->judul)}}" placeholder="Enter ...">
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
                        <textarea class="form-control" rows="3" id="isi" name="isi" placeholder="Enter ...">{{ old('isi', $edit->isi)}}</textarea>
                        @error('isi')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    </div>
                  </div>
                  <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Update</button>
                  </div>

              <!-- /.card-body -->
            </div>
            <!-- /.card -->
            <!-- general form elements disabled -->
            </div>

@endsection