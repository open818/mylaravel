<?php

namespace App\Http\Controllers;

use App\Module;

class ModuleController extends Controller
{
    public function preview($base_id)
    {
        $id_str = base64_decode($base_id);
        $module_id = substr($id_str, 3);
        $dir_id = $base_id;
        $module_path = "/modules/{$dir_id}/";
        return view('preview', compact("module_path", "dir_id"));
    }

    public function index()
    {
        $data_list = Module::with("category")->paginate(2);
        return view('module.list', compact("data_list"));
    }
}
