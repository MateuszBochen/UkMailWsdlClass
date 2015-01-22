<?php

namespace UkMail\Test\DespatchingDomesticConsignments;

class UKMConsignmentService extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ArrayOfbase64Binary' => 'UkMail\\Test\\DespatchingDomesticConsignments\\ArrayOfbase64Binary',
      'AddDomesticConsignmentWebRequest' => 'UkMail\\Test\\DespatchingDomesticConsignments\\AddDomesticConsignmentWebRequest',
      'AddConsignmentWebRequest' => 'UkMail\\Test\\DespatchingDomesticConsignments\\AddConsignmentWebRequest',
      'WebRequest' => 'UkMail\\Test\\DespatchingDomesticConsignments\\WebRequest',
      'AddressWebModel' => 'UkMail\\Test\\DespatchingDomesticConsignments\\AddressWebModel',
      'UKMAddDomesticConsignmentWebResponse' => 'UkMail\\Test\\DespatchingDomesticConsignments\\UKMAddDomesticConsignmentWebResponse',
      'UKMWebResponse' => 'UkMail\\Test\\DespatchingDomesticConsignments\\UKMWebResponse',
      'ArrayOfUKMWebError' => 'UkMail\\Test\\DespatchingDomesticConsignments\\ArrayOfUKMWebError',
      'UKMWebError' => 'UkMail\\Test\\DespatchingDomesticConsignments\\UKMWebError',
      'ArrayOfUKMWebWarning' => 'UkMail\\Test\\DespatchingDomesticConsignments\\ArrayOfUKMWebWarning',
      'UKMWebWarning' => 'UkMail\\Test\\DespatchingDomesticConsignments\\UKMWebWarning',
      'AddPacketConsignmentWebRequest' => 'UkMail\\Test\\DespatchingDomesticConsignments\\AddPacketConsignmentWebRequest',
      'PacketAddressWebModel' => 'UkMail\\Test\\DespatchingDomesticConsignments\\PacketAddressWebModel',
      'UKMAddPacketConsignmentWebResponse' => 'UkMail\\Test\\DespatchingDomesticConsignments\\UKMAddPacketConsignmentWebResponse',
      'AddInternationalConsignmentWebRequest' => 'UkMail\\Test\\DespatchingDomesticConsignments\\AddInternationalConsignmentWebRequest',
      'UKMAddInternationalConsignmentWebResponse' => 'UkMail\\Test\\DespatchingDomesticConsignments\\UKMAddInternationalConsignmentWebResponse',
      'AddReturnWebRequest' => 'UkMail\\Test\\DespatchingDomesticConsignments\\AddReturnWebRequest',
      'UKMAddReturnToSenderWebResponse' => 'UkMail\\Test\\DespatchingDomesticConsignments\\UKMAddReturnToSenderWebResponse',
      'AddSendToThirdPartyWebRequest' => 'UkMail\\Test\\DespatchingDomesticConsignments\\AddSendToThirdPartyWebRequest',
      'UKMAddSendToThirdPartyWebResponse' => 'UkMail\\Test\\DespatchingDomesticConsignments\\UKMAddSendToThirdPartyWebResponse',
      'CancelConsignmentWebRequest' => 'UkMail\\Test\\DespatchingDomesticConsignments\\CancelConsignmentWebRequest',
      'UKMCancelConsignmentWebResponse' => 'UkMail\\Test\\DespatchingDomesticConsignments\\UKMCancelConsignmentWebResponse',
      'CancelReturnWebRequest' => 'UkMail\\Test\\DespatchingDomesticConsignments\\CancelReturnWebRequest',
      'UKMCancelReturnWebResponse' => 'UkMail\\Test\\DespatchingDomesticConsignments\\UKMCancelReturnWebResponse',
      'AddDomesticConsignmentDeferredWebRequest' => 'UkMail\\Test\\DespatchingDomesticConsignments\\AddDomesticConsignmentDeferredWebRequest',
      'AddConsignmentDeferredWebRequest' => 'UkMail\\Test\\DespatchingDomesticConsignments\\AddConsignmentDeferredWebRequest',
      'AddDomesticConsignment' => 'UkMail\\Test\\DespatchingDomesticConsignments\\AddDomesticConsignment',
      'AddDomesticConsignmentResponse' => 'UkMail\\Test\\DespatchingDomesticConsignments\\AddDomesticConsignmentResponse',
      'AddPacketConsignment' => 'UkMail\\Test\\DespatchingDomesticConsignments\\AddPacketConsignment',
      'AddPacketConsignmentResponse' => 'UkMail\\Test\\DespatchingDomesticConsignments\\AddPacketConsignmentResponse',
      'AddInternationalConsignment' => 'UkMail\\Test\\DespatchingDomesticConsignments\\AddInternationalConsignment',
      'AddInternationalConsignmentResponse' => 'UkMail\\Test\\DespatchingDomesticConsignments\\AddInternationalConsignmentResponse',
      'AddReturnToSender' => 'UkMail\\Test\\DespatchingDomesticConsignments\\AddReturnToSender',
      'AddReturnToSenderResponse' => 'UkMail\\Test\\DespatchingDomesticConsignments\\AddReturnToSenderResponse',
      'AddSendToThirdParty' => 'UkMail\\Test\\DespatchingDomesticConsignments\\AddSendToThirdParty',
      'AddSendToThirdPartyResponse' => 'UkMail\\Test\\DespatchingDomesticConsignments\\AddSendToThirdPartyResponse',
      'CancelConsignment' => 'UkMail\\Test\\DespatchingDomesticConsignments\\CancelConsignment',
      'CancelConsignmentResponse' => 'UkMail\\Test\\DespatchingDomesticConsignments\\CancelConsignmentResponse',
      'CancelReturn' => 'UkMail\\Test\\DespatchingDomesticConsignments\\CancelReturn',
      'CancelReturnResponse' => 'UkMail\\Test\\DespatchingDomesticConsignments\\CancelReturnResponse',
      'AddDomesticConsignmentDeferred' => 'UkMail\\Test\\DespatchingDomesticConsignments\\AddDomesticConsignmentDeferred',
      'AddDomesticConsignmentDeferredResponse' => 'UkMail\\Test\\DespatchingDomesticConsignments\\AddDomesticConsignmentDeferredResponse',
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
