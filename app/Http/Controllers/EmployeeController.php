<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index()
    {
        $pageTitle = 'Employee List';

        return view('employee.index', ['pageTitle' => $pageTitle]);
    }



    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pageTitle = 'Create Employee';

        return view('employee.create', compact('pageTitle'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
    $request->validate([
        'firstName' => 'required',
        'lastName' => 'required',
        'email' => 'required|email',
        'age' => 'required|numeric',
    ], [
        'required' => ':Attribute harus diisi.',
        'email' => 'Isi :attribute dengan format yang benar.',
        'numeric' => ':Attribute harus berupa angka.',
    ]);

    // Proses penyimpanan data jika validasi berhasil
    return redirect()->route('employees.index')->with('success', 'Employee created successfully.');
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
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
        //
    }
}
