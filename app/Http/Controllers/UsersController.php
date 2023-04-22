<?php

namespace App\Http\Controllers;

use App\Models\EmailMessage;
use App\Models\Role;
use App\Models\SmsMessage;
use App\Models\StaffProfile;
use Illuminate\Http\Request;
use App\Models\User;
use Auth;
use Carbon\Carbon;
use Illuminate\Support\Facades\Log;

class UsersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $users = User::all();
        $roles = Role::all();
        return view('users.index', ['users' => $users, 'roles' => $roles]);
    }

    public function invite(Request $request)
    {
        $user = User::create($request->all());
        $sms = 'Dear ' . $user->name . ', You Afya Plug account has been created, check your mailbox for verification link.';
        //send notifications
        $sms = SmsMessage::create([
            'message' => $sms,
            'phone' => $user->phone,
            'user_id' => $user->id,
            'reference' => 'USER_CREATION'
        ]);

        $email = EmailMessage::create([
            'to' => $user->email,
            'subject' => 'Account Verification',
            'message' => '',
            'user_id' => $user->id,
            'reference' => 'USER_CREATION'
        ]);

        if ($user->role->name == 'Staff') {
            $users = StaffProfile::create([
                'email' => $user->email,
                'phone' => $user->phone,
                'name' => $user->name,
                'user_id' => $user->id,
            ]);
        }

        return redirect()->route('users.index');
    }

    public function change_status($id)
    {
        $user = User::find($id);
        $user->enabled = !$user->enabled;
        $user->locked = !$user->locked;
        $user->save();
        return redirect()->route('users.index');
    }

    public function profile()
    {
        $loggedInUser = auth()->user();
        return view('users.profile', ['user' => $loggedInUser]);
    }

    public function open_list()
    {
        $staff = StaffProfile::where('employment_status', 'Open')->get();
        return view('users.staff.open', ['staff' => $staff]);
    }

    public function update_staff_profile()
    {
        $profile = StaffProfile::where('user_id',  auth()->user()->id)->first();
        return view('users.staff.update_profile', ['profile' => $profile, 'user' => auth()->user()]);
    }

    public function update_staff_profile_details(Request $request)
    {
        if (auth()->user()->id == $request->user_id) {
            $request['date_of_birth'] = strtotime($request->date_of_birth);
            $request['date_of_birth'] = Carbon::createFromTimestamp($request->date_of_birth);
            Log::info($request['date_of_birth']);
            $profile = StaffProfile::where('user_id', $request->user_id)->update($request->all());
            return response()->json(['success' => true]);
        } else {
            return response()->json(['success' => false]);
        }
    }


    public function markNotification($id)
    {
        auth()->user()->notifications
            ->when($id, function ($query) use ($id) {
                return $query->where('id', $id);
            })->markAsRead();

        return redirect()->back();
    }
}
