<?php

namespace App\Http\Controllers\Api;
use App\album;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \DB;
use Auth;
class AlbumController extends Controller
{
    private $album;

    public function __construct(album $album){
        $this->album=$album;
    }

    public function welcome(){
        $album = DB::table('albums')
        ->where('albums.user_id', auth::user()->id)  
        ->select('albums.*')
        ->get();

        //dd( $album);

        return view('welcome',compact('album'));
    }

    public function index(){
        $album = $this->album->all();
        return response()->json($album,200);
    }

    public function store(Request $request){

        $data = $request->all();
        try{

            $album = $this->album->create($data);

            return response()->json([
                'data'=>[
                    'msg'=>'Album registado com sucesso'
                ]
            ],200);
        }catch(\Exception $e){
            return response()->json(['error'=>$e->getMessage()],401);
        }
        
    }


    public function StoreAlbum(Request $request){
        $user_id = $request['user_id'];
        $album = DB::table('albums')
        ->where('albums.user_id', $user_id)  
        ->select('albums.*')
        ->get();

        return response()->json($album,200);
    }



}
