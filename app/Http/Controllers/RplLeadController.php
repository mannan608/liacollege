<?php

namespace App\Http\Controllers;

use App\Models\RplLead;
use App\Http\Controllers\Controller;
use App\Http\Requests\RplLeadStoreRequest;
use App\Http\Requests\RplLeadUpdateRequest;
use Illuminate\Support\Facades\Mail;

class RplLeadController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $leads = RplLead::latest()->paginate(20);

        return view('backend.rpl-lead.index', compact('leads'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('meta-service.component.rpllead-form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(RplLeadStoreRequest $request)
    {

        $data = $request->validated();

            // Force default values if missing
            $data['care_role'] = $request->care_role ?? 'no';
            $data['communication'] = $request->communication ?? 'no';
            $data['evidence_ready'] = $request->evidence_ready ?? 'no';
            $data['fast_track'] = $request->fast_track ?? 'no';

            $lead = RplLead::create($data);

        $message = "
            New RPL Lead Submitted

            Name: {$lead->name}
            Phone: {$lead->phone}
            Email: {$lead->email}
            Course: {$lead->course}

            Age: {$lead->age}
            Employment: {$lead->employment_status}
            Experience: {$lead->experience_years}
            Submitted At: {$lead->created_at}
            ";

        Mail::raw($message, function ($mail) {
            $mail->to(env('ADMIN_EMAIL'))
                ->subject('New RPL Lead');
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
    public function show(RplLead $rplLead)
    {
        return view('backend.rpl-lead.show', compact('rplLead'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(RplLead $rplLead)
    {
        return view('admin.rpl-leads.edit', compact('rplLead'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(RplLeadUpdateRequest $request, RplLead $rplLead)
    {
        $rplLead->update($request->validated() + $request->except([
            '_token',
            '_method'
        ]));

        return redirect()
            ->route('admin.rpl-leads.index')
            ->with('success', 'Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(RplLead $rplLead)
    {
        $rplLead->delete();

        return redirect()
            ->route('admin.rpl-leads.index')
            ->with('success', 'Deleted Successfully');
    }
}
