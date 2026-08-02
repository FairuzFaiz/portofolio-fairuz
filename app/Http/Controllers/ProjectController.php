<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class ProjectController extends Controller
{
    public function home()
    {
        $projects = Project::whereIn('title', ['UniEarn Platform', 'Sistem Informasi PT Katiga Veritas', 'Luxure Personalization Programme'])->get();
        return view('home', compact('projects'));
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }

    public function index()
    {
        $projects = Project::all();
        return view('portfolio', compact('projects'));
    }

    /**
     * Menampilkan detail project tertentu untuk pengunjung.
     */
    public function show($id)
    {
        $project = Project::find($id);
        
        // Opsional: Jika project tidak ditemukan, tampilkan error 404
        if (!$project) {
            abort(404);
        }

        return view('project-detail', compact('project'));
    }

    // ================= ADMIN =================

    public function admin()
    {
        $projects = Project::all();
        return view('admin.index', compact('projects'));
    }

    public function create()
    {
        return view('admin.create');
    }

    public function store(Request $request)
    {
        $data = $request->all();

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time().'.'.$file->getClientOriginalExtension();
            $file->move(public_path('uploads'), $filename);
            $data['image'] = $filename;
        }

        Project::create($data);

        return redirect('/admin');
    }

    public function edit($id)
    {
        $project = Project::find($id);
        return view('admin.edit', compact('project'));
    }

    public function update(Request $request, $id)
    {
        $project = Project::find($id);
        $data = $request->all();

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time().'.'.$file->getClientOriginalExtension();
            $file->move(public_path('uploads'), $filename);
            $data['image'] = $filename;
        }

        $project->update($data);

        return redirect('/admin');
    }

    public function delete($id)
    {
        Project::destroy($id);
        return redirect('/admin');
    }
}