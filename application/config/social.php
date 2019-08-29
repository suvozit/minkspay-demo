<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$config = [
	'facebook'    => array(
        'client_id'             => '371523183519069',
        'client_secret'         => 'd843f4bcef3cfeebe307e72d328f805e',
        'authorize_url'         => 'https://www.facebook.com/v4.0/dialog/oauth',
        'access_token_url'      => 'https://graph.facebook.com/v4.0/oauth/access_token',
        'authorize_params'      => [
        	'response_type' => 'code',
            'scope' => 'email'
        ]
    ),
    'google'      => array(
        'client_id'             => '263785890165-mvsheaivsarsftquojenmj89272nhlob.apps.googleusercontent.com',
        'client_secret'         => 'uFu_Yh5GqeRSbj0faFtRkLTi',
        'authorize_url'         => 'https://accounts.google.com/o/oauth2/auth',
        'access_token_url'      => 'https://accounts.google.com/o/oauth2/token',
        'authorize_params'      => [
            'access_type' => 'offline',
            'response_type' => 'code',
            'scope' => 
                'https://www.googleapis.com/auth/userinfo.email'       // View your email address
                .' https://www.googleapis.com/auth/userinfo.profile'  // See your personal info, including any personal info you've made publicly available
        ]
    ),
];