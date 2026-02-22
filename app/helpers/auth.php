<?php

function auth()
{
    if (!isset($_SESSION['user_id'])) {
        redirect('/public/index.php');
    }
}