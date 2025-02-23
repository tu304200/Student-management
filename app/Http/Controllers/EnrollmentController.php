<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Enrollment;
use Illuminate\View\View;
class EnrollmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        $enrollments = Enrollment::all();
        return view('enrollments.index')->with('enrollments', $enrollments);
    }

   
    public function create()
    {
          $enrollments = Enrollment::all();
        // return view('enrollments.index')->with('enrollments', $enrollments);
   
         return view('enrollments.create');

    }

  
    public function store(Request $request)
    {
        $input = $request->all();
    Enrollment::create($input);
    return redirect('enrollments')->with('flash_message','Enrollment Added!');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
                $enrollments = Enrollment::find($id);
        return view('enrollments.show')->with('enrollments', $enrollments);
  
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $enrollments = Enrollment::find($id);
        return view('enrollments.edit')->with('enrollments', $enrollments);
    
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $enrollments = Enrollment::find($id);
    $input = $request->all();
    $enrollments->update($input);
    return redirect('enrollments')->with('flash_message', 'Enrollment Updated!');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        
    Enrollment::destroy($id);
    return redirect('enrollments')->with('flash_message', 'Enrollment deleted!');

    }
}
