<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AtomInterest;
use DB;

class InterestPageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $interest = new AtomInterest;


            $interest->investment_category = $request->investment_category;
            $interest->firstname = $request->firstname;
            $interest->secondname = $request->secondname;
            $interest->thirdname = $request->thirdname;
            $interest->email = $request->email;
            $interest->phone = $request->phone;
            $interest->dob = $request->dob;
            $interest->gender = $request->gender;
            $interest->country = $request->country;
            $interest->price = $request->amount;
            $interest->note = $request->note;
            $interest->interest_id = '1234567';

            if($interest->save()){

                    // return view('');

                    session()->flash('Post successfully updated.');
                    notify()->flash('Regstration successfully updated!');
                    //return view('front.index');
                    return redirect()->back();


                    //notify()->success('Hi '.$request->name.', Thanks for registring We will get an email feedback from our support team');


            }


          //  $request->session()->flash('status', 'Task was successful!')


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
}
