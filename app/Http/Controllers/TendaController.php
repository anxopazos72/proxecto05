<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Tenda;
use App\Mail\MensaxeFormulario;
use Illuminate\Support\Facades\Mail;

class TendaController extends Controller
{
    public function index(){
		return view('index');
		}
	public function newsletter(Request $request){
		$user=new User();
		$user->name=$request->nome;
		$user->email=$request->email;
		$user->save();
		return back()->with('newsletter_enviada', 'Datos enviados para procesamento');
	}
		
	public function nos(){
		return view('nos');
		}
		
	public function contacto(){
		return view('contacto');
		}
		
	public function produtos(){
		$produtos=Tenda::orderBy('id','DESC')->paginate(4);
		return view('produtos', compact('produtos'));
		}	
	public function enviarEmail(Request $request){
		$request->validate([
			'nome' => 'required',
			'apelidos' => 'required',
			'email' => 'required|email',
			'mensaxe' => 'required|min:10'			
		]);
		$detalles=[
		'titulo'=>'Correo da Tenda de Electrodomésticos Pazos',
		'nome'=>$request->nome,
		'apelidos'=>$request->apelidos,
		'email'=>$request->email,
		'telefono'=>$request->telefono,
		'mensaxe'=>$request->mensaxe];
		
		Mail::to('anxopazos@gmail.com')->send(new MensaxeFormulario($detalles));
		return back()->with('mensaxe_enviada', 'Datos enviados. Graciñas pola súa mensaxe');
		}
	
}
