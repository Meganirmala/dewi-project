@extends('home')


@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Gallery</h2>
            </div>
            <div class="pull-right">
                @can('product-create')
                <a class="btn btn-success" href="{{ route('galleries.create') }}"> Add New Foto</a>
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
            <th>Judul</th>
            <th>Foto</th>
            <th width="280px">Action</th>
        </tr>
	    @foreach ($galleries as $gallery)
	    <tr>
	        <td>{{ ++$i }}</td>
	        <td>{{ $gallery->judul }}</td>
            <td>
                <img src="{{ asset('img/'. $gallery->foto) }}" alt="" class="product-image">
            </td>
	        <td>
                <form action="{{ route('galleries.destroy',$gallery->id) }}" method="POST">
                    <a class="btn btn-info" href="{{ route('galleries.show',$gallery->id) }}">Show</a>
                    @can('product-edit')
                    <a class="btn btn-primary" href="{{ route('galleries.edit',$gallery->id) }}">Edit</a>
                    @endcan


                    @csrf
                    @method('DELETE')
                    @can('product-delete')
                    <button type="submit" class="btn btn-danger">Delete</button>
                    @endcan
                </form>
	        </td>
	    </tr>
	    @endforeach
    </table>


    {!! $galleries->links() !!}


@endsection