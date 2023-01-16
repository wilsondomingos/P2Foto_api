<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use \DB;
use Illuminate\Support\Facades\Hash;
class UtilizadorController extends Controller
{


    private $user;

    public function __construct(User $user){
        $this->user=$user;
    }

    public function index(){
        $user = $this->user->all();
        return response()->json($user,200);
    }


    public function store(Request $request){
        $data = $request->all();
 
 
        try{
 
         $suario=[
             'name' => $data['name'],
             'email' =>   $data['email'],
             'password' => Hash::make($data['password']),
           
     
         ];
 
         $usuarios=User::create($suario);
 
         return response()->json([
             'data'=>[
                 'msg'=>'Utilizador registado com sucesso'
             ]
         ],200);
     }catch(\Exception $e){
         return response()->json(['error'=>$e->getMessage()],401);
     }
 
        
     }

     public function pesquisar(Request $request){
        $nome=$request['nome']."%";
        $Nomes="%".$nome;
        $users=\App\User::where('name','like',$Nomes)
        ->orderBy('created_at','DESC')->get();
        return response()->json($users,200);
     }


     public function id(Request $request){
        $email=$request['email'];
        
        $id = DB::table('users')
   
        ->where('users.email', $email)  
        ->select('users.id')
        ->get();
        return response()->json($id,200);
     }
}
