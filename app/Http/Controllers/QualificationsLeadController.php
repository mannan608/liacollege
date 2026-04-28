<?php

namespace App\Http\Controllers;

use App\Models\QualificationsLead;
use App\Http\Controllers\Controller;
use App\Http\Requests\QualificationsLeadStoreRequest;
use Illuminate\Support\Facades\Mail;

class QualificationsLeadController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $qualificationleads = QualificationsLead::latest()->paginate(20);

        return view('backend.qualification-lead.index', compact('qualificationleads'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('meta-service.component.meta-page-course-card');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(QualificationsLeadStoreRequest $request)
    {


        $lead = QualificationsLead::create($request->validated());

        $message = "
            New Qualifications Lead Submitted

            Name: {$lead->name}
            Phone: {$lead->phone}
            Email: {$lead->email}
            Course: {$lead->course}

           $lead->availability?->format('d M Y h:i A')
            
            ";

        Mail::raw($message, function ($mail) {
            $mail->to(env('ADMIN_EMAIL'))
                ->subject('New Qualifications Lead');
        });

        return response()->json([
            'status'  => true,
            'message' => 'Lead Submitted Successfully',
            'data'    => $lead
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        // No show page for individual leads as per current requirements
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit()
    {
       // No edit page for leads as per current requirements
    }

    /**
     * Update the specified resource in storage.
     */
    public function update()
    {
       // No update functionality for leads as per current requirements
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(QualificationsLead $rplLead)
    {
        $rplLead->delete();

        return redirect()
            ->route('admin.rpl-leads.index')
            ->with('success', 'Deleted Successfully');
    }
}
