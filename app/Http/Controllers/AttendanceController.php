<?php

namespace App\Http\Controllers;

use App\Models\Attendance;
use Illuminate\Http\Request;

class AttendanceController extends Controller
{
    //index
    public function index(Request $request)
    {
        $attendances = Attendance::with('user')
            ->when($request->input('namae'), function ($query, $name) {
                $query->whereHas('user', function ($query) use ($name) {
                    $query->where('name', 'like', "%.$name.%");
                });
            })->orderBy('id', 'Desc')->paginate(10);

        return view('pages.absensi.index', compact('attendances'));
    }
}
