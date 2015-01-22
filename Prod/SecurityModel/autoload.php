<?php


 function autoload_e2202730cafbe1a05ccee4fdbd6df339($class)
{
    $classes = array(
        'UkMail\Prod\SecurityModel\UKMAuthenticationService' => __DIR__ .'/UKMAuthenticationService.php',
        'UkMail\Prod\SecurityModel\UKMResultStateCustom' => __DIR__ .'/UKMResultStateCustom.php',
        'UkMail\Prod\SecurityModel\LoginWebRequestCustom' => __DIR__ .'/LoginWebRequestCustom.php',
        'UkMail\Prod\SecurityModel\UKMLoginResponseCustom' => __DIR__ .'/UKMLoginResponseCustom.php',
        'UkMail\Prod\SecurityModel\UKMWebResponseCustom' => __DIR__ .'/UKMWebResponseCustom.php',
        'UkMail\Prod\SecurityModel\ArrayOfUKMWebErrorCustom' => __DIR__ .'/ArrayOfUKMWebErrorCustom.php',
        'UkMail\Prod\SecurityModel\UKMWebErrorCustom' => __DIR__ .'/UKMWebErrorCustom.php',
        'UkMail\Prod\SecurityModel\ArrayOfUKMWebWarningCustom' => __DIR__ .'/ArrayOfUKMWebWarningCustom.php',
        'UkMail\Prod\SecurityModel\UKMWebWarningCustom' => __DIR__ .'/UKMWebWarningCustom.php',
        'UkMail\Prod\SecurityModel\ArrayOfAccountWebModelCustom' => __DIR__ .'/ArrayOfAccountWebModelCustom.php',
        'UkMail\Prod\SecurityModel\AccountWebModelCustom' => __DIR__ .'/AccountWebModelCustom.php',
        'UkMail\Prod\SecurityModel\AccountStatusEnumCustom' => __DIR__ .'/AccountStatusEnumCustom.php',
        'UkMail\Prod\SecurityModel\AccountTypeEnumCustom' => __DIR__ .'/AccountTypeEnumCustom.php',
        'UkMail\Prod\SecurityModel\RegionEnumCustom' => __DIR__ .'/RegionEnumCustom.php',
        'UkMail\Prod\SecurityModel\WebRequestCustom' => __DIR__ .'/WebRequestCustom.php',
        'UkMail\Prod\SecurityModel\UKMLogoutResponseCustom' => __DIR__ .'/UKMLogoutResponseCustom.php',
        'UkMail\Prod\SecurityModel\LoginCustom' => __DIR__ .'/LoginCustom.php',
        'UkMail\Prod\SecurityModel\LoginResponseCustom' => __DIR__ .'/LoginResponseCustom.php',
        'UkMail\Prod\SecurityModel\LogoutCustom' => __DIR__ .'/LogoutCustom.php',
        'UkMail\Prod\SecurityModel\LogoutResponseCustom' => __DIR__ .'/LogoutResponseCustom.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_e2202730cafbe1a05ccee4fdbd6df339');

// Do nothing. The rest is just leftovers from the code generation.
{
}
