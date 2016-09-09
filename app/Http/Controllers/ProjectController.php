<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Project;

//use App\Http\Requests;

class ProjectController extends Controller {

    public function NewProject(Request $request) {

//        dd($request->get('project-team'));
        $project = new Project;
        $project->title = $request->get('project-name');
        $project->category = $request->get('project-category');
        $project->start_date = $request->get('project-start-date');
        $project->end_date = $request->get('project-end-date');
//        $project->project_client = $request->get('');
        $project->description = $request->get('project-description');
        $project->team = $request->get('project-team');
        $project->host_url = $request->get('project-host-url');
        $project->host_user = $request->get('project-host-user');
        $project->host_pass = $request->get('project-host-pass');
        $project->ftp_url = $request->get('project-ftp-url');
        $project->ftp_user = $request->get('project-ftp-user');
        $project->ftp_pass = $request->get('project-ftp-pass');
        $project->save();
        return redirect()->route('SU-Projects');
    }

    public function ViewAll() {
        $data = DB::table('projects')->get();
        return view('SuperUser.Project.projects', compact('data'));
    }

    public static function ViewProject($id) {
        $Project = DB::table('projects')->where('id', '=', $id)->get();
        return view('SuperUser.project.project', compact('Project'));
    }

}
