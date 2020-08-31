<?php

namespace App\Http\Controllers\WebController\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function siteSetting(Request $request)
    {
        $permissions = Permission::orderBy('id', 'DESC')->get();
        return view('backend.sitesetting.sitesetting', compact('permissions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createSetting()
    {
        return view('backend.sitesetting.createSetting');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function customerTestmonial()
    {
        return view('backend.testmonial.testmonial');
    }

    public function createcustomerTestmonial()
    {
        return view('backend.testmonial.testmonialCreate');
    }

    public function emailTemplate()
    {
        return view('backend.emailtemplate.emailtemplate');
    }

    public function createTemplate()
    {
        return view('backend.emailtemplate.createTemplate');
    }

    public function mcqList()
    {
        return view('backend.mcqlist.mcqlist');
    }

    public function createMcqList()
    {
        return view('backend.mcqlist.createmcqlist');
    }

    public function competitionlist()
    {
        return view('backend.mcqlist.competitionList');
    }

    public function suscompetitionlist()
    {
        return view('backend.mcqlist.suscompetitionlist');
    }
}
