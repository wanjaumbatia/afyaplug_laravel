<?php

namespace App\Http\Controllers;

use App\Models\Education;
use App\Models\Experience;
use App\Models\StaffProfile;
use Illuminate\Http\Request;

class StaffController extends Controller
{
    public function open_list()
    {
        $staff = StaffProfile::where('employment_status', 'Open')->get();
        return view('users.staff.open', ['staff' => $staff]);
    }

    public function pending_list()
    {
        $staff = StaffProfile::where('employment_status', 'Pending')->get();
        return view('users.staff.pending', ['staff' => $staff]);
    }

    public function pending_profile($id)
    {
        $profile = StaffProfile::where('id', $id)->first();
        $education = Education::where('staff_profile_id', $profile->id)->get();
        $experience = Experience::where('staff_profile_id', $profile->id)->get();
    }
}
