<?php

namespace UkMail\Prod\DespatchingDomesticConsignments;

class UKMConsignmentService extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ArrayOfbase64Binary' => 'UkMail\\Prod\\DespatchingDomesticConsignments\\ArrayOfbase64Binary',
      'AddDomesticConsignmentWebRequest' => 'UkMail\\Prod\\DespatchingDomesticConsignments\\AddDomesticConsignmentWebRequest',
      'AddConsignmentWebRequest' => 'UkMail\\Prod\\DespatchingDomesticConsignments\\AddConsignmentWebRequest',
      'WebRequest' => 'UkMail\\Prod\\DespatchingDomesticConsignments\\WebRequest',
      'AddressWebModel' => 'UkMail\\Prod\\DespatchingDomesticConsignments\\AddressWebModel',
      'UKMAddDomesticConsignmentWebResponse' => 'UkMail\\Prod\\DespatchingDomesticConsignments\\UKMAddDomesticConsignmentWebResponse',
      'UKMWebResponse' => 'UkMail\\Prod\\DespatchingDomesticConsignments\\UKMWebResponse',
      'ArrayOfUKMWebError' => 'UkMail\\Prod\\DespatchingDomesticConsignments\\ArrayOfUKMWebError',
      'UKMWebError' => 'UkMail\\Prod\\DespatchingDomesticConsignments\\UKMWebError',
      'ArrayOfUKMWebWarning' => 'UkMail\\Prod\\DespatchingDomesticConsignments\\ArrayOfUKMWebWarning',
      'UKMWebWarning' => 'UkMail\\Prod\\DespatchingDomesticConsignments\\UKMWebWarning',
      'AddPacketConsignmentWebRequest' => 'UkMail\\Prod\\DespatchingDomesticConsignments\\AddPacketConsignmentWebRequest',
      'PacketAddressWebModel' => 'UkMail\\Prod\\DespatchingDomesticConsignments\\PacketAddressWebModel',
      'UKMAddPacketConsignmentWebResponse' => 'UkMail\\Prod\\DespatchingDomesticConsignments\\UKMAddPacketConsignmentWebResponse',
      'AddInternationalConsignmentWebRequest' => 'UkMail\\Prod\\DespatchingDomesticConsignments\\AddInternationalConsignmentWebRequest',
      'UKMAddInternationalConsignmentWebResponse' => 'UkMail\\Prod\\DespatchingDomesticConsignments\\UKMAddInternationalConsignmentWebResponse',
      'AddReturnWebRequest' => 'UkMail\\Prod\\DespatchingDomesticConsignments\\AddReturnWebRequest',
      'UKMAddReturnToSenderWebResponse' => 'UkMail\\Prod\\DespatchingDomesticConsignments\\UKMAddReturnToSenderWebResponse',
      'AddSendToThirdPartyWebRequest' => 'UkMail\\Prod\\DespatchingDomesticConsignments\\AddSendToThirdPartyWebRequest',
      'UKMAddSendToThirdPartyWebResponse' => 'UkMail\\Prod\\DespatchingDomesticConsignments\\UKMAddSendToThirdPartyWebResponse',
      'CancelConsignmentWebRequest' => 'UkMail\\Prod\\DespatchingDomesticConsignments\\CancelConsignmentWebRequest',
      'UKMCancelConsignmentWebResponse' => 'UkMail\\Prod\\DespatchingDomesticConsignments\\UKMCancelConsignmentWebResponse',
      'CancelReturnWebRequest' => 'UkMail\\Prod\\DespatchingDomesticConsignments\\CancelReturnWebRequest',
      'UKMCancelReturnWebResponse' => 'UkMail\\Prod\\DespatchingDomesticConsignments\\UKMCancelReturnWebResponse',
      'AddDomesticConsignmentDeferredWebRequest' => 'UkMail\\Prod\\DespatchingDomesticConsignments\\AddDomesticConsignmentDeferredWebRequest',
      'AddConsignmentDeferredWebRequest' => 'UkMail\\Prod\\DespatchingDomesticConsignments\\AddConsignmentDeferredWebRequest',
      'AddDomesticConsignment' => 'UkMail\\Prod\\DespatchingDomesticConsignments\\AddDomesticConsignment',
      'AddDomesticConsignmentResponse' => 'UkMail\\Prod\\DespatchingDomesticConsignments\\AddDomesticConsignmentResponse',
      'AddPacketConsignment' => 'UkMail\\Prod\\DespatchingDomesticConsignments\\AddPacketConsignment',
      'AddPacketConsignmentResponse' => 'UkMail\\Prod\\DespatchingDomesticConsignments\\AddPacketConsignmentResponse',
      'AddInternationalConsignment' => 'UkMail\\Prod\\DespatchingDomesticConsignments\\AddInternationalConsignment',
      'AddInternationalConsignmentResponse' => 'UkMail\\Prod\\DespatchingDomesticConsignments\\AddInternationalConsignmentResponse',
      'AddReturnToSender' => 'UkMail\\Prod\\DespatchingDomesticConsignments\\AddReturnToSender',
      'AddReturnToSenderResponse' => 'UkMail\\Prod\\DespatchingDomesticConsignments\\AddReturnToSenderResponse',
      'AddSendToThirdParty' => 'UkMail\\Prod\\DespatchingDomesticConsignments\\AddSendToThirdParty',
      'AddSendToThirdPartyResponse' => 'UkMail\\Prod\\DespatchingDomesticConsignments\\AddSendToThirdPartyResponse',
      'CancelConsignment' => 'UkMail\\Prod\\DespatchingDomesticConsignments\\CancelConsignment',
      'CancelConsignmentResponse' => 'UkMail\\Prod\\DespatchingDomesticConsignments\\CancelConsignmentResponse',
      'CancelReturn' => 'UkMail\\Prod\\DespatchingDomesticConsignments\\CancelReturn',
      'CancelReturnResponse' => 'UkMail\\Prod\\DespatchingDomesticConsignments\\CancelReturnResponse',
      'AddDomesticConsignmentDeferred' => 'UkMail\\Prod\\DespatchingDomesticConsignments\\AddDomesticConsignmentDeferred',
      'AddDomesticConsignmentDeferredResponse' => 'UkMail\\Prod\\DespatchingDomesticConsignments\\AddDomesticConsignmentDeferredResponse',
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
