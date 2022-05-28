@extends('home')


@section('content')
{{-- <div class="box"> --}}
    <div class="box-header with-border">
          <h1 class="box-title"> <b> Details Data User </b> </h1>
          <div class="box-tools pull-right">
              <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
        </div>
    </div>
    <div class="box-body">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('users.index') }}">Back</a>
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
                <td>Nama</td>
                <td>: {{ $user->name }}</td>
            </tr>
            <tr>
                <td>Telepon</td>
                <td>: {{ $user->no_hp }}</td>
            </tr>
            <tr>
                <td>Email</td>
                <td>: {{ $user->email }}</td>
            </tr>
            <tr>
                <td>Tanggal Pembuatan Akun</td>
                <td>: {{ date('d-M-y', strtotime($user->created_at)) }}</td>
            </tr>
            <tr>
                <td>Roles</td>
                <td>:
                    @if(!empty($user->getRoleNames()))
                        @foreach($user->getRoleNames() as $v)
                            <label class="badge badge-success">{{ $v }}</label>
                        @endforeach
                    @endif
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