<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
$config['facebook']['api_id'] = '559532060851170';
$config['facebook']['app_secret'] = '06bdffa04fb1da9e883233956807dfa3';
$config['facebook']['redirect_url'] = '/login';
$config['facebook']['permissions'] = array(
    'email',
    'user_location',
    'user_birthday'
);
?>