<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use App\User;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */

    public function __construct() {
       $this->middleware('auth');
    }

    public function get_home()
    {
      $user = \Auth::user();
      return view('user.index', ['user' => $user]);
    }

    public function post_home(Request $request) {
      if ($request->field == 'email') {
        $oldemail = $request->data1;
        $email = $request->data2;
        $user = User::where('email', $oldemail)->limit(1)->update(['email' => $email]);
        $user = User::where('email', $email)->get();
        $user = \Auth::user();
        return view('user.index', ['user' => $user, 'message' => 'Updated Email!']);
      } elseif ($request->field == 'avatar') {
        return $request->data; // image
      } elseif ($request->field == 'address') {
        return $request->data1;
        return $request->data2;
        return $request->data3;
        return $request->data4;
      } elseif ($request->field == 'phones') {
        return $request->data1;
        return $request->data2;
        return $request->data3;
      } elseif ($request->field == 'social') {
        return $request->data;
      } else {
        return View('errors.404');
      }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
