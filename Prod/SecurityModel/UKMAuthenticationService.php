<?php

namespace UkMail\Prod\SecurityModel;

class UKMAuthenticationService extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'LoginWebRequest' => 'UkMail\\Prod\\SecurityModel\\LoginWebRequest',
      'UKMLoginResponse' => 'UkMail\\Prod\\SecurityModel\\UKMLoginResponse',
      'UKMWebResponse' => 'UkMail\\Prod\\SecurityModel\\UKMWebResponse',
      'ArrayOfUKMWebError' => 'UkMail\\Prod\\SecurityModel\\ArrayOfUKMWebError',
      'UKMWebError' => 'UkMail\\Prod\\SecurityModel\\UKMWebError',
      'ArrayOfUKMWebWarning' => 'UkMail\\Prod\\SecurityModel\\ArrayOfUKMWebWarning',
      'UKMWebWarning' => 'UkMail\\Prod\\SecurityModel\\UKMWebWarning',
      'ArrayOfAccountWebModel' => 'UkMail\\Prod\\SecurityModel\\ArrayOfAccountWebModel',
      'AccountWebModel' => 'UkMail\\Prod\\SecurityModel\\AccountWebModel',
      'WebRequest' => 'UkMail\\Prod\\SecurityModel\\WebRequest',
      'UKMLogoutResponse' => 'UkMail\\Prod\\SecurityModel\\UKMLogoutResponse',
      'Login' => 'UkMail\\Prod\\SecurityModel\\Login',
      'LoginResponse' => 'UkMail\\Prod\\SecurityModel\\LoginResponse',
      'Logout' => 'UkMail\\Prod\\SecurityModel\\Logout',
      'LogoutResponse' => 'UkMail\\Prod\\SecurityModel\\LogoutResponse',
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

    public function login(Login $login){
        return $this->__soapCall('Login', array($login));
    }

    public function logout(Logout $logout){
        return $this->__soapCall('Logout', array($logout));
    }

}
