@extends('home')


@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Foto</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('galleries.index') }}"> Back</a>
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


    <form action="{{ route('galleries.update',$gallery->id) }}" method="POST" enctype="multipart/form-data">
    	@csrf
        @method('PUT')
         <div class="row">
		    <div class="col-xs-12 col-sm-12 col-md-12">
		        <div class="form-group">
		            <strong>Judul:</strong>
		            <input type="text" name="judul" value="{{ $gallery->judul }}" class="form-control">
		        </div>
		    </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
		        <div class="form-group">
		            <strong>Kategori:</strong>
                        <select name="kategori_id" id="" class="form-control">
                            <option value="">Select Category</option>
                            @foreach ($category as $obj)
                            <option {{$gallery->kategori_id == $obj->id ? 'selected':''}} value="{{$obj->id}}">{{ $obj->nama_kategori }}</option>
                            @endforeach
                        </select>
		        </div>
		    </div>
		    <div class="col-xs-12 col-sm-12 col-md-12">
		        <div class="form-group">
		            <strong>Deskripsi:</strong>
		            <textarea class="form-control" style="height:150px" name="detail">{{ $gallery->deskripsi }}</textarea>
		        </div>
		    </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
		        <div class="form-group">
		            <strong>Foto:</strong>
		            <input type="file" name="image" class="form-control">
		        </div>
		    </div>
		    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
		      <button type="submit" class="btn btn-primary">Submit</button>
		    </div>
		</div>
    </form>

@endsection