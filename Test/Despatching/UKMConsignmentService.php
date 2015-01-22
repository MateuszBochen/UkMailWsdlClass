<?php

namespace UkMail\Test\Despatching;

class UKMConsignmentService extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ArrayOfbase64Binary' => 'UkMail\\Test\\Despatching\\ArrayOfbase64Binary',
      'AddDomesticConsignmentWebRequest' => 'UkMail\\Test\\Despatching\\AddDomesticConsignmentWebRequest',
      'AddConsignmentWebRequest' => 'UkMail\\Test\\Despatching\\AddConsignmentWebRequest',
      'WebRequest' => 'UkMail\\Test\\Despatching\\WebRequest',
      'AddressWebModel' => 'UkMail\\Test\\Despatching\\AddressWebModel',
      'UKMAddDomesticConsignmentWebResponse' => 'UkMail\\Test\\Despatching\\UKMAddDomesticConsignmentWebResponse',
      'UKMWebResponse' => 'UkMail\\Test\\Despatching\\UKMWebResponse',
      'ArrayOfUKMWebError' => 'UkMail\\Test\\Despatching\\ArrayOfUKMWebError',
      'UKMWebError' => 'UkMail\\Test\\Despatching\\UKMWebError',
      'ArrayOfUKMWebWarning' => 'UkMail\\Test\\Despatching\\ArrayOfUKMWebWarning',
      'UKMWebWarning' => 'UkMail\\Test\\Despatching\\UKMWebWarning',
      'AddPacketConsignmentWebRequest' => 'UkMail\\Test\\Despatching\\AddPacketConsignmentWebRequest',
      'PacketAddressWebModel' => 'UkMail\\Test\\Despatching\\PacketAddressWebModel',
      'UKMAddPacketConsignmentWebResponse' => 'UkMail\\Test\\Despatching\\UKMAddPacketConsignmentWebResponse',
      'AddInternationalConsignmentWebRequest' => 'UkMail\\Test\\Despatching\\AddInternationalConsignmentWebRequest',
      'UKMAddInternationalConsignmentWebResponse' => 'UkMail\\Test\\Despatching\\UKMAddInternationalConsignmentWebResponse',
      'AddReturnWebRequest' => 'UkMail\\Test\\Despatching\\AddReturnWebRequest',
      'UKMAddReturnToSenderWebResponse' => 'UkMail\\Test\\Despatching\\UKMAddReturnToSenderWebResponse',
      'AddSendToThirdPartyWebRequest' => 'UkMail\\Test\\Despatching\\AddSendToThirdPartyWebRequest',
      'UKMAddSendToThirdPartyWebResponse' => 'UkMail\\Test\\Despatching\\UKMAddSendToThirdPartyWebResponse',
      'CancelConsignmentWebRequest' => 'UkMail\\Test\\Despatching\\CancelConsignmentWebRequest',
      'UKMCancelConsignmentWebResponse' => 'UkMail\\Test\\Despatching\\UKMCancelConsignmentWebResponse',
      'CancelReturnWebRequest' => 'UkMail\\Test\\Despatching\\CancelReturnWebRequest',
      'UKMCancelReturnWebResponse' => 'UkMail\\Test\\Despatching\\UKMCancelReturnWebResponse',
      'AddDomesticConsignmentDeferredWebRequest' => 'UkMail\\Test\\Despatching\\AddDomesticConsignmentDeferredWebRequest',
      'AddConsignmentDeferredWebRequest' => 'UkMail\\Test\\Despatching\\AddConsignmentDeferredWebRequest',
      'AddDomesticConsignment' => 'UkMail\\Test\\Despatching\\AddDomesticConsignment',
      'AddDomesticConsignmentResponse' => 'UkMail\\Test\\Despatching\\AddDomesticConsignmentResponse',
      'AddPacketConsignment' => 'UkMail\\Test\\Despatching\\AddPacketConsignment',
      'AddPacketConsignmentResponse' => 'UkMail\\Test\\Despatching\\AddPacketConsignmentResponse',
      'AddInternationalConsignment' => 'UkMail\\Test\\Despatching\\AddInternationalConsignment',
      'AddInternationalConsignmentResponse' => 'UkMail\\Test\\Despatching\\AddInternationalConsignmentResponse',
      'AddReturnToSender' => 'UkMail\\Test\\Despatching\\AddReturnToSender',
      'AddReturnToSenderResponse' => 'UkMail\\Test\\Despatching\\AddReturnToSenderResponse',
      'AddSendToThirdParty' => 'UkMail\\Test\\Despatching\\AddSendToThirdParty',
      'AddSendToThirdPartyResponse' => 'UkMail\\Test\\Despatching\\AddSendToThirdPartyResponse',
      'CancelConsignment' => 'UkMail\\Test\\Despatching\\CancelConsignment',
      'CancelConsignmentResponse' => 'UkMail\\Test\\Despatching\\CancelConsignmentResponse',
      'CancelReturn' => 'UkMail\\Test\\Despatching\\CancelReturn',
      'CancelReturnResponse' => 'UkMail\\Test\\Despatching\\CancelReturnResponse',
      'AddDomesticConsignmentDeferred' => 'UkMail\\Test\\Despatching\\AddDomesticConsignmentDeferred',
      'AddDomesticConsignmentDeferredResponse' => 'UkMail\\Test\\Despatching\\AddDomesticConsignmentDeferredResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(), $wsdl = 'https://qa-api.ukmail.com/Services/UKMConsignmentServices/UKMConsignmentService.svc?wsdl')
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
