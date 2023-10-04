<?php

namespace App\Http\Controllers;

use Closure;
use Exception;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class AdminController extends Controller
{
    public function create()
    {
        return view('restore');
    }
    public function backup()
    {
        $backup_location = "E:\\backup\\";
        $file_name = date("Ymd") . "_backup.sql";
        $location = $backup_location . $file_name;
        exec("C:\\xampp\\mysql\\bin\\mysqldump.exe -uroot cpms >" . $location);
        toast('Success backup' . $backup_location, 'success');
        return redirect()->back();
    }
    public function restores(Request $request)
    {
        if (!empty($request->database_path)) {
            try {
                exec("C:\\xampp\\mysql\\bin\\mysql -uroot cpms < E:\\backup\\" . $request->database_path);
            } catch (Exception $e) {
                toast('Error restore' . $e, 'error');
            }
            toast('Success restore' . $request->database_path, 'success');
            return view('dashboard');
        } else {
            toast('Error restore', 'error');
            return redirect()->back();
        }
    }
}
