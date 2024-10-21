<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Review;
use App\Models\Session;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;


class AdminDashController extends Controller
{
    public function index(){
        $users = User::latest()->paginate(5);
        $reviews = Review::latest()->take(5)->get();

        if(Auth::check()){
            if(Auth::user()->usertype=='user'){
                return redirect('/home');
            }
        } else {
                return redirect('/login');
        }
       
        return view('dashboard', compact('users', 'reviews'));
    }

    public function addUserPage(){
        return view('add-user');
    }   

    public function newUser(Request $request) {
        $formFields = $request->validate([
            'name' => ['required', 'min:5', Rule::unique('users', 'name')],
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'password' => ['required', 'min:8'],
            'usertype' => 'required',
            'address' => 'required',
            'age' => 'required',
            'phone' => 'required',
            'contract' => 'required',
        ]);

        // Check if the address is less than 5 characters
    if (strlen($formFields['address']) < 5) {
        return redirect('add-user')->with('error', 'Address must be at least 5 characters long.');
    }
    // if (strlen($formFields['password']) < 5) {
    //     return redirect('add-user')->with('error1', 'Phone number must be between 11 digits.');
    // }
        // if(2 < 5){
        //     return redirect('add-user')->with('error1', 'Phone number must be between 11 digits.');
        // }
        // if(2 < 5){
        //     return redirect('add-user')->with('error2', 'Password must be at least 8 characters.');
        // }
        // if(2 < 5){
        //     return redirect('add-user')->with('error3', 'Invalid email format. Please include an "@" and a domain.');
        // }

        $formFields['password'] = bcrypt($formFields['password']);
        User::create($formFields);

        return redirect('dashboard')->with('notification', 'You successfully created a user account for, ' . $formFields['name']);
    }

    public function editUser(User $user){
        return view('edit-user', ['user' => $user]);
    }
    
    public function updateUserChanges(User $user, Request $request){
        
        $formFields = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'address' => 'required',
            'age' => 'required',
            'phone' => 'required',
            'contract' => 'required',
        ]);

        $user->update($formFields);
        return redirect('/manage-user')->with('notification', 'You successfully updated the user account, ' . $formFields['name']);
    }

    public function deleteUser(User $user){
        $user->delete();
        return redirect('manage-user')->with('notification', 'You successfully deleted the user account, ' . $user['name']);
    }
    
    
    public function manageUserPage()
    {
        $users = User::where('usertype', 'user')->paginate(5);

        return view('manage-user', ['users' => $users]);
    }

    public function createdAccountsPage()
    {
        $users = User::latest()->get();
        return view('created-accounts', ['users' => $users]);
    }

    public function userActivityPage()
    {
        $sessions = Session::whereNotNull('user_id')->get();
        return view('user-activity',['sessions' => $sessions]);
    }

    public function manageReviewsPage()
    {
        $reviews = Review::latest()->paginate(5);
        return view('manage-reviews',['reviews' => $reviews]);
    }

   
}
