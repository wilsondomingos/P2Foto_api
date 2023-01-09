<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
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
             '' => Hash::make($data['password']),
           password
     
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
}
