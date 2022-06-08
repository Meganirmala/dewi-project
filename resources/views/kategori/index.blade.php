@extends('home')


@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Kategori</h2>
            </div>
            <div class="pull-right">
                @can('kategori-create')
                <a class="btn btn-success" href="{{ route('kategori.create') }}"> Create New Category</a>
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
            <th>Nama Kategori</th>
            <th>Details</th>
            <th width="280px">Action</th>
        </tr>
	    @foreach ($categories as $category)
	    <tr>
	        <td>{{ ++$i }}</td>
	        <td>{{ $category->nama_kategori }}</td>
	        <td>{{ $category->deskripsi }}</td>
	        <td>
                <form action="{{ route('kategori.destroy',$category->id) }}" method="POST">
                    @can('kategori-edit')
                    <a class="btn btn-primary" href="{{ route('kategori.edit',$category->id) }}">Edit</a>
                    @endcan


                    @csrf
                    @method('DELETE')
                    @can('kategori-delete')
                    <button type="submit" class="btn btn-danger">Delete</button>
                    @endcan
                </form>
	        </td>
	    </tr>
	    @endforeach
    </table>


    {!! $categories->links() !!}


@endsection