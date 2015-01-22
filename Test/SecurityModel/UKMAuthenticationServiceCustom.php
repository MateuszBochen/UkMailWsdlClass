<?php

namespace UkMail\Test\SecurityModel;

class UKMAuthenticationServiceCustom extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'LoginWebRequest' => 'UkMail\\Test\\SecurityModel\\LoginWebRequestCustom',
      'UKMLoginResponse' => 'UkMail\\Test\\SecurityModel\\UKMLoginResponseCustom',
      'UKMWebResponse' => 'UkMail\\Test\\SecurityModel\\UKMWebResponseCustom',
      'ArrayOfUKMWebError' => 'UkMail\\Test\\SecurityModel\\ArrayOfUKMWebErrorCustom',
      'UKMWebError' => 'UkMail\\Test\\SecurityModel\\UKMWebErrorCustom',
      'ArrayOfUKMWebWarning' => 'UkMail\\Test\\SecurityModel\\ArrayOfUKMWebWarningCustom',
      'UKMWebWarning' => 'UkMail\\Test\\SecurityModel\\UKMWebWarningCustom',
      'ArrayOfAccountWebModel' => 'UkMail\\Test\\SecurityModel\\ArrayOfAccountWebModelCustom',
      'AccountWebModel' => 'UkMail\\Test\\SecurityModel\\AccountWebModelCustom',
      'WebRequest' => 'UkMail\\Test\\SecurityModel\\WebRequestCustom',
      'UKMLogoutResponse' => 'UkMail\\Test\\SecurityModel\\UKMLogoutResponseCustom',
      'Login' => 'UkMail\\Test\\SecurityModel\\LoginCustom',
      'LoginResponse' => 'UkMail\\Test\\SecurityModel\\LoginResponseCustom',
      'Logout' => 'UkMail\\Test\\SecurityModel\\LogoutCustom',
      'LogoutResponse' => 'UkMail\\Test\\SecurityModel\\LogoutResponseCustom',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(), $wsdl = 'https://qa-api.ukmail.com/Services/UKMAuthenticationServices/UKMAuthenticationService.svc?wsdl')
    {
      foreach (self::$classmap as $key => $value) {
        if (!isset($options['classmap'][$key])) {
          $options['classmap'][$key] = $value;
        }
      }
      $options = array_merge(array (
      'features' => 1,
    ), $options);
      parent::__construct($wsdl, $options);
    }

}
