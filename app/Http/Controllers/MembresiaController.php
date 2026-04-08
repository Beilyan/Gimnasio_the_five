<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Membresia;
use Srmklive\PayPal\Services\PayPal as PayPalClient;
use Illuminate\Support\Facades\DB;

class MembresiaController extends Controller
{
    function guardar(Request $req){
        $membresia = new Membresia();
        $membresia->nom_membresia = $req->nom_membresia;
        $membresia->descripcion = $req->descripcion;
        $membresia->costo = $req->costo; 
        $membresia->duracion_meses = $req->duracion_meses;

        $membresia->save();
        return redirect()->route('membresia.mostrar');
    }

    function mostrar(){
        $membresia = Membresia::all();
        return view('lista_membresia', compact('membresia'));
    }

    function editar($id){
        $membresia = Membresia::find($id);

        return view('editar_membresia', compact('membresia'));
    }

    function actualizar(Request $req){
        $membresia = Membresia::findOrFail($req->id);
        $membresia->nom_membresia = $req->nom_membresia;
        $membresia->descripcion = $req->descripcion;
        $membresia->costo = $req->costo; 
        $membresia->duracion_meses = $req->duracion_meses;

        $membresia->save();

        return redirect()->route('membresia.mostrar');
    }

    function eliminar($id){
        $membresia = Membresia::findOrFail($id);
        $membresia -> delete();

        return redirect()->route('membresia.mostrar');
    }

    function verMembresias(){
        $membresia = Membresia::all();
        return view('ver_membresias', compact('membresia'));
    }

    public function pagar($id){
        $membresia = Membresia::findOrFail($id);

        session(['membresia_id' => $membresia->id]);

        $provider = new PayPalClient;
        $provider->setApiCredentials(config('paypal'));
        $provider->getAccessToken();

        $response = $provider->createOrder([
            "intent" => "CAPTURE",
            "purchase_units" => [
                [
                    "amount" => [
                        "currency_code" => "MXN",
                        "value" => $membresia->costo
                    ],
                    "description" => $membresia->nom_membresia
                ]
            ],
            "application_context" => [
                "return_url" => route('membresia.success'),
                "cancel_url" => route('membresia.cancel'),
            ]
        ]);

        if (isset($response['id'])) {
            foreach ($response['links'] as $link) {
                if ($link['rel'] === 'approve') {
                    return redirect()->away($link['href']);
                }
            }
        }

        return "Error al crear pago";
    }

    public function success(Request $request){
    $provider = new PayPalClient;
    $provider->setApiCredentials(config('paypal'));
    $provider->getAccessToken();

    $response = $provider->capturePaymentOrder($request->token);

    if ($response['status'] !== 'COMPLETED') {
        return redirect()->route('ver_membresias')
            ->with('error', 'Pago no completado');
    }

    $user = auth()->user();
    $persona_id = $user->persona->id;
    $membresia_id = session('membresia_id');

    if (!$membresia_id) {
        return "Error: no hay membresía en sesión";
    }

    $membresia = Membresia::findOrFail($membresia_id);

    $existe = DB::table('pago_membresias')
        ->where('persona_id', $user->id)
        ->where('fecha_expira', '>', now())
        ->exists();

    if ($existe) {
        return redirect()->route('ver_membresias')
            ->with('error', 'Ya tienes una membresía activa');
    }

    DB::table('pago_membresias')->insert([
        'persona_id' => $persona_id,
        'membresia_id' => $membresia->id,
        'fecha_compra' => now(),
        'fecha_expira' => now()->addMonths($membresia->duracion_meses),
    ]);

    session()->forget('membresia_id');

    return redirect()->route('perfil')
        ->with('success', 'Membresía activada correctamente');
}

    public function cancel(){
        session()->forget('membresia_id');

        return redirect()->route('perfil')
            ->with('error', 'Pago cancelado');
    }
}