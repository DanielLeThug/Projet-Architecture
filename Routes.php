<?php

Route::set('index.php', function() {
  Index::CreateView('Index');
});

Route::set('login.php', function() {
  Login::CreateView('Login');
});

Route::set('logout.php', function() {
  Logout::CreateView('Logout');
});

?>
