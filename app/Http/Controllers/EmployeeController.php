<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEmployeeRequest;
use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $employees = Employee::all();

        return view('employee.index', ['models' => $employees]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function create(Request $request)
    {

        return view('employee.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreEmployeeRequest $request)
    {
        $model = new Employee();
        $model->fill($request->all());
        $model->save();

        return redirect()->route('employee.index')->with('success', 'Usuário cadastrado com sucesso!');
    }

    /**
     * Edit the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $model = Employee::findOrFail($id);

            $model->delete();

        return redirect()->route('employee.index')->with('success', 'Usuário deletado com sucesso!');
    }
}
