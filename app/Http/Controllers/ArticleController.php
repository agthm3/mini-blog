<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       

        //Logic untuk mengaktifkan warna di navbar
        session(['active_button' => 'blog']);

       $data = Article::all();
       return view('pages.article.index', compact('data'));
    }

    public function search(Request $request)
    {
        $query = $request->input('query');
        $categories = $request->input('categories');

        // Jika categories tidak diisi, maka cari semua artikel yang judulnya mengandung kata kunci $query
        if (empty($categories)) {
            $data = Article::where('title', 'like', '%' . $query . '%')
                    ->orWhere('article', 'like', '%'. $query. '%')
                    ->orWhere('sub_title', 'like', '%'. $query . '%' )
                    ->paginate(9);
        }
        // Jika categories diisi, maka cari semua artikel yang judulnya mengandung kata kunci $query dan kategori sesuai dengan $categories
        else {
            $data = Article::where('title', 'like', '%' . $query . '%')
                ->where('categories', $categories)
                ->paginate(9);
        }

        return view('pages.article.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('pages.article.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'sub_title'=>'required',
            'article'=> 'required'
        ]);


        $data_article = [
            'title' => $request->title, 
            'sub_title'=> $request->sub_title, 
            'article'=> $request->article
        ];

        $action = Article::create($data_article);


        if ($action) {
            return redirect('/');
        } else {
            return false;
        }

       
        
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\article  $article
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {   

        // dd($id);
        $data = Article::findOrFail($id);
        $article = Article::latest()->take(3)->get();
        
        return view('pages.article.detail', compact('data', 'article'));
    
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(article $article)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, article $article)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(article $article)
    {
        //
    }
}
