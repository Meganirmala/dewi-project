@extends('home')


@section('content')
{{-- <div class="box"> --}}
    <div class="box-header with-border">
          <h1 class="box-title"> <b> Details Foto </b> </h1>
          <div class="box-tools pull-right">
              <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
        </div>
    </div>
    <div class="box-body">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('galleries.index') }}">Back</a>
                </div>
            </div>
        </div>
        <table class="table table-borderless">
            <thead>
                <th class="col-lg-2"></th>
                <th class="col-lg-2"></th>
            </thead>
            <tbody>
            <tr>
                <td>Judul Foto</td>
                <td>: {{ $gallery->judul }}</td>
            </tr>
            <tr>
                <td>Kategori Foto</td>
                <td>: {{ $gallery->kategori->nama_kategori }}</td>
            </tr>
            <tr>
                <td>Deskripsi</td>
                <td>: {{ $gallery->deskripsi }}</td>
            </tr>
            <tr>
                <td>Tanggal Posting Foto</td>
                <td>: {{ date('d-M-y', strtotime($gallery->created_at)) }}</td>
            </tr>
            <tr>
                <td>
                    <embed class="center" src="{{ asset('gallery_dewi/' . $gallery->foto) }}" style="width:400px;" frameborder="0">
                </td>
            </tr>
            
            </tbody>
        </table>
    </div>
{{-- </div><!-- /.box --> --}}


{{-- <div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2> Show User</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('users.index') }}"> Back</a>
        </div>
    </div>
</div> --}}


{{-- <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Name:</strong>
            {{ $user->name }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Email:</strong>
            {{ $user->email }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Roles:</strong>
            @if(!empty($user->getRoleNames()))
                @foreach($user->getRoleNames() as $v)
                    <label class="badge badge-success">{{ $v }}</label>
                @endforeach
            @endif
        </div>
    </div>
</div> --}}
@endsection