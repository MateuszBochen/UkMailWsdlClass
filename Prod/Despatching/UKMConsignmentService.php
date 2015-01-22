<?php

namespace UkMail\Prod\Despatching;

class UKMConsignmentService extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ArrayOfbase64Binary' => 'UkMail\\Prod\\Despatching\\ArrayOfbase64Binary',
      'AddDomesticConsignmentWebRequest' => 'UkMail\\Prod\\Despatching\\AddDomesticConsignmentWebRequest',
      'AddConsignmentWebRequest' => 'UkMail\\Prod\\Despatching\\AddConsignmentWebRequest',
      'WebRequest' => 'UkMail\\Prod\\Despatching\\WebRequest',
      'AddressWebModel' => 'UkMail\\Prod\\Despatching\\AddressWebModel',
      'UKMAddDomesticConsignmentWebResponse' => 'UkMail\\Prod\\Despatching\\UKMAddDomesticConsignmentWebResponse',
      'UKMWebResponse' => 'UkMail\\Prod\\Despatching\\UKMWebResponse',
      'ArrayOfUKMWebError' => 'UkMail\\Prod\\Despatching\\ArrayOfUKMWebError',
      'UKMWebError' => 'UkMail\\Prod\\Despatching\\UKMWebError',
      'ArrayOfUKMWebWarning' => 'UkMail\\Prod\\Despatching\\ArrayOfUKMWebWarning',
      'UKMWebWarning' => 'UkMail\\Prod\\Despatching\\UKMWebWarning',
      'AddPacketConsignmentWebRequest' => 'UkMail\\Prod\\Despatching\\AddPacketConsignmentWebRequest',
      'PacketAddressWebModel' => 'UkMail\\Prod\\Despatching\\PacketAddressWebModel',
      'UKMAddPacketConsignmentWebResponse' => 'UkMail\\Prod\\Despatching\\UKMAddPacketConsignmentWebResponse',
      'AddInternationalConsignmentWebRequest' => 'UkMail\\Prod\\Despatching\\AddInternationalConsignmentWebRequest',
      'UKMAddInternationalConsignmentWebResponse' => 'UkMail\\Prod\\Despatching\\UKMAddInternationalConsignmentWebResponse',
      'AddReturnWebRequest' => 'UkMail\\Prod\\Despatching\\AddReturnWebRequest',
      'UKMAddReturnToSenderWebResponse' => 'UkMail\\Prod\\Despatching\\UKMAddReturnToSenderWebResponse',
      'AddSendToThirdPartyWebRequest' => 'UkMail\\Prod\\Despatching\\AddSendToThirdPartyWebRequest',
      'UKMAddSendToThirdPartyWebResponse' => 'UkMail\\Prod\\Despatching\\UKMAddSendToThirdPartyWebResponse',
      'CancelConsignmentWebRequest' => 'UkMail\\Prod\\Despatching\\CancelConsignmentWebRequest',
      'UKMCancelConsignmentWebResponse' => 'UkMail\\Prod\\Despatching\\UKMCancelConsignmentWebResponse',
      'CancelReturnWebRequest' => 'UkMail\\Prod\\Despatching\\CancelReturnWebRequest',
      'UKMCancelReturnWebResponse' => 'UkMail\\Prod\\Despatching\\UKMCancelReturnWebResponse',
      'AddDomesticConsignmentDeferredWebRequest' => 'UkMail\\Prod\\Despatching\\AddDomesticConsignmentDeferredWebRequest',
      'AddConsignmentDeferredWebRequest' => 'UkMail\\Prod\\Despatching\\AddConsignmentDeferredWebRequest',
      'AddDomesticConsignment' => 'UkMail\\Prod\\Despatching\\AddDomesticConsignment',
      'AddDomesticConsignmentResponse' => 'UkMail\\Prod\\Despatching\\AddDomesticConsignmentResponse',
      'AddPacketConsignment' => 'UkMail\\Prod\\Despatching\\AddPacketConsignment',
      'AddPacketConsignmentResponse' => 'UkMail\\Prod\\Despatching\\AddPacketConsignmentResponse',
      'AddInternationalConsignment' => 'UkMail\\Prod\\Despatching\\AddInternationalConsignment',
      'AddInternationalConsignmentResponse' => 'UkMail\\Prod\\Despatching\\AddInternationalConsignmentResponse',
      'AddReturnToSender' => 'UkMail\\Prod\\Despatching\\AddReturnToSender',
      'AddReturnToSenderResponse' => 'UkMail\\Prod\\Despatching\\AddReturnToSenderResponse',
      'AddSendToThirdParty' => 'UkMail\\Prod\\Despatching\\AddSendToThirdParty',
      'AddSendToThirdPartyResponse' => 'UkMail\\Prod\\Despatching\\AddSendToThirdPartyResponse',
      'CancelConsignment' => 'UkMail\\Prod\\Despatching\\CancelConsignment',
      'CancelConsignmentResponse' => 'UkMail\\Prod\\Despatching\\CancelConsignmentResponse',
      'CancelReturn' => 'UkMail\\Prod\\Despatching\\CancelReturn',
      'CancelReturnResponse' => 'UkMail\\Prod\\Despatching\\CancelReturnResponse',
      'AddDomesticConsignmentDeferred' => 'UkMail\\Prod\\Despatching\\AddDomesticConsignmentDeferred',
      'AddDomesticConsignmentDeferredResponse' => 'UkMail\\Prod\\Despatching\\AddDomesticConsignmentDeferredResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(), $wsdl = 'https://api.ukmail.com/Services/UKMConsignmentServices/UKMConsignmentService.svc?wsdl')
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

    public function addDomesticConsignment(AddDomesticConsignment $parameters)
    {
        return $this->__soapCall('AddDomesticConsignment', array($parameters));
    }
    
    public function addPacketConsignment(AddPacketConsignment $parameters)
    {
        return $this->__soapCall('AddPacketConsignment', array($parameters));
    }

    public function addInternationalConsignment(AddInternationalConsignment $parameters)
    {
        return $this->__soapCall('AddInternationalConsignment', array($parameters));
    }

    public function addReturnToSender(AddReturnToSender $parameters)
    {
        return $this->__soapCall('AddReturnToSender', array($parameters));
    }

    public function addSendToThirdParty(AddSendToThirdParty $parameters)
    {
        return $this->__soapCall('AddSendToThirdParty', array($parameters));
    }

    public function cancelConsignment(CancelConsignment $parameters)
    {
        return $this->__soapCall('CancelConsignment', array($parameters));
    }

    public function cancelReturn(CancelReturn $parameters)
    {
        return $this->__soapCall('CancelReturn', array($parameters));
    }

    public function addDomesticConsignmentDeferred(AddDomesticConsignmentDeferred $parameters)
    {
        return $this->__soapCall('AddDomesticConsignmentDeferred', array($parameters));
    }
}
