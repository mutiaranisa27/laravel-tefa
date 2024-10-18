<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use App\Models\User;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Db;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facedes\Hash;

class SiswaController extends Controller
{
    public function index(): view
    {
$siswas = DB::table('siswas') 
->join('users','siswa.id_user','-','users.id')
->select(
    'siswas.*',
    'user.name',
    'user.email'
)
->paginate(10);
return view('admin.siswa.index', compact('siswas'));
    }
    public function create():view
    {
        return view('admin.siswa.create');
    }
}
