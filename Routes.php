<?php

Route::set('add_user', function() {
    AddUser_C::CreatePrivateView('AddUser_V');
});

Route::set('view_user', function() {
    ViewUser_C::CreatePrivateView('ViewUser_V');
});

Route::set('index.php', function() {
    Index_C::CreateView('Index_V');
});

Route::set('login', function() {
    Login_C::CreateView('Login_V');
});

Route::set('logout', function() {
    Logout_C::CreateView('Logout_V');
});

Route::set('view_lesson', function() {
    ViewLesson_C::CreatePrivateView('ViewLesson_V');
});

Route::set('add_lesson', function() {
    AddLesson_C::CreatePrivateView('AddLesson_V');
});

?>
