<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
         $this->middleware('permission:article-list|article-create|article-edit|article-delete', ['only' => ['index','show']]);
         $this->middleware('permission:article-create', ['only' => ['create','store']]);
         $this->middleware('permission:article-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:article-delete', ['only' => ['destroy']]);
    }
    public function index()
    {
        //
        $articles = Article::paginate(10);
    
        return view('article.index', compact('articles'))
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
        return view('article.create');
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
            'konten' => 'required',
            'tanggal_posting' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:10240'
        ], $messages);

        if ($files = $request->file('image'))
        {
          $destinationPath = 'article_dewi';
          $imageName = date('YmdHis') . "1." . $files->getClientOriginalExtension();
          $files->move($destinationPath, $imageName);
          $request->request->add(['foto' => $imageName ]);
        }

        $article = Article::create([
            'user_id' => $request->user()->id,
            'judul' => $request->judul,
            'foto' =>$request->foto,
            'slug' => Str::slug($request->judul),
            'tanggal_posting' =>$request->tanggal_posting,
            'konten' => $request->konten
        ]);
        return redirect()->route('article.index')
        ->with('success','Article succefully added.');
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
        $article = Article::where('id', $id)->first();
        return view('article.edit', compact('article'));
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
        $article = Article::where('id', $id)->first();
        $validatedData = $request->validate([
            'judul' => 'required',
            'konten' => 'required',
            'tanggal_posting' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:10240'
        ]);
        $data = [
            'user_id' => $request->user()->id,
            'judul' => $request->judul,
            'slug' => Str::slug($request->judul),
            'tanggal_posting' =>$request->tanggal_posting,
            'konten' => $request->konten
            ];
        $path = public_path('fasilitas_dewi/'. $article->foto);

        if ($files = $request->file('image')) 
            {
                if($article->foto != ''  && $article->foto != null)
                {
                    $file_old = $path;
                    unlink ($file_old);
            }
            $destinationPath = 'article_dewi';
            $imageName = date('YmdHis') . "." . $files->getClientOriginalExtension();
            $files->move($destinationPath, $imageName);
            $save['foto'] = "$imageName";
            $request->request->add(['foto' => $imageName ]);
            $data['foto'] = $request->foto;
        }

        $article = Article::whereId($id)->update($data);

        return redirect()->route('article.index')
        ->with('success','Article Successfuly changed'); 
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
        
    }
}
