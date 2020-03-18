<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Route::get('/', function () {
    return view('welcome');
});
*/
Route::get('/','HomeController@index');
Route::get('/about-aub','HomeController@about_aub');
Route::get('/contact','HomeController@contact');


Route::get('/login','LoginController@index');
Route::post('/login-check', 'LoginController@LoginCheck');
Route::get('/deshboard', 'AdminController@index');
Route::get('/logout', 'AdminController@logout');

//route for slider

Route::get('/add-slider', 'SliderController@add_slider');
Route::post('/save-slider', 'SliderController@save_slider');
Route::get('/manage-slider', 'SliderController@manage_slider');
Route::get('/delete-slider/{id}', 'SliderController@delete_slider');
Route::get('/edit-slider/{id}', 'SliderController@edit_slider');
Route::post('/update-slider/', 'SliderController@update_slider');

//route for admin
Route::get('/add-admin', 'AdminController@add_admin');
Route::post('/save-admin', 'AdminController@save_admin');
Route::get('/manage-admin', 'AdminController@manage_admin');
Route::get('/unpublish-admin/{id}', 'AdminController@unpublish_admin');
Route::get('/publish-admin/{id}', 'AdminController@publish_admin');
Route::get('/delete-admin/{id}', 'AdminController@delete_admin');
Route::get('/edit-admin/{id}', 'AdminController@edit_admin');
Route::post('/update-admin/', 'AdminController@update_admin');
Route::post('/search', 'AdminController@search');
//Route::get('/live_search/action', 'AdminController@action')->name('live_search.action');

//route for teacher
Route::get('/add-teacher', 'TeacherController@add_teacher');
Route::post('/save-teacher', 'TeacherController@save_teacher');
Route::get('/manage-teacher', 'TeacherController@manage_teacher');
Route::get('/unpublish-teacher/{id}', 'TeacherController@unpublish_teacher');
Route::get('/publish-teacher/{id}', 'TeacherController@publish_teacher');
Route::get('/delete-teacher/{id}', 'TeacherController@delete_teacher');
Route::get('/edit-teacher/{id}', 'TeacherController@edit_teacher');
Route::post('/update-teacher/', 'TeacherController@update_teacher');

Route::get('/teacher-deshboard', 'TeacherController@teacher_deshboard');
Route::get('/teacher-logout', 'TeacherController@teacher_logout');
Route::get('/teacher-make-routine', 'TeacherController@teacher_make_routine');
Route::get('/edit-routine/{id}', 'TeacherController@edit_routine');
Route::post('/update-troutine/', 'TeacherController@update_troutine');
Route::post('/day2-troutine', 'TeacherController@day2_troutine');
Route::get('/teacher-view-routine/routine', 'TeacherController@view_routine');

//route for student
Route::get('/add-student', 'StudentController@add_student');
Route::post('/save-student', 'StudentController@save_student');
Route::get('/manage-student', 'StudentController@manage_student');
Route::get('/unpublish-student/{id}', 'StudentController@unpublish_student');
Route::get('/publish-student/{id}', 'StudentController@publish_student');
Route::get('/delete-student/{id}', 'StudentController@delete_student');
Route::get('/edit-student/{id}', 'StudentController@edit_student');
Route::post('/update-student/', 'StudentController@update_student');


Route::get('/student-deshboard', 'StudentController@student_deshboard');
Route::get('/student-logout', 'StudentController@student_logout');
Route::get('/view-routine/routine', 'StudentController@view_routine');
Route::get('/student-profile', 'StudentController@student_profile');


//route for department
Route::get('/add-department', 'DepartmentController@add_department');
Route::post('/save-department', 'DepartmentController@save_department');
Route::get('/manage-department', 'DepartmentController@manage_department');
Route::get('/unpublish-department/{id}', 'DepartmentController@unpublish_department');
Route::get('/publish-department/{id}', 'DepartmentController@publish_department');
Route::get('/delete-department/{id}', 'DepartmentController@delete_department');
Route::get('/edit-department/{id}', 'DepartmentController@edit_department');
Route::post('/update-department/', 'DepartmentController@update_department');

//route for course
Route::get('/add-course', 'CourseController@add_course');
Route::post('/save-course', 'CourseController@save_course');
Route::get('/manage-course', 'CourseController@manage_course');
Route::get('/unpublish-course/{id}', 'CourseController@unpublish_course');
Route::get('/publish-course/{id}', 'CourseController@publish_course');
Route::get('/delete-course/{id}', 'CourseController@delete_course');
Route::get('/edit-course/{id}', 'CourseController@edit_course');
Route::post('/update-course/', 'CourseController@update_course');

//route for Semester
Route::get('/add-semester', 'SemesterController@add_semester');
Route::post('/save-semester', 'SemesterController@save_semester');
Route::get('/manage-semester', 'SemesterController@manage_semester');
Route::get('/delete-semester/{id}', 'SemesterController@delete_semester');
Route::get('/edit-semester/{id}', 'SemesterController@edit_semester');
Route::post('/update-semester/', 'SemesterController@update_semester');

//route for day
Route::get('/add-day', 'DayController@add_day');
Route::post('/save-day', 'DayController@save_day');
Route::get('/manage-day', 'DayController@manage_day');
Route::get('/delete-day/{id}', 'DayController@delete_day');
Route::get('/edit-day/{id}', 'DayController@edit_day');
Route::post('/update-day/', 'DayController@update_day');

//route for time
Route::get('/add-time', 'TimeController@add_time');
Route::post('/save-time', 'TimeController@save_time');
Route::get('/manage-time', 'TimeController@manage_time');
Route::get('/delete-time/{id}', 'TimeController@delete_time');
Route::get('/edit-time/{id}', 'TimeController@edit_time');
Route::post('/update-time/', 'TimeController@update_time');
//route for Section
Route::get('/add-section', 'SectionController@add_section');
Route::post('/save-section', 'SectionController@save_section');
Route::get('/manage-section', 'SectionController@manage_section');
Route::get('/delete-section/{id}', 'SectionController@delete_section');
Route::get('/edit-section/{id}', 'SectionController@edit_section');
Route::post('/update-section/', 'SectionController@update_section');

//route for room
Route::get('/add-room', 'RoomController@add_room');
Route::post('/save-room', 'RoomController@save_room');
Route::get('/manage-room', 'RoomController@manage_room');
Route::get('/unpublish-room/{id}', 'RoomController@unpublish_room');
Route::get('/publish-room/{id}', 'RoomController@publish_room');
Route::get('/delete-room/{id}', 'RoomController@delete_room');
Route::get('/edit-room/{id}', 'RoomController@edit_room');
Route::post('/update-room/', 'RoomController@update_room');

//route for routine

Route::get('/make-routine', 'RoutineController@make_routine');
Route::post('/save-routine', 'RoutineController@save_routine');
//Route::get('/manage-routine', 'RoutineController@manage_routine');
//Route::get('/delete-routine/{id}', 'RoutineController@delete_routine');
//Route::get('/edit-routine/{id}', 'RoutineController@edit_routine');
Route::get('/routine', 'RoutineController@routine');
Route::post('/update-routine/', 'RoutineController@update_routine');

Route::get('/department-wroutine/{id}', 'RoutineController@department_w_routine');

//route for 
