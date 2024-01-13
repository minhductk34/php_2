<?php

const BASE_URL = "http://localhost/Php_2/Asm/Mvc/";

const  PUBLIC_URL = BASE_URL. "/Public/";
const PUBLIC_FRONTEND = BASE_URL. "Public";

const THEME_ASSET_URL = PUBLIC_URL. '/theme/';
const FRONTEND_URL = PUBLIC_FRONTEND. "/frontend/";

const IMAGE_URL = PUBLIC_URL. "/uploads/";

const MEMBER_ROLE = 0;
const ADMIN_ROLE = 1;
const AUTH = 'session_auth';


function checkAuth($role = MEMBER_ROLE){

    if(!isset($_SESSION[AUTH]) ||  empty($_SESSION[AUTH]) || $_SESSION[AUTH]['role'] < $role){

        header('Location: '.BASE_URL .'login');
        exit("Bạn không phải là admin nên không đăng nhập vào được ");


    }

}


