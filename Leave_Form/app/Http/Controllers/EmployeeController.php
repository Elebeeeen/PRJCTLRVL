<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employees;
use Sabberworm\CSS\Property\Import;
use Illuminate\SUpport\Facades\Validator;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $leave_form = Employees::get();
        return view('leaveForm.list', compact(['leave_form']));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {    
        
        return view('leaveForm.form');

    
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $message_error = [
            'office.required' => 'Please state your Department Office',
            'last_name.required' => 'Please indicate your Last Name',
            'first_name.required' => 'Please indicate your First Name',
            'middle_initial.required' => 'Please indicate your Middle Initial',
            'employee_number.required' => 'Please indicate your Employee Number',
            'position.required' => 'Please indicate your Position',
            'employee_number.required' => 'Please indicate your Employee Number',
            'salary.required' => 'Please indicate your Salary',
            'email.required' => 'Please indicate your E-mail',
            'type_of_leave.required' => 'Please indicate your Type of Leave',
            'date.required' => 'Please indicate your Date',
            'no_working_days.required' => 'Please indicate your Number Working Days',
            'inclusive_dates.required' => 'Please indicate your Inclusive Dates',
            'details.required' => 'Please fill the addtional Details',
            'specification.required' => 'Please specify your Specification',
            'approver.required' => 'Please indicate your Approver',
            'commutation.required' => 'Please indicate your Commutation',
            

        ];

        $validator = Validator::make($request->all(), [
            'office' => 'required|max:25',
            'last_name' => 'required|max:25',
            'first_name' => 'required|max:25',
            'middle_initial' => 'required|max:1',
            'employee_number' => 'required|numeric|max:99999',
            'salary' => 'required|numeric|max:99999',
            'email' => 'required',
            'type_of_leave' => 'required',
            'date' => 'required',
            'num_working_days' => 'required|numeric',
            'details' => 'required',
            'specification' => 'required',
            'approver' => 'required',
            'commutation' => 'required',
            
        ], $message_error);

        if ($validator->passes()) {
            $lf_employees = Employees::create([
                'office'=>$request->office,
                'last_name'=>$request->last_name,
                'first_name'=>$request->first_name,
                'middle_initial'=>$request->middle_initial,
                'employee_number'=>$request->employee_number,
                'position'=>$request->position,
                'salary'=>$request->salary,
                'email'=>$request->email,
                'type_of_leave'=>$request->type_of_leave,
                'date'=>$request->date,
                'num_working_days'=>$request->num_working_days,
                'inclusive_dates'=>$request->inclusive_dates,
                'details'=>$request->details,
                'specification'=>$request->specification,
                'commutation'=>$request->commutation,
                'approver'=>$request->approver
            ]);
            return response()->json([$lf_employees, "success" => true, 'message' => 'Successfully added']);
        } else {
            return response()->json(["status" => false, "errors" => $validator->errors()->all()]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

        $lf_employees = Employees::find($id);
        return view('leaveform.view', compact(['lf_employees']));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
