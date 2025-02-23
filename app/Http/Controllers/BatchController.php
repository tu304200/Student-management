<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

use App\Models\Batch;
use App\Models\Course;







class BatchController extends Controller
{
    
    public function index(): View
    {
        $batches = Batch::all();
        return view('batches.index')->with('batches', $batches);
    }


    public function create(): View
    {
        $courses = Course::pluck('name','id');
         return view('batches.create',compact('courses'));
  //       return view('batches.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse

    {

        $input = $request->all();
         $input['course_id'] = $request->input('course_id');
        Batch::create($input);
        return redirect('batches')->with('flash_message','Batch Added!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): View
    {
        $batches = Batch::find($id);
        return view('batches.show')->with('batches', $batches);
    }

    

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): View
    {
         $batches = Batch::find($id);
        return view('batches.edit')->with('batches', $batches);
    
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): RedirectResponse

    {
         $batches = Batch::find($id);
    $input = $request->all();
    $batches->update($input);
    return redirect('batch')->with('flash_message', 'Batch Updated!');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): RedirectResponse

    {
        Batch::destroy($id);
    return redirect('batch')->with('flash_message', 'Batch deleted!');

    }
}
