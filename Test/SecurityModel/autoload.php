<?php


 function autoload_9649de62215869d75932448ce9d41320($class)
{
    $classes = array(
        'UkMail\Test\SecurityModel\UKMAuthenticationServiceCustom' => __DIR__ .'/UKMAuthenticationServiceCustom.php',
        'UkMail\Test\SecurityModel\UKMResultStateCustom' => __DIR__ .'/UKMResultStateCustom.php',
        'UkMail\Test\SecurityModel\LoginWebRequestCustom' => __DIR__ .'/LoginWebRequestCustom.php',
        'UkMail\Test\SecurityModel\UKMLoginResponseCustom' => __DIR__ .'/UKMLoginResponseCustom.php',
        'UkMail\Test\SecurityModel\UKMWebResponseCustom' => __DIR__ .'/UKMWebResponseCustom.php',
        'UkMail\Test\SecurityModel\ArrayOfUKMWebErrorCustom' => __DIR__ .'/ArrayOfUKMWebErrorCustom.php',
        'UkMail\Test\SecurityModel\UKMWebErrorCustom' => __DIR__ .'/UKMWebErrorCustom.php',
        'UkMail\Test\SecurityModel\ArrayOfUKMWebWarningCustom' => __DIR__ .'/ArrayOfUKMWebWarningCustom.php',
        'UkMail\Test\SecurityModel\UKMWebWarningCustom' => __DIR__ .'/UKMWebWarningCustom.php',
        'UkMail\Test\SecurityModel\ArrayOfAccountWebModelCustom' => __DIR__ .'/ArrayOfAccountWebModelCustom.php',
        'UkMail\Test\SecurityModel\AccountWebModelCustom' => __DIR__ .'/AccountWebModelCustom.php',
        'UkMail\Test\SecurityModel\AccountStatusEnumCustom' => __DIR__ .'/AccountStatusEnumCustom.php',
        'UkMail\Test\SecurityModel\AccountTypeEnumCustom' => __DIR__ .'/AccountTypeEnumCustom.php',
        'UkMail\Test\SecurityModel\RegionEnumCustom' => __DIR__ .'/RegionEnumCustom.php',
        'UkMail\Test\SecurityModel\WebRequestCustom' => __DIR__ .'/WebRequestCustom.php',
        'UkMail\Test\SecurityModel\UKMLogoutResponseCustom' => __DIR__ .'/UKMLogoutResponseCustom.php',
        'UkMail\Test\SecurityModel\LoginCustom' => __DIR__ .'/LoginCustom.php',
        'UkMail\Test\SecurityModel\LoginResponseCustom' => __DIR__ .'/LoginResponseCustom.php',
        'UkMail\Test\SecurityModel\LogoutCustom' => __DIR__ .'/LogoutCustom.php',
        'UkMail\Test\SecurityModel\LogoutResponseCustom' => __DIR__ .'/LogoutResponseCustom.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_9649de62215869d75932448ce9d41320');

// Do nothing. The rest is just leftovers from the code generation.
{
}
