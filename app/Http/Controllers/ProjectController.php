<?php
namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    // Muestra la cara pública (el portfolio)
    public function index()
    {
        $projects = Project::all();
        return view('portfolio', compact('projects')); // resources/views/portfolio.blade.php
    }

    // Muestra la cara privada (el listado para editar/borrar)
    public function adminIndex()
    {
        $projects = Project::all();
        return view('admin.dashboard', compact('projects')); // resources/views/admin/dashboard.blade.php
    }
}