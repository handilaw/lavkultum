<?php

namespace App\Http\Controllers;

use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;
use App\Kultum;
use App\Kategori;
use App\Santri;
use Validator,File,Redirect,Response;
use Carbon\Carbon;

class KultumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $ar_kultum = DB::table('kultum')
        ->join('kategori', 'kategori.id', '=', 'kultum.kategori_id')
        ->join('santri', 'santri.id', '=', 'kultum.santri_id')
        ->select('kultum.*', 'kategori.nama AS kategori', 'santri.nama AS santri')
        ->orderBy('id', 'desc')
        ->get();

        return view('kultum.index', compact('ar_kultum'));
    }

    public function cari(Request $request)
    {
        // mengambil data dari table kultum sesuai pencarian data
        $search = DB::table('kultum')->when($request->cari, function ($query) use ($request) {
                $query->where('judul', 'LIKE', "%{$request->q}%")
                      ->orWhere('isi', 'LIKE', "%{$request->q}%");
                })->get();
      return view('kultum.index', compact('search'));
    }
        /*
        $ar_kultum = DB::table('kultum')
        ->join('kategori', 'kategori.id', '=', 'kultum.kategori_id')
        ->join('santri', 'santri.id', '=', 'kultum.santri_id')
        ->select('kultum.*', 'kategori.nama AS kategori', 'santri.nama AS santri')
        ->where('judul','like',"%".$cari."%")
        ->orwhere('isi','like',"%".$cari."%")
        ->get();
 
            // mengirim data kultum ke view index
        return view('kultum.index', compact('ar_kultum'));
        */
 
    public function home()
    {
        //
        $ar_kultum = DB::table('kultum')
        ->join('kategori', 'kategori.id', '=', 'kultum.kategori_id')
        ->join('santri', 'santri.id', '=', 'kultum.santri_id')
        ->select('kultum.*', 'kategori.nama AS kategori', 'santri.nama AS santri')
        ->orderBy('id', 'desc')
        ->limit(2)
        ->get();

        return view('layouts.home', compact('ar_kultum'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        if(Auth::user()){
            return view('kultum.form');
        }else{
            return redirect('/login');
        }

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

        DB::table('kultum')->insert(
            [
                'judul'=>$request->judul,
                'isi'=>$request->isi,
                'kategori_id'=>$request->kategori,
                'santri_id'=>$request->santri,
                'tanggal'=>Carbon::now(),
            ]
        );

        return redirect('/kultum');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($judul)
    {
        //
        $ar_kultum = DB::table('kultum')
        ->join('kategori', 'kategori.id', '=', 'kultum.kategori_id')
        ->join('santri', 'santri.id', '=', 'kultum.santri_id')
        ->select('kultum.*', 'kategori.nama AS kategori', 'santri.nama AS santri')
        ->where('kultum.judul','=',$judul)
        ->get();

        return view('kultum.show', compact('ar_kultum'));
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
        if(Auth::user()){
            $data = DB::table('kultum')->where('id',$id)->get();
            return view('kultum/form_edit',compact('data'));
        }else{
            return redirect('/login');
        }
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
        $this->middleware('auth');
        DB::table('kultum')->where('id',$request->id)->update(
            [
                'judul'=>$request->judul,
                'isi'=>$request->isi,
                'kategori_id'=>$request->kategori,
                'santri_id'=>$request->santri,
                'tanggal'=>Carbon::now(),
            ]
        );
        return redirect('/kultum');
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
        if(Auth::user()){
            $this->middleware('auth');
            DB::table('kultum')->where('id','=',$id)->delete();
            return redirect ('/kultum');
        }else{
            return redirect('/login');
        }
    }
}
