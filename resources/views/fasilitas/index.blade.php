@extends('home')


@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Fasilitas</h2>
            </div>
            <div class="pull-right">
                @can('fasilitas-create')
                <a class="btn btn-success" href="{{ route('fasilitas.create') }}"> Create New Fasilitas</a>
                @endcan
            </div>
        </div>
    </div>


    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif


    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Deskripsi Fasilitas</th>
            <th>Foto</th>
            <th width="280px">Action</th>
        </tr>
	    @foreach ($fasilitas as $obj)
	    <tr>
	        <td>{{ ++$i }}</td>
	        <td>{{ $obj->deskripsi }}</td>
            <td>
                <img src="{{ asset('fasilitas_dewi/'. $obj->foto) }}" alt="" class="product-image">
            </td>
	        <td>
                <form action="{{ route('fasilitas.destroy',$obj->id) }}" method="POST">
                    <a class="btn btn-info" href="{{ route('fasilitas.show',$obj->id) }}">Show</a>
                    @can('fasilitas-edit')
                    <a class="btn btn-primary" href="{{ route('fasilitas.edit',$obj->id) }}">Edit</a>
                    @endcan


                    @csrf
                    @method('DELETE')
                    @can('fasilitas-delete')
                    <button type="submit" class="btn btn-danger show_confirm">Delete</button>
                    @endcan
                </form>
	        </td>
	    </tr>
	    @endforeach
    </table>


    {!! $fasilitas->links() !!}


@endsection