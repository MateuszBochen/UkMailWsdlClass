<?php


 function autoload_7a008c60ca4a6cf9c76e61975e535432($class)
{
    $classes = array(
        'UkMail\Test\SecurityModel\UKMAuthenticationService' => __DIR__ .'/UKMAuthenticationService.php',
        'UkMail\Test\SecurityModel\UKMResultState' => __DIR__ .'/UKMResultState.php',
        'UkMail\Test\SecurityModel\LoginWebRequest' => __DIR__ .'/LoginWebRequest.php',
        'UkMail\Test\SecurityModel\UKMLoginResponse' => __DIR__ .'/UKMLoginResponse.php',
        'UkMail\Test\SecurityModel\UKMWebResponse' => __DIR__ .'/UKMWebResponse.php',
        'UkMail\Test\SecurityModel\ArrayOfUKMWebError' => __DIR__ .'/ArrayOfUKMWebError.php',
        'UkMail\Test\SecurityModel\UKMWebError' => __DIR__ .'/UKMWebError.php',
        'UkMail\Test\SecurityModel\ArrayOfUKMWebWarning' => __DIR__ .'/ArrayOfUKMWebWarning.php',
        'UkMail\Test\SecurityModel\UKMWebWarning' => __DIR__ .'/UKMWebWarning.php',
        'UkMail\Test\SecurityModel\ArrayOfAccountWebModel' => __DIR__ .'/ArrayOfAccountWebModel.php',
        'UkMail\Test\SecurityModel\AccountWebModel' => __DIR__ .'/AccountWebModel.php',
        'UkMail\Test\SecurityModel\AccountStatusEnum' => __DIR__ .'/AccountStatusEnum.php',
        'UkMail\Test\SecurityModel\AccountTypeEnum' => __DIR__ .'/AccountTypeEnum.php',
        'UkMail\Test\SecurityModel\RegionEnum' => __DIR__ .'/RegionEnum.php',
        'UkMail\Test\SecurityModel\WebRequest' => __DIR__ .'/WebRequest.php',
        'UkMail\Test\SecurityModel\UKMLogoutResponse' => __DIR__ .'/UKMLogoutResponse.php',
        'UkMail\Test\SecurityModel\Login' => __DIR__ .'/Login.php',
        'UkMail\Test\SecurityModel\LoginResponse' => __DIR__ .'/LoginResponse.php',
        'UkMail\Test\SecurityModel\Logout' => __DIR__ .'/Logout.php',
        'UkMail\Test\SecurityModel\LogoutResponse' => __DIR__ .'/LogoutResponse.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_7a008c60ca4a6cf9c76e61975e535432');

// Do nothing. The rest is just leftovers from the code generation.
{
}
