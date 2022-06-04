<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use App\Models\Kategori;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $galleries = Gallery::paginate(10);
    
        return view('gallery.index', compact('galleries'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $category = Kategori::get();
        return view('gallery.create', compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $messages = [
            'required' => ':attribute must be filled'
        ];
        request()->validate([
            'judul' => 'required',
            'kategori_id' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:10240'
        ], $messages);

        if ($files = $request->file('image'))
        {
          $destinationPath = 'img';
          $imageName = date('YmdHis') . "1." . $files->getClientOriginalExtension();
          $files->move($destinationPath, $imageName);
          $request->request->add(['foto' => $imageName ]);
        }

        $gallery = Gallery::create([
            'kategori_id' => $request->kategori_id,
            'judul' => $request->judul,
            'foto' =>$request->foto,
            'deskripsi' => $request->deskripsi,
        ]);

        return redirect()->route('galleries.index')
        ->with('success','Foto succefully added.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $gallery = Gallery::find($id);
        if($gallery->foto){
            $file_path = public_path('img/'.$gallery->foto); 
         }
         if ($gallery){
            if (file_exists($file_path)) {
                if  (unlink($file_path)){
                    $gallery->delete();
                    return redirect()->route('galleries.index')
                    ->with('success','Foto succefully deleted');
                }
                else {
                    return redirect()->route('galleries.index')
                    ->with('error','Foto gagal dihapus');
                } 
             }
        }
    }
}
