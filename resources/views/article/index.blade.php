@extends('home')


@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Article</h2>
            </div>
            <div class="pull-right">
                @can('article-create')
                <a class="btn btn-success" href="{{ route('article.create') }}"> Create New Article</a>
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
            <th>Slug</th>
            <th>Gambar</th>
            <th width="280px">Action</th>
        </tr>
	    @foreach ($articles as $article)
	    <tr>
	        <td>{{ ++$i }}</td>
	        <td>{{ $article->judul }}</td>
	        <td>{{ $article->slug }}</td>
	        <td>
                <img src="{{ asset('article_dewi/'. $article->foto) }}" alt="" class="product-image">
            </td>
	        <td>
                <form action="{{ route('article.destroy',$article->id) }}" method="POST">
                    <a class="btn btn-info" href="{{ route('article.show',$article->id) }}">Show</a>
                    @can('article-edit')
                    <a class="btn btn-primary" href="{{ route('article.edit',$article->id) }}">Edit</a>
                    @endcan

                    @csrf
                    @method('DELETE')
                    @can('article-delete')
                    <button type="submit" class="btn btn-danger btn-flat show_confirm">Delete</button>
                    @endcan
                </form>
	        </td>
	    </tr>
	    @endforeach
    </table>


    {!! $articles->links() !!}


@endsection