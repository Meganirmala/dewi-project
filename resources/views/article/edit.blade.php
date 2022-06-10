@extends('home')


@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Article</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('article.index') }}"> Back</a>
            </div>
        </div>
    </div>


    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif


    <form action="{{ route('article.update',$article->id) }}" method="POST" enctype="multipart/form-data">
    	@csrf
        @method('PUT')
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
		        <div class="form-group">
		            <strong>Judul:</strong>
		            <input type="text" name="judul" class="form-control" value="{{ $article->judul }}">
		        </div>
		    </div>
		    <div class="col-xs-12 col-sm-12 col-md-12">
		        <div class="form-group">
		            <strong>Konten:</strong>
		            <textarea class="form-control" style="height:150px" name="konten" id="my-editor" id="my-editor" placeholder="Konten">{{ $article->konten }}</textarea>
		        </div>
		    </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
		        <div class="form-group">
		            <strong>Foto:</strong>
		            <input type="file" name="image" class="form-control">
		        </div>
		    </div>
            <div class="col-xs-12 col-sm-12 col-md-4">
		        <div class="form-group">
		            <strong>Tanggal Postingan:</strong>
		            <input type="date" name="tanggal_posting" class="form-control" value="{{ $article->tanggal_posting }}">
		        </div>
		    </div>
		    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
		      <button type="submit" class="btn btn-primary">Submit</button>
		    </div>
		</div>
    </form>

@endsection
@push ('after-scripts')
    <script type="text/javascript" src="{{ asset('vendor/ckeditor/ckeditor.js') }}"></script>
    {{-- <script type="text/javascript" src="{{ asset('vendor/file-manager/js/file-manager.js') }}"></script> --}}

    <script type="text/javascript">
        CKEDITOR.replace('my-editor');
    </script>
@endpush