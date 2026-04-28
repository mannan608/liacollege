<?php

namespace App\Http\Controllers;

use App\Models\RplLead;
use App\Http\Controllers\Controller;
use App\Http\Requests\RplLeadStoreRequest;
use App\Http\Requests\RplLeadUpdateRequest;

class RplLeadController extends Controller
{
    /**
     * Display a listing of the resource.
     */
   public function index()
    {
        $leads = RplLead::latest()->paginate(20);

        return view('admin.rpl-leads.index', compact('leads'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.rpl-leads.create');
    }

    /**
     * Store a newly created resource in storage.
     */
   public function store(RplLeadStoreRequest $request)
    {
        $lead = RplLead::create($request->all());

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
        return view('admin.rpl-leads.show', compact('rplLead'));
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
