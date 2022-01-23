<?php

// what is sessio
// session is used to manage unformation across different  pages.


//verfy the user login info

session_start();
session_unset();
session_destroy();

echo "<br> You have been loged out";








?>