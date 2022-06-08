<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Fasilitas;
use Illuminate\Http\Request;

class FasilitasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
         $this->middleware('permission:fasilitas-list|fasilitas-create|fasilitas-edit|fasilitas-delete', ['only' => ['index','show']]);
         $this->middleware('permission:fasilitas-create', ['only' => ['create','store']]);
         $this->middleware('permission:fasilitas-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:fasilitas-delete', ['only' => ['destroy']]);
    }
    public function index()
    {
        //
        $fasilitas = Fasilitas::paginate(10);
    
        return view('fasilitas.index', compact('fasilitas'))
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
        return view('fasilitas.create');
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
            'deskripsi' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:10240'
        ], $messages);

        if ($files = $request->file('image'))
        {
          $destinationPath = 'fasilitas_dewi';
          $imageName = date('YmdHis') . "1." . $files->getClientOriginalExtension();
          $files->move($destinationPath, $imageName);
          $request->request->add(['foto' => $imageName ]);
        }

        $fasilitas = Fasilitas::create([
            'deskripsi' => $request->deskripsi,
            'foto' =>$request->foto,
        ]);

        return redirect()->route('fasilitas.index')
        ->with('success','Fasilitas succefully added.');
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
        $fasilitas = Fasilitas::find($id);
        return view('fasilitas.show',compact('fasilitas'));
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
        $fasilitas = Fasilitas::where('id', $id)->first();
        return view('fasilitas.edit', compact('fasilitas'));
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
        $fasilitas = Fasilitas::where('id', $id)->first();
        $validatedData = $request->validate([
            'deskripsi' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:10240'
        ]);
        $data = [
            'deskripsi' => $request->deskripsi,
            ];
        $path = public_path('fasilitas_dewi/'. $fasilitas->foto);

        if ($files = $request->file('image')) 
            {
                if($fasilitas->foto != ''  && $fasilitas->foto != null)
                {
                    $file_old = $path;
                    unlink ($file_old);
            }
            $destinationPath = 'fasilitas_dewi';
            $imageName = date('YmdHis') . "." . $files->getClientOriginalExtension();
            $files->move($destinationPath, $imageName);
            $save['foto'] = "$imageName";
            $request->request->add(['foto' => $imageName ]);
            $data['foto'] = $request->foto;
        }

        $fasilitas = Fasilitas::whereId($id)->update($data);

        return redirect()->route('fasilitas.index')
        ->with('success','Fasilitas Successfuly changed'); 
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
        $fasilitas = Fasilitas::find($id);
        if($fasilitas->foto){
            $file_path = public_path('fasilitas_dewi/'.$fasilitas->foto); 
         }
         if ($fasilitas){
            if (file_exists($file_path)) {
                if  (unlink($file_path)){
                    $fasilitas->delete();
                    return redirect()->route('fasilitas.index')
                    ->with('success','Fasilitas succefully deleted');
                }
                else {
                    return redirect()->route('fasilitas.index')
                    ->with('error','Fasilitas gagal dihapus');
                } 
             }
        }
    }
}
