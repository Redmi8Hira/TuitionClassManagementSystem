<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\OnlineClass;
use App\Models\TeacherCourse;
use App\Mail\OnlineClassScheduleEmail;
use Illuminate\Support\Facades\Mail;

use Illuminate\Support\Facades\Auth;
class OnlineClassController extends ParentController
{


    protected $online_class;

        public function index(){

            $user = Auth::user();

            if($user->can('view_online_class'))
            {
                // $online_classes = OnlineClass::all();

                // return view('pages.class_manager.post_login.online-class-home',compact('online_classes'));

                // return view('pages.class_manager.post_login.online-class-home');

                // $online_classes = OnlineClass::with('teacher_courses')->get();
                // return view('pages.class_manager.post_login.online-class-home', compact('online_classes'));

                // $online_classes = OnlineClass::with('teacherCourse')->get();
                // return view('pages.class_manager.post_login.online-class-home', compact('online_classes'));





                        $online_classes = OnlineClass::with('teacher_course.course', 'teacher_course.teacher')->get();
                        return view('pages.class_manager.post_login.online-class-home', compact('online_classes'));



            }else{

                return redirect()->back();

             }

    }

        //create online class
        public function store(Request $request)
        {

            $user = Auth::user();

            if($user->can('create_online_class'))
            {
                // Validate inputs
                $request->validate([

                    'title' => 'required',
                    'teacher_courses' => 'required',
                    'about_class' => 'required',
                    // 'date' => 'required',
                    // 'time' => 'required',
                ]);

                //dd($request);

                // Save the student details to the database
                $online_class = new OnlineClass();
                $online_class->title = $request->input('title');
                $online_class->about_class = $request->input('about_class');
                $online_class->date = $request->input('date');
                $online_class->time = $request->input('time');


                //dd('online_class');
                $teacher_course_id = $request->input('teacher_courses');
                $teacher_course = TeacherCourse::find($teacher_course_id);


                $teacher_course->online_classes()->save($online_class);

                $online_class->save();
                //dd('online_class');



                //  // Send email to teacher    #Ruki
                // $teacher = $teacherCourse->teacher; // Retrieve the teacher
                // Mail::to($teacher->email)->send(new OnlineClassScheduleEmail($onlineClass));

                // // Send email to students     #Ruki
                // foreach ($students as $student) {
                // Mail::to($student->email)->send(new OnlineClassScheduleEmail($onlineClass));
                // }



                // Send email
                $teacher = $teacher_course->teacher; // Assuming you have this relationship
                $course = $teacher_course->course;   // Assuming you have this relationship

                $emailData = [
                    'title' => $online_class->title,
                    'about_class' => $online_class->about_class,
                    'date' => $online_class->date,
                    'time' => $online_class->time,
                    'teacherName' => $teacher->first_name, // Update with the actual attribute name
                    'courseName' => $course->subject_name,        // Update with the actual attribute name
                ];

                Mail::to($teacher->email)->send(new OnlineClassScheduleEmail($emailData));


                // Other logic or redirection after successful registration
                return redirect()->back();



             }else{

                return redirect()->back();

             }
         }


         //delete online class
         public function remove($id)
        {
            $user = Auth::user();

            if ($user->can('delete_online_class')) {

                $online_classes = OnlineClass::findOrFail($id);
                // Delete the online class
                $online_classes->delete();

                return redirect()->back()->with('success', 'Announcement deleted successfully.');
            } else {
                return redirect()->back();
            }
        }



        // //edit online class
        // public function update(Request $request,$online_class_id ){

        //     $user = Auth::user();

        //     //if ($user->can('update_online_class')) {

        //     $teacher = OnlineClass::findOrFail($online_class_id);



        //         $online_class->title = $request->input('title');
        //         $online_class->about_class = $request->input('about_class');
        //         $online_class->date = $request->input('date');
        //         $online_class->time = $request->input('time');
        //         $online_class->save();
        //         // Sync the selected courses with the teacher
        //         $teacher_course_id = $request->input('teacher_courses');

        //         $teacher->save();



        //         // Redirect back with a success messag`e
        //         return redirect()->back()->with('success', 'Schedule updated successfully!');

        //     //}





    //     public function edit(Request $request, $id)
    // {
    //     // Validate the form data
    //     $validatedData = $request->validate([
    //         'title' => 'required|string|max:255',
    //         'teacher_courses' => 'required|exists:teacher_courses,id', // Assuming teacher_courses is the table name
    //         'date' => 'required|date',
    //         'time' => 'required',
    //         'about_class' => 'nullable|string',
    //     ]);

    //     // Find the online class schedule to edit
    //     $onlineClass = OnlineClass::findOrFail($id);

    //     // Update the online class schedule with the validated data
    //     $onlineClass->title = $validatedData['title'];
    //     $onlineClass->teacher_course_id = $validatedData['teacher_courses'];
    //     $onlineClass->date = $validatedData['date'];
    //     $onlineClass->time = $validatedData['time'];
    //     $onlineClass->about_class = $validatedData['about_class'];
    //     $onlineClass->save();

    //     // Redirect back or to a specific route after editing
    //     return redirect()->route('dashboard')->with('success', 'Online class schedule updated successfully.');
    // }






}
