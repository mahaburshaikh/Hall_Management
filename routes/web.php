<?php



Route::group(['namespace'=>'User'], function () {
	Route::get('/','HomeController@index')->name('index');

	Route::get('/session','HomeController@session')->name('session');

	Route::get('/employee','UserEmployeeController@index')->name('employee');
	Route::get('/employee_details/{id}','UserEmployeeController@employee_details')->name('employee_details');

	Route::get('/provost','UserProvostController@index')->name('provost');
	Route::get('/provost_details/{id}','UserProvostController@provost_details')->name('provost_details');
	
	Route::get('/provostmessagedetails','HomeController@msg_details')->name('provostmessagedetails');
	Route::get('/halldetails','HomeController@hall_details')->name('halldetails');
	Route::get('/noticedetails/{id}','HomeController@notice_details')->name('noticedetails');
	//Route::get('/notice','UserNoticeController@index')->name('notice');

	Route::get('/student/{session}','HomeController@session_student')->name('session_student');
	Route::get('/student_details/{student_id}','HomeController@student_details')->name('student_details');

	Route::get('/{short_name}/{id}/student','HomeController@faculty_student')->name('faculty_student');
	Route::get('/student-list/{block}/{room}','HomeController@room_student')->name('room_student');

	Route::get('/room','RoomController@room')->name('room');
	Route::get('/roomlist/{block}','RoomController@room_list')->name('room_list');
	Route::get('/roomdetails/{id}','RoomController@room_details')->name('room_details');
 });


Route::group(['namespace'=>'Admin'], function() {
	Route::get('admin/home','HomeController@index')->name('admin.home');
	
	Route::resource('admin/student','StudentController');
	Route::resource('admin/room','RoomController');
	Route::resource('admin/session','SessionController');
	Route::resource('admin/faculty','FacultyController');
	Route::resource('admin/employee','EmployeeController');
	Route::resource('admin/department','DepartmentController');
	Route::resource('admin/provost','ProvostController');
	Route::resource('admin/payment','PaymentController');
	Route::resource('admin/notice','NoticeController');
	Route::resource('admin/admin','AdminController');
	Route::resource('admin/complain','ComplainController'); 

 
	//admin-login
	Route::get('admin-login', 'Auth\LoginController@showLoginForm')->name('admin.login');
	Route::post('admin-login', 'Auth\LoginController@login')->name('login'); 
	Route::post('admin-logout', 'Auth\LoginController@logout')->name('admin.logout');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/comment', 'User\CommentController@comment')->name('submitMessage');
Route::get('/admin/pdf', 'Admin\PaymentController@pdftest');
Route::post('/search', 'User\HomeController@searchQuery')->name('searchQuery');

// Route::get('/show',function(){ 
// 	return view('admin.payment.pdfdownload')->name('pdf');
// });