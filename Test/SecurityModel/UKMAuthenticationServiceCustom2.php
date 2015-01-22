<?php

namespace UkMail\Test\SecurityModel;

class UKMAuthenticationServiceCustom2 extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'LoginWebRequest' => 'UkMail\\Test\\SecurityModel\\LoginWebRequestCustom2',
      'UKMLoginResponse' => 'UkMail\\Test\\SecurityModel\\UKMLoginResponse',
      'UKMWebResponse' => 'UkMail\\Test\\SecurityModel\\UKMWebResponse',
      'ArrayOfUKMWebError' => 'UkMail\\Test\\SecurityModel\\ArrayOfUKMWebError',
      'UKMWebError' => 'UkMail\\Test\\SecurityModel\\UKMWebError',
      'ArrayOfUKMWebWarning' => 'UkMail\\Test\\SecurityModel\\ArrayOfUKMWebWarning',
      'UKMWebWarning' => 'UkMail\\Test\\SecurityModel\\UKMWebWarning',
      'ArrayOfAccountWebModel' => 'UkMail\\Test\\SecurityModel\\ArrayOfAccountWebModel',
      'AccountWebModel' => 'UkMail\\Test\\SecurityModel\\AccountWebModel',
      'WebRequest' => 'UkMail\\Test\\SecurityModel\\WebRequest',
      'UKMLogoutResponse' => 'UkMail\\Test\\SecurityModel\\UKMLogoutResponse',
      'Login' => 'UkMail\\Test\\SecurityModel\\LoginCustom2',
      'LoginResponse' => 'UkMail\\Test\\SecurityModel\\LoginResponse',
      'Logout' => 'UkMail\\Test\\SecurityModel\\Logout',
      'LogoutResponse' => 'UkMail\\Test\\SecurityModel\\LogoutResponse',
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


    public function login(LoginCustom2 $login){
        return $this->__soapCall('Login', array($login));
    }

    public function logout(Logout $logout){
        return $this->__soapCall('Logout', array($logout));
    }
}
