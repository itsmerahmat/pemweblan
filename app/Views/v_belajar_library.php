<?php
$session = session();
if($session->has('logged_in')){
    echo "You've been logged in<br/>";
    echo "Username: ". $session->get('username');
    echo "<br/><a href='" . base_url('belajar-library/logout') . "' name='logout'>Logout</a>";
} else {
    echo "Session haven't been set";
    echo "<br/><a href='" . base_url('belajar-library/login') . "' name='login'>Login</a>";
}
