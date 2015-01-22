<?php


 function autoload_375a8cd3edc4fff2bf2d0d967502d977($class)
{
    $classes = array(
        'UkMail\Test\SecurityModel\UKMAuthenticationServiceCustom2' => __DIR__ .'/UKMAuthenticationServiceCustom2.php',
        'UkMail\Test\SecurityModel\UKMResultState' => __DIR__ .'/UKMResultState.php',
        'UkMail\Test\SecurityModel\LoginWebRequestCustom2' => __DIR__ .'/LoginWebRequestCustom2.php',
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
        'UkMail\Test\SecurityModel\LoginCustom2' => __DIR__ .'/LoginCustom2.php',
        'UkMail\Test\SecurityModel\LoginResponse' => __DIR__ .'/LoginResponse.php',
        'UkMail\Test\SecurityModel\Logout' => __DIR__ .'/Logout.php',
        'UkMail\Test\SecurityModel\LogoutResponse' => __DIR__ .'/LogoutResponse.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_375a8cd3edc4fff2bf2d0d967502d977');

// Do nothing. The rest is just leftovers from the code generation.
{
}
