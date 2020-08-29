<?php

namespace App\Http\Controllers;

use App\Forms\UserForm;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Kris\LaravelFormBuilder\FormBuilder;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('user.index', [
            'users' => User::all()
        ]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(FormBuilder $formBuilder)
    {
        $form = $formBuilder->create(\App\Forms\UserForm::class, [
            'method' => 'POST',
            'url' => route('user.store')
        ]);

        return view('user.create', compact('form'));
  
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FormBuilder $formBuilder)
    {

        $form = $formBuilder->create('App\Forms\UserForm', [
            'method' => 'POST',
            'url' => route('user.store')
        ]);

        if (!$form->isValid()) {
            return redirect()->back()->withErrors($form->getErrors())->withInput();
        }

        $user = User::create($form->getFieldValues());
        
        return redirect()->route('user.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('user.show', ['user' => User::findOrFail($id), 'id' => $id]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id, FormBuilder $formBuilder)
    {
        $userfirst = User::findOrFail($id);

        $user['first_name'] = $userfirst->first_name;
        $user['last_name'] = $userfirst->last_name;
        $user['email'] = $userfirst->email;
        $user['phone'] = $userfirst->phone;
        $user['address'] = $userfirst->address;
        $user['postal_code'] = $userfirst->postal_code;
        $user['town'] = $userfirst->town;
        $user['password'] = $userfirst->password;
        $user['birthdate'] = Carbon::parse($userfirst->birthdate)->format('Y-m-d');
    
        
        $form = $formBuilder->create('App\Forms\UserForm', [
            'model' => $user,
            'method' => 'POST',
            'url' => route('user.update',  $id)
        ]);

        return view('user.edit', compact('form'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param    $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id )
    {
       // dd($request->request->getFieldValues());

        $user = User::findOrFail($id);

        $user->update([
            'first_name' => $request->get('first_name'),
            'last_name' => $request->get('last_name'),
            'email' => $request->get('email'),
            'phone' => $request->get('phone'),
            'address' => $request->get('address'),
            'postal_code' => $request->get('postal_code'),
            'town' => $request->get('town'),
            'password' => $request->get('password'),
            'birthdate' => Carbon::parse($request->get('birthdate'))->format('Y-m-d')
        ]);

        return redirect()->route('user.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $user = User::where('id',$id)->delete();

        return redirect()->route('user.index');
    }
}
