<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class medicoController extends Controller
{

    public function index()
    {
        $diagnostico = DB::table('tbl_paciente')->get();

        return view('listar', ['diagnostico' => $diagnostico]);
    }


    public function create()
    {
        return view('crud.registro');
    }


    public function store(Request $request)
    {
        $rules = [
            'nombre_paciente' => 'required|string|min:5',
            'rut_paciente' => 'required|string|min:3',
            'diagnostico_paciente' => 'required|string|min:5',
            'tratamiento' => 'required|string|min:5',
            'medicamento' => 'required|string|min:5',
            'cada_cuantas_horas' => 'required|string|min:1',
            'por_cuantos_dias' => 'required|int|min:1',
        ];

        $messages = [
            'required' => 'El campo es obligatorio',
            'string' => 'El campo debe ser alfanumérico',
            'min' => 'Mínimo :min caracteres',
            'int' => 'El campo debe ser numérico',
        ];

        $this->validate($request, $rules, $messages);

        DB::table('tbl_paciente')->insert([
            'VCH_NOMBRE' => $request->nombre_paciente,
            'VCH_RUT' => $request->rut_paciente,
            'VCH_DIAGNOSTICO' => $request->diagnostico_paciente,
            'VCH_TRATAMIENTO' => $request->tratamiento,
            'VCH_MEDICAMENTO' => $request->medicamento,
            'VCH_CADA_HORA' => $request->cada_cuantas_horas,
            'INT_DIAS' => $request->por_cuantos_dias,
        ]);

        return redirect()->route('listar.paciente')->with('mensaje', 'Paciente registrado');
    }

    public function buscarRutPaciente(Request $request)
    {
        $rules = [
            'rut_paciente' => 'string',
        ];

        $messages = [
            'string' => 'El campo es Alfanumérico',
        ];

        $this->validate($request, $rules, $messages);

        $diagnostico = DB::table('tbl_paciente')
            ->where('VCH_RUT', 'LIKE', "%" . $request->rut_paciente . "%")
            ->get();

        return $this->buscarPaciente($diagnostico);
    }

    public function buscarPaciente($diagnostico = null)
    {
        if ($diagnostico == null) {

            return view('crud.buscar', compact('diagnostico'));
        } else {
            return view('crud.buscar', compact('diagnostico'));
        }
    }
    public function listarPaciente($diagnostico = null)
    {
        if ($diagnostico == null) {
            $diagnostico = DB::table('tbl_paciente')->get();
            return view('crud.listar', compact('diagnostico'));
        } else {
            return view('crud.listar', compact('diagnostico'));
        }
    }


    public function show(string $id)
    {
        $diagnostico = DB::table('tbl_paciente')->where('ID_PACIENTE', $id)->first();

        return view('crud.delete', ['diagnostico' => $diagnostico]);
    }


    public function edit(string $id)
    {
        $diagnostico = DB::table('tbl_paciente')->where('ID_PACIENTE', $id)->first();

        return view('crud.update', ['diagnostico' => $diagnostico]);
    }

    public function update(Request $request, string $id)
    {
        $rules = [
            'VCH_DIAGNOSTICO' => 'required|string|min:5',
            'VCH_TRATAMIENTO' => 'required|string|min:5',
            'VCH_MEDICAMENTO' => 'required|string|min:5',
            'VCH_CADA_HORA' => 'required|string|min:1',
            'INT_DIAS' => 'required|int|min:1',
        ];

        $messages = [
            'required' => 'El campo es obligatorio',
            'string' => 'El campo debe ser alfanumérico',
            'min' => 'Mínimo :min caracteres',
            'int' => 'El campo debe ser numérico',
        ];

        $this->validate($request, $rules, $messages);

        DB::table('tbl_paciente')
            ->where('ID_PACIENTE', $id)
            ->update($request->except(['_token', '_method']));

        return redirect()->route('buscar.paciente')->with('Paciente actualizado');
    }


    public function destroy(string $id)
    {
        DB::table('tbl_paciente')->where('ID_PACIENTE', $id)->delete();
        return redirect()->route('buscar.paciente')->with('Paciente eliminado');
    }
}
