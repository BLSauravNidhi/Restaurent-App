<?php

namespace App\Http\Controllers;

use App\Models\RestaurentAdmin;
use Illuminate\Http\Request;

class ManageWorkerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $workers = RestaurentAdmin::where('role','waiter')
            ->orWhere('role','kitchen')
            ->select('id','admin_name','email','role',)->get();

        return view('admin.administrator.manage-staff', ['workers' => $workers]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $formData)
    {
        $workerData = $formData->validate([
            'name' => 'required',
            'email' => 'required | email | unique:restaurent_admins,email',
            'job' => 'required',
            'password' => 'required | confirmed',
        ]);

        $worker = new RestaurentAdmin;

        $worker->admin_name = $workerData['name'] ;
        $worker->email = $workerData['email'] ;
        $worker->role = $workerData['job'] ;
        $worker->password = $workerData['password'] ;

        $worker->save();

        return redirect()->route('manage-worker.index')
            ->with('IdGenrationStatus','New worker id has been created successfully');
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
        $worker = RestaurentAdmin::find($id);
        $worker->delete();

        return redirect()->route('manage-worker.index')
            ->with('DeleteStatus', '"'. $worker->email .'" has been Deleted successfully');
    }
}
