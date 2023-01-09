<?php

namespace App\Http\Controllers\Api;
use App\foto;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \DB;
use Auth;
class FotoController extends Controller
{
    private $foto;

    public function __construct(foto $foto){
        $this->foto=$foto;
    }


    public function index(){
        $foto = $this->foto->all();
        return response()->json($foto,200);
    }


    public function store(Request $request){

        $data = $request->all();
        try{




            if(isset($data['foto'])){
                $path=$request->file('foto')->store('imagem','public');
                $fotos=[
                  'foto' =>   $path,
                  'album_id'=>$data['album_id']
              ];
             // dd( $path);
              $foto =foto::create($fotos);

        }
            return response()->json([
                'data'=>[
                    'msg'=>'foto registado com sucesso'
                ]
            ],200);
       
        }catch(\Exception $e){
            return response()->json(['error'=>$e->getMessage()],401);
        }
        
    }

    public function listar_foto($id){
        $fotos = DB::table('fotos')
        ->where('fotos.album_id',$id)  
        ->select('fotos.*')
        ->get();
        return view('Listar_foto',compact('fotos'));
    }

}
