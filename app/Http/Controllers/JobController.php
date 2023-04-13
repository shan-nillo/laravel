<?php

namespace App\Http\Controllers;
use App\Models\Job;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\File;
use Illuminate\Contracts\Session\Session;

class JobController extends Controller
{
    /**
     * Show all job postings
     */

    public function index(){
        return view('jobs.jobs', [
            'jobs' => Job::latest()->filter(request(['tag','search']))->paginate(5)
        ]);
    }

    /**
     * Show all job postings
     * @param Job
     */
    public function show(Job $job){
        return view('jobs.job', [
            'job' => $job
        ]);
    }

    public function create(){
        return view('jobs.create');
    }

    public function store(Request $request){
        $formContents = $request->validate([
            'title' => 'required',
            // 'company' => 'required|unique:jobs'
            'company' => ['required', Rule::unique('jobs','company')],
            'location' => 'required',
            'website' => 'required',
            'email' => ['required','email'],
            'tags' => 'required',
            'description' => 'required'
        ]);

        if($request->hasFile('logo')){
            $formContents['logo'] = $request->file('logo')->store('logos','public');
        }
        
        Job::create($formContents);

        return redirect('/')->with('message','New job posted successfully!');
    }

    public function edit(Job $job){
        return view('jobs.edit', [
            'job' => $job
        ]);
    }

    public function update(Request $request, Job $job){
        $formContents = $request->validate([
            'title' => 'required',
            // 'company' => 'required|unique:jobs'
            'company' => 'required',
            'location' => 'required',
            'website' => 'required',
            'email' => ['required','email'],
            'tags' => 'required',
            'description' => 'required'
        ]);

        if($request->hasFile('logo')){
            $formContents['logo'] = $request->file('logo')->store('logos','public');
                if(File::exists('storage/'.$job->logo)){
                    File::delete('storage/'.$job->logo);
                }
        }
        
        $job->update($formContents);

        return redirect('/')->with('message','Updated job posted successfully!');
    }

    public function destroy(Job $job){
        $job->delete();
        return redirect('/')->with('message','Deleted job posted successfully!');
    }
}
