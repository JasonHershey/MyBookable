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
      $user = \Auth::user();
      if ($request->field == 'email') {
        $oldemail = $request->data1;
        $email = $request->data2;
        User::where('email', $oldemail)->limit(1)->update(['email' => $email]);
        $user = \Auth::user();
        return view('user.index', ['user' => $user, 'message' => 'Updated Email!']);
      } elseif ($request->field == 'avatar') {

        $image = $request->data;
        $name = $user->username;

        if ($request->file('image')->isValid()) {
          $request->file('image')->move('users/', $user->username.'.png');
          return view('user.index', ['user' => $user, 'message' => 'Updated Avatar!']);
        } else {
          return view('user.index', ['user' => $user, 'message' => 'Failed to update Avatar... Please try again in a few minutes.']);
        }
      } elseif ($request->field == 'address') {
        $email = $user->email;
        User::where('email', $email)->limit(1)->update([
          'address' => $request->data1,
          'city' => $request->data2,
          'state' => $request->data3,
          'zip' => $request->data4,
        ]);
        return view('user.index', ['user' => $user, 'message' => 'Updated Address!']);
      } elseif ($request->field == 'phones') {
        $email = $user->email;
        User::where('email', $email)->limit(1)->update([
          'phones' => $request->data1
        ]);
        return view('user.index', ['user' => $user, 'message' => 'Updated Phone numbers!']);
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
