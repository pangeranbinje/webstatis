@extends('master')
@section('content')
<div class="mt-5 ml-3 mr-3">
<div class="card">
              <div class="card-header">
                <h3 class="card-title ">Question</h3>

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0 mt-3" style="height: 100%;">
              @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success')}}
                    </div>
              @endif
              <a class="btn btn-primary" href="/pertanyaan/create">Create New Question</a>
                <table class="table table-head-fixed text-nowrap mt-3">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Judul</th>
                      <th>Isi</th>
                      <!-- <th>Tanggal Dibuat</th> -->
                      <th>Action</th>
                     </tr>
                  </thead>
                  <tbody>
                   @forelse($post as $key => $fill)
                        <tr>
                            <td> {{$key + 1}} </td>
                            <td> {{$fill->judul}} </td>
                            <td class="text-wrap"> {{$fill->isi}} </td>
                            <!-- <td> {{$fill->tanggal_dibuat}}</td> -->
                            <td>
                                <a class="btn btn-primary" href="/pertanyaan/{{$fill->id}}">More</a>
                                <a class="btn btn-default" href="/pertanyaan/{{$fill->id}}/edit">Edit</a>
                                <form action="/pertanyaan/{{$fill->id}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <input type="submit" value="Delete" class="btn btn-danger"></input>
                                </form>
                            </td>
                        </tr>
                    @empty 
                        <tr>
                            <td colspan="4" align="center">No Post</td>
                        </tr>
                   @endforelse
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
</div>

@endsection