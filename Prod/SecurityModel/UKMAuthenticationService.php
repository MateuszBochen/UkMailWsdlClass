<?php

namespace UkMail\Prod\SecurityModel;

class UKMAuthenticationService extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'LoginWebRequest' => 'UkMail\\Prod\\SecurityModel\\LoginWebRequestCustom',
      'UKMLoginResponse' => 'UkMail\\Prod\\SecurityModel\\UKMLoginResponseCustom',
      'UKMWebResponse' => 'UkMail\\Prod\\SecurityModel\\UKMWebResponseCustom',
      'ArrayOfUKMWebError' => 'UkMail\\Prod\\SecurityModel\\ArrayOfUKMWebErrorCustom',
      'UKMWebError' => 'UkMail\\Prod\\SecurityModel\\UKMWebErrorCustom',
      'ArrayOfUKMWebWarning' => 'UkMail\\Prod\\SecurityModel\\ArrayOfUKMWebWarningCustom',
      'UKMWebWarning' => 'UkMail\\Prod\\SecurityModel\\UKMWebWarningCustom',
      'ArrayOfAccountWebModel' => 'UkMail\\Prod\\SecurityModel\\ArrayOfAccountWebModelCustom',
      'AccountWebModel' => 'UkMail\\Prod\\SecurityModel\\AccountWebModelCustom',
      'WebRequest' => 'UkMail\\Prod\\SecurityModel\\WebRequestCustom',
      'UKMLogoutResponse' => 'UkMail\\Prod\\SecurityModel\\UKMLogoutResponseCustom',
      'Login' => 'UkMail\\Prod\\SecurityModel\\LoginCustom',
      'LoginResponse' => 'UkMail\\Prod\\SecurityModel\\LoginResponseCustom',
      'Logout' => 'UkMail\\Prod\\SecurityModel\\LogoutCustom',
      'LogoutResponse' => 'UkMail\\Prod\\SecurityModel\\LogoutResponseCustom',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(), $wsdl = 'https://api.ukmail.com/Services/UKMAuthenticationServices/UKMAuthenticationService.svc?wsdl')
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


    public function login(LoginCustom $login){
        return $this->__soapCall('Login', array($login));
    }

    public function logout(LogoutCustom $logout){
        return $this->__soapCall('Logout', array($logout));
    }

}
