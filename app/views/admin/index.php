<?php
if (Auth::check())
{ ?>
    <h1>Admin area</h1>
    <a href="/logout">Logout</a>
<?php }
else
{ ?>
    Login
<?php } ?>