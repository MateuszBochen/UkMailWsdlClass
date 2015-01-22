<?php


 function autoload_73dcdbf36e65468f0cec530ba630b470($class)
{
    $classes = array(
        'UkMail\Prod\SecurityModel\UKMAuthenticationServiceCustom' => __DIR__ .'/UKMAuthenticationServiceCustom.php',
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

spl_autoload_register('autoload_73dcdbf36e65468f0cec530ba630b470');

// Do nothing. The rest is just leftovers from the code generation.
{
}
