<?php


 function autoload_e2202730cafbe1a05ccee4fdbd6df339($class)
{
    $classes = array(
        'UkMail\Prod\SecurityModel\UKMAuthenticationService' => __DIR__ .'/UKMAuthenticationService.php',
        'UkMail\Prod\SecurityModel\UKMResultState' => __DIR__ .'/UKMResultState.php',
        'UkMail\Prod\SecurityModel\LoginWebRequest' => __DIR__ .'/LoginWebRequest.php',
        'UkMail\Prod\SecurityModel\UKMLoginResponse' => __DIR__ .'/UKMLoginResponse.php',
        'UkMail\Prod\SecurityModel\UKMWebResponse' => __DIR__ .'/UKMWebResponse.php',
        'UkMail\Prod\SecurityModel\ArrayOfUKMWebError' => __DIR__ .'/ArrayOfUKMWebError.php',
        'UkMail\Prod\SecurityModel\UKMWebError' => __DIR__ .'/UKMWebError.php',
        'UkMail\Prod\SecurityModel\ArrayOfUKMWebWarning' => __DIR__ .'/ArrayOfUKMWebWarning.php',
        'UkMail\Prod\SecurityModel\UKMWebWarning' => __DIR__ .'/UKMWebWarning.php',
        'UkMail\Prod\SecurityModel\ArrayOfAccountWebModel' => __DIR__ .'/ArrayOfAccountWebModel.php',
        'UkMail\Prod\SecurityModel\AccountWebModel' => __DIR__ .'/AccountWebModel.php',
        'UkMail\Prod\SecurityModel\AccountStatusEnum' => __DIR__ .'/AccountStatusEnum.php',
        'UkMail\Prod\SecurityModel\AccountTypeEnum' => __DIR__ .'/AccountTypeEnum.php',
        'UkMail\Prod\SecurityModel\RegionEnum' => __DIR__ .'/RegionEnum.php',
        'UkMail\Prod\SecurityModel\WebRequest' => __DIR__ .'/WebRequest.php',
        'UkMail\Prod\SecurityModel\UKMLogoutResponse' => __DIR__ .'/UKMLogoutResponse.php',
        'UkMail\Prod\SecurityModel\Login' => __DIR__ .'/Login.php',
        'UkMail\Prod\SecurityModel\LoginResponse' => __DIR__ .'/LoginResponse.php',
        'UkMail\Prod\SecurityModel\Logout' => __DIR__ .'/Logout.php',
        'UkMail\Prod\SecurityModel\LogoutResponse' => __DIR__ .'/LogoutResponse.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_e2202730cafbe1a05ccee4fdbd6df339');

// Do nothing. The rest is just leftovers from the code generation.
{
}
