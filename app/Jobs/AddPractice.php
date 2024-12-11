<?php

namespace App\Jobs;
use Illuminate\Support\Facades\DB;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;
use App\Http\Controllers\employee_controller;
use Carbon\Carbon;
use App\Models\Employee; 
use App\Models\Department; 

class AddPractice implements ShouldQueue
{
    use Queueable;

    /**
     * Create a new job instance.
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        Employee::with('department')->whereHas('department', function ($query) { $query->where('status', 2)
            ->where('created_at', '<', Carbon::today());})
            // ->take(1)
            ->delete();



            
        // foreach ($this->data as $employee) {
           
        //     if ($employee->department) {  
        //         if ($employee->department->status == 2 && $employee->department->created_at < Carbon::today()) {
        //             $employee->delete();
        //         }
        //     }
        // }
    }
}
