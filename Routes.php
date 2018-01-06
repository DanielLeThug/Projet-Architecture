<?php

Route::set('add_user', function() {
    AddUser_C::CreateAdminView('AddUser_V');
});

Route::set('view_user', function() {
    ViewUser_C::CreateAdminView('ViewUser_V');
});

Route::set('edit_user', function() {
    EditUser_C::CreateAdminView('EditUser_V');
});

Route::set('edit_lesson', function() {
    EditLesson_C::CreateFormationView('EditLesson_V');
});

Route::set('index.php', function() {
    Index_C::CreateView('Index_V');
});

Route::set('login', function() {
    Login_C::CreateView('Login_V');
});

Route::set('logout', function() {
    Logout_C::CreatePrivateView('Logout_V');
});

Route::set('view_lesson', function() {
    ViewLesson_C::CreatePrivateView('ViewLesson_V');
});

Route::set('add_lesson', function() {
    AddLesson_C::CreateFormationView('AddLesson_V');
});

Route::set('add_lesson_name', function() {
    AddLessonName_C::CreateFormationView('AddLessonName_V');
});

Route::set('validate_payment', function() {
    ValidatePayment_C::CreateFinancialView('ValidatePayment_V');
});

Route::set('validate_documents', function() {
    ValidateDocuments_C::CreatePrivateView('ValidateDocuments_V');
});

Route::set('add_payment', function() {
    AddPayment_C::CreateFinancialView('AddPayment_V');
});

Route::set('upload', function() {
    Upload_C::CreateView('Upload_V');
});

Route::set('download', function() {
    Download_C::CreateView('Download_V');
});

?>
