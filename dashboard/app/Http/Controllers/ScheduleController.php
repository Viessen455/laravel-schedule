<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\ScheduleMaintenance;

use Yajra\DataTables\DataTables;

class ScheduleController extends Controller
{
    public function index()
    {
        return view('schedule');
    }

    public function getSchedules(Request $request)
    {
        if ($request->ajax()) {
            $now = now();

            $data = ScheduleMaintenance::select(['id', 'type', 'mt_date', 'status', 'description', 'created_by']);

            return DataTables::of($data)
                ->editColumn('status', function ($row) use ($now) {
                    return $row->mt_date < $now ? 'Overdue' : 'On Schedule';
                })
                ->make(true);
        }
    }

    public function countSchedules(Request $request)
    {
        if ($request->ajax()) {
            $now = now();

            $overdueCount = ScheduleMaintenance::where('mt_date', '<', $now)->count();
            $allschedule = ScheduleMaintenance::count();
            return response()->json(['overdue_count' => $overdueCount, 'all_schedule' => $allschedule]);
        }
    }
}
