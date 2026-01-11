<?php

namespace App\Http\Controllers;

use App\Models\Enrollment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class EnrollmentController extends Controller
{
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'age' => 'required|integer|min:5|max:100',
            'country' => 'required|string|max:255',
            'course_interest' => 'required|in:Quran,Islamic Studies,Arabic Language',
            'preferred_schedule' => 'required|in:Morning,Afternoon,Evening,Flexible',
            'experience_level' => 'required|in:Beginner,Intermediate,Advanced',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors()
            ], 422);
        }

        $enrollment = Enrollment::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'age' => $request->age,
            'country' => $request->country,
            'course_interest' => $request->course_interest,
            'preferred_schedule' => $request->preferred_schedule,
            'experience_level' => $request->experience_level,
            'language' => app()->getLocale(),
            'status' => 'pending',
        ]);

        return response()->json([
            'success' => true,
            'message' => app()->getLocale() === 'ar' 
                ? 'تم إرسال طلب التسجيل بنجاح! سنتواصل معك قريباً.' 
                : 'Enrollment submitted successfully! We will contact you soon.',
            'enrollment' => $enrollment
        ], 201);
    }
}
