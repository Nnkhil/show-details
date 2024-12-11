<?php

namespace App\Console\Commands;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schedule;
use Illuminate\Console\Command;
use Carbon\Carbon;
use App\Models\Employee; 
use App\Models\Department; 
class DeleteUsers extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:delete-users';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        //Employee::whereDate("created_at",\Carbon::now())->delete();
        // DB::table('employees')
        // ->join('departments', 'employees.id', '=', 'departments.employee_id')
        // ->select('employees.*', 'departments.department_name', 'departments.status')
        // ->where('departments.status', '=', 2)
        // ->whereDate('employees.created_at', '<', '2024-12-05 12:23:13')
        // ->delete();
        //Carbon::now();

        // Employee::with('department')->whereHas('department', function ($query) { $query->where('status', 2)
        //       ->where('created_at', '<', Carbon::today());})
        //        ->delete();


        Employee::with('department')->whereHas('department', function ($query) { $query->where('status', 2)
            ->where('created_at', '<', Carbon::today());})
            ->take(1)
            ->delete();
        
    //    $post=Employee::with('department')->whereHas('department', function ($query) { $query->where('status', 2)
    //        ->where('created_at', '<', Carbon::today());})
    //        ->take(2)->get();

    //     foreach($post as $posts){
    //         $posts->delete();
    //         $this->info('post deleted successfully');
    //     }


//   Employee::with('department')->whereHas('department', function ($query) { $query->where('status', 2)
//         ->where('created_at', '<', Carbon::today()->setTime(11, 0, 0));})
//         ->take(1)
//         ->delete();
    }
}
