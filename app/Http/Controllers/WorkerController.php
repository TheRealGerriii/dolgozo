<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class WorkerController extends Controller
{
    public function addWorker() {
        
        return view("add-worker");
    }
    public function storeWorker( Request $request) {
        
        $worker = new Employee;

        $worker->name = $request->name;
        $worker->city = $request->city;
        $worker->borndate = $request->borndate;
        $worker->salary = $request->salary;

        $worker->save();
        return redirect("/api/all");
    }
    public function allWorker() {

        $workers = Employee::all();

        return view( "list-worker", ["workers" => $workers]);
    }
}
