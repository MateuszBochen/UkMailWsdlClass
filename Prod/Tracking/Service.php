<?php

namespace UkMail\Prod\Tracking;

class Service extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ManifestDomesticV1' => 'UkMail\\Prod\\Tracking\\ManifestDomesticV1',
      'DomesticV1' => 'UkMail\\Prod\\Tracking\\DomesticV1',
      'ArrayOfDomesticSubV1' => 'UkMail\\Prod\\Tracking\\ArrayOfDomesticSubV1',
      'DomesticSubV1' => 'UkMail\\Prod\\Tracking\\DomesticSubV1',
      'ArrayOfBoxV1' => 'UkMail\\Prod\\Tracking\\ArrayOfBoxV1',
      'BoxV1' => 'UkMail\\Prod\\Tracking\\BoxV1',
      'ManifestDomesticV1Response' => 'UkMail\\Prod\\Tracking\\ManifestDomesticV1Response',
      'ManifestResult' => 'UkMail\\Prod\\Tracking\\ManifestResult',
      'ArrayOfError' => 'UkMail\\Prod\\Tracking\\ArrayOfError',
      'Error' => 'UkMail\\Prod\\Tracking\\Error',
      'ManifestThirdPartyCollectionV1' => 'UkMail\\Prod\\Tracking\\ManifestThirdPartyCollectionV1',
      'ThirdPartyCollectionV1' => 'UkMail\\Prod\\Tracking\\ThirdPartyCollectionV1',
      'ManifestThirdPartyCollectionV1Response' => 'UkMail\\Prod\\Tracking\\ManifestThirdPartyCollectionV1Response',
      'ManifestCarriageForwardCollectionV1' => 'UkMail\\Prod\\Tracking\\ManifestCarriageForwardCollectionV1',
      'CarriageForwardCollectionV1' => 'UkMail\\Prod\\Tracking\\CarriageForwardCollectionV1',
      'ManifestCarriageForwardCollectionV1Response' => 'UkMail\\Prod\\Tracking\\ManifestCarriageForwardCollectionV1Response',
      'ManifestInternationalV1' => 'UkMail\\Prod\\Tracking\\ManifestInternationalV1',
      'InternationalV1' => 'UkMail\\Prod\\Tracking\\InternationalV1',
      'ManifestInternationalV1Response' => 'UkMail\\Prod\\Tracking\\ManifestInternationalV1Response',
      'ManifestParcelScanV1' => 'UkMail\\Prod\\Tracking\\ManifestParcelScanV1',
      'ParcelScanV1' => 'UkMail\\Prod\\Tracking\\ParcelScanV1',
      'ManifestParcelScanV1Response' => 'UkMail\\Prod\\Tracking\\ManifestParcelScanV1Response',
      'GetConsignmentNumberRangeForAccountV1' => 'UkMail\\Prod\\Tracking\\GetConsignmentNumberRangeForAccountV1',
      'GetConsignmentNumberRangeForAccountV1Response' => 'UkMail\\Prod\\Tracking\\GetConsignmentNumberRangeForAccountV1Response',
      'ConsignmentNumberRangeResult' => 'UkMail\\Prod\\Tracking\\ConsignmentNumberRangeResult',
      'ConsignmentNumberRange' => 'UkMail\\Prod\\Tracking\\ConsignmentNumberRange',
      'GetSignaturesForConsignmentNumberV1' => 'UkMail\\Prod\\Tracking\\GetSignaturesForConsignmentNumberV1',
      'GetSignaturesForConsignmentNumberV1Response' => 'UkMail\\Prod\\Tracking\\GetSignaturesForConsignmentNumberV1Response',
      'SignatureResult' => 'UkMail\\Prod\\Tracking\\SignatureResult',
      'ArrayOfSignatureDetails' => 'UkMail\\Prod\\Tracking\\ArrayOfSignatureDetails',
      'SignatureDetails' => 'UkMail\\Prod\\Tracking\\SignatureDetails',
      'ConsignmentTrackingTestWebServiceV1' => 'UkMail\\Prod\\Tracking\\ConsignmentTrackingTestWebServiceV1',
      'ConsignmentTrackingTestWebServiceV1Response' => 'UkMail\\Prod\\Tracking\\ConsignmentTrackingTestWebServiceV1Response',
      'ConsTrackingTestResult' => 'UkMail\\Prod\\Tracking\\ConsTrackingTestResult',
      'ConsignmentTrackingGetConsignmentDetailsV1' => 'UkMail\\Prod\\Tracking\\ConsignmentTrackingGetConsignmentDetailsV1',
      'ConsignmentTrackingGetConsignmentDetailsV1Response' => 'UkMail\\Prod\\Tracking\\ConsignmentTrackingGetConsignmentDetailsV1Response',
      'ConsignmentTrackingGetDetailsResult' => 'UkMail\\Prod\\Tracking\\ConsignmentTrackingGetDetailsResult',
      'ArrayOfGetConsignmentDetailsSub' => 'UkMail\\Prod\\Tracking\\ArrayOfGetConsignmentDetailsSub',
      'GetConsignmentDetailsSub' => 'UkMail\\Prod\\Tracking\\GetConsignmentDetailsSub',
      'ArrayOfGetConsignmentDetailsPod' => 'UkMail\\Prod\\Tracking\\ArrayOfGetConsignmentDetailsPod',
      'GetConsignmentDetailsPod' => 'UkMail\\Prod\\Tracking\\GetConsignmentDetailsPod',
      'ArrayOfGetConsignmentDetailsStatus' => 'UkMail\\Prod\\Tracking\\ArrayOfGetConsignmentDetailsStatus',
      'GetConsignmentDetailsStatus' => 'UkMail\\Prod\\Tracking\\GetConsignmentDetailsStatus',
      'ConsignmentTrackingSearchV1' => 'UkMail\\Prod\\Tracking\\ConsignmentTrackingSearchV1',
      'ConsignmentTrackingSearchV1Response' => 'UkMail\\Prod\\Tracking\\ConsignmentTrackingSearchV1Response',
      'ConsignmentTrackingSearchResult' => 'UkMail\\Prod\\Tracking\\ConsignmentTrackingSearchResult',
      'ArrayOfConsignmentSearchResult' => 'UkMail\\Prod\\Tracking\\ArrayOfConsignmentSearchResult',
      'ConsignmentSearchResult' => 'UkMail\\Prod\\Tracking\\ConsignmentSearchResult',
      'ConsignmentTrackingGetStatusV1' => 'UkMail\\Prod\\Tracking\\ConsignmentTrackingGetStatusV1',
      'ConsignmentTrackingGetStatusV1Response' => 'UkMail\\Prod\\Tracking\\ConsignmentTrackingGetStatusV1Response',
      'ConsignmentTrackingGetStatusResult' => 'UkMail\\Prod\\Tracking\\ConsignmentTrackingGetStatusResult',
      'ArrayOfGetConsignmentStatus' => 'UkMail\\Prod\\Tracking\\ArrayOfGetConsignmentStatus',
      'GetConsignmentStatus' => 'UkMail\\Prod\\Tracking\\GetConsignmentStatus',
      'ConsignmentTrackingGetFullDetailsV1' => 'UkMail\\Prod\\Tracking\\ConsignmentTrackingGetFullDetailsV1',
      'ConsignmentTrackingGetFullDetailsV1Response' => 'UkMail\\Prod\\Tracking\\ConsignmentTrackingGetFullDetailsV1Response',
      'ConsignmentTrackingGetFullDetailsResult' => 'UkMail\\Prod\\Tracking\\ConsignmentTrackingGetFullDetailsResult',
      'ConsignmentTrackingGetFullDetails' => 'UkMail\\Prod\\Tracking\\ConsignmentTrackingGetFullDetails',
      'ArrayOfGetFullConsignmentDetailsPod' => 'UkMail\\Prod\\Tracking\\ArrayOfGetFullConsignmentDetailsPod',
      'GetFullConsignmentDetailsPod' => 'UkMail\\Prod\\Tracking\\GetFullConsignmentDetailsPod',
      'ArrayOfConsignmentScan' => 'UkMail\\Prod\\Tracking\\ArrayOfConsignmentScan',
      'ConsignmentScan' => 'UkMail\\Prod\\Tracking\\ConsignmentScan',
      'ArrayOfConsignmentDiscrepency' => 'UkMail\\Prod\\Tracking\\ArrayOfConsignmentDiscrepency',
      'ConsignmentDiscrepency' => 'UkMail\\Prod\\Tracking\\ConsignmentDiscrepency',
      'ArrayOfConsignmentNote' => 'UkMail\\Prod\\Tracking\\ArrayOfConsignmentNote',
      'ConsignmentNote' => 'UkMail\\Prod\\Tracking\\ConsignmentNote',
      'ArrayOfConsignmentPOC' => 'UkMail\\Prod\\Tracking\\ArrayOfConsignmentPOC',
      'ConsignmentPOC' => 'UkMail\\Prod\\Tracking\\ConsignmentPOC',
      'ConsignmentTrackingGetConsignmentDetailsV2' => 'UkMail\\Prod\\Tracking\\ConsignmentTrackingGetConsignmentDetailsV2',
      'ConsignmentTrackingGetConsignmentDetailsV2Response' => 'UkMail\\Prod\\Tracking\\ConsignmentTrackingGetConsignmentDetailsV2Response',
      'ConsignmentTrackingGetDetailsResultV2' => 'UkMail\\Prod\\Tracking\\ConsignmentTrackingGetDetailsResultV2',
      'ConsignmentTrackingGetConsignmentDetailsV3' => 'UkMail\\Prod\\Tracking\\ConsignmentTrackingGetConsignmentDetailsV3',
      'ConsignmentTrackingGetConsignmentDetailsV3Response' => 'UkMail\\Prod\\Tracking\\ConsignmentTrackingGetConsignmentDetailsV3Response',
      'ConsignmentTrackingGetDetailsResultV3' => 'UkMail\\Prod\\Tracking\\ConsignmentTrackingGetDetailsResultV3',
      'ConsignmentTrackingGetFullDetailsV2' => 'UkMail\\Prod\\Tracking\\ConsignmentTrackingGetFullDetailsV2',
      'ConsignmentTrackingGetFullDetailsV2Response' => 'UkMail\\Prod\\Tracking\\ConsignmentTrackingGetFullDetailsV2Response',
      'ConsignmentTrackingGetFullDetailsResultV2' => 'UkMail\\Prod\\Tracking\\ConsignmentTrackingGetFullDetailsResultV2',
      'ArrayOfGetFullConsignmentDetailsPodV2' => 'UkMail\\Prod\\Tracking\\ArrayOfGetFullConsignmentDetailsPodV2',
      'GetFullConsignmentDetailsPodV2' => 'UkMail\\Prod\\Tracking\\GetFullConsignmentDetailsPodV2',
      'ConsignmentTrackingGetFullDetailsV3' => 'UkMail\\Prod\\Tracking\\ConsignmentTrackingGetFullDetailsV3',
      'ConsignmentTrackingGetFullDetailsV3Response' => 'UkMail\\Prod\\Tracking\\ConsignmentTrackingGetFullDetailsV3Response',
      'ConsignmentTrackingGetFullDetailsResultV3' => 'UkMail\\Prod\\Tracking\\ConsignmentTrackingGetFullDetailsResultV3',
      'GetEstimatedTimeOfArrivalForPostcode' => 'UkMail\\Prod\\Tracking\\GetEstimatedTimeOfArrivalForPostcode',
      'GetEstimatedTimeOfArrivalForPostcodeResponse' => 'UkMail\\Prod\\Tracking\\GetEstimatedTimeOfArrivalForPostcodeResponse',
      'GetEstimatedTimeOfArrivalForPostcodeResult' => 'UkMail\\Prod\\Tracking\\GetEstimatedTimeOfArrivalForPostcodeResult',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(), $wsdl = 'http://webapp-cl.internet-delivery.com/ThirdPartyIntegration/ThirdPartyIntegrationService.asmx?wsdl')
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

    /**
     * Submit data about a domestic consignment. Home delivery consignments can be submitted using this method.
     *
     * @param ManifestDomesticV1 $parameters
     * @return ManifestDomesticV1Response
     */
    public function ManifestDomesticV1(ManifestDomesticV1 $parameters)
    {
      return $this->__soapCall('ManifestDomesticV1', array($parameters));
    }

    /**
     * Submit data about a third party collection, ie. pickup from a third party address and deliver to customer.
     *
     * @param ManifestThirdPartyCollectionV1 $parameters
     * @return ManifestThirdPartyCollectionV1Response
     */
    public function ManifestThirdPartyCollectionV1(ManifestThirdPartyCollectionV1 $parameters)
    {
      return $this->__soapCall('ManifestThirdPartyCollectionV1', array($parameters));
    }

    /**
     * Submit data about a carriage forward collection, ie. collect from one third party address and deliver to another third party address.
     *
     * @param ManifestCarriageForwardCollectionV1 $parameters
     * @return ManifestCarriageForwardCollectionV1Response
     */
    public function ManifestCarriageForwardCollectionV1(ManifestCarriageForwardCollectionV1 $parameters)
    {
      return $this->__soapCall('ManifestCarriageForwardCollectionV1', array($parameters));
    }

    /**
     * Submit data about a international consignment.
     *
     * @param ManifestInternationalV1 $parameters
     * @return ManifestInternationalV1Response
     */
    public function ManifestInternationalV1(ManifestInternationalV1 $parameters)
    {
      return $this->__soapCall('ManifestInternationalV1', array($parameters));
    }

    /**
     * Submit data about a parcel scan.
     *
     * @param ManifestParcelScanV1 $parameters
     * @return ManifestParcelScanV1Response
     */
    public function ManifestParcelScanV1(ManifestParcelScanV1 $parameters)
    {
      return $this->__soapCall('ManifestParcelScanV1', array($parameters));
    }

    /**
     * Retrieve the a new consignment number range for the specified account number.
     *
     * @param GetConsignmentNumberRangeForAccountV1 $parameters
     * @return GetConsignmentNumberRangeForAccountV1Response
     */
    public function GetConsignmentNumberRangeForAccountV1(GetConsignmentNumberRangeForAccountV1 $parameters)
    {
      return $this->__soapCall('GetConsignmentNumberRangeForAccountV1', array($parameters));
    }

    /**
     * Retrieve all signatures, in the specified image format, that is associated to the specified consignment number.
     *
     * @param GetSignaturesForConsignmentNumberV1 $parameters
     * @return GetSignaturesForConsignmentNumberV1Response
     */
    public function GetSignaturesForConsignmentNumberV1(GetSignaturesForConsignmentNumberV1 $parameters)
    {
      return $this->__soapCall('GetSignaturesForConsignmentNumberV1', array($parameters));
    }

    /**
     * Test the Consignment Tracking Web Service
     *
     * @param ConsignmentTrackingTestWebServiceV1 $parameters
     * @return ConsignmentTrackingTestWebServiceV1Response
     */
    public function ConsignmentTrackingTestWebServiceV1(ConsignmentTrackingTestWebServiceV1 $parameters)
    {
      return $this->__soapCall('ConsignmentTrackingTestWebServiceV1', array($parameters));
    }

    /**
     * Get the details for a given Consignment
     *
     * @param ConsignmentTrackingGetConsignmentDetailsV1 $parameters
     * @return ConsignmentTrackingGetConsignmentDetailsV1Response
     */
    public function ConsignmentTrackingGetConsignmentDetailsV1(ConsignmentTrackingGetConsignmentDetailsV1 $parameters)
    {
      return $this->__soapCall('ConsignmentTrackingGetConsignmentDetailsV1', array($parameters));
    }

    /**
     * Search for a Consignment
     *
     * @param ConsignmentTrackingSearchV1 $parameters
     * @return ConsignmentTrackingSearchV1Response
     */
    public function ConsignmentTrackingSearchV1(ConsignmentTrackingSearchV1 $parameters)
    {
      return $this->__soapCall('ConsignmentTrackingSearchV1', array($parameters));
    }

    /**
     * Just return the overall Consignment status
     *
     * @param ConsignmentTrackingGetStatusV1 $parameters
     * @return ConsignmentTrackingGetStatusV1Response
     */
    public function ConsignmentTrackingGetStatusV1(ConsignmentTrackingGetStatusV1 $parameters)
    {
      return $this->__soapCall('ConsignmentTrackingGetStatusV1', array($parameters));
    }

    /**
     * Returns the full details for a given Consignment, if that consignment is available to the given user.
     *
     * @param ConsignmentTrackingGetFullDetailsV1 $parameters
     * @return ConsignmentTrackingGetFullDetailsV1Response
     */
    public function ConsignmentTrackingGetFullDetailsV1(ConsignmentTrackingGetFullDetailsV1 $parameters)
    {
      return $this->__soapCall('ConsignmentTrackingGetFullDetailsV1', array($parameters));
    }

    /**
     * Get the details for a given Consignment
     *
     * @param ConsignmentTrackingGetConsignmentDetailsV2 $parameters
     * @return ConsignmentTrackingGetConsignmentDetailsV2Response
     */
    public function ConsignmentTrackingGetConsignmentDetailsV2(ConsignmentTrackingGetConsignmentDetailsV2 $parameters)
    {
      return $this->__soapCall('ConsignmentTrackingGetConsignmentDetailsV2', array($parameters));
    }

    /**
     * Get the details for a given Consignment
     *
     * @param ConsignmentTrackingGetConsignmentDetailsV3 $parameters
     * @return ConsignmentTrackingGetConsignmentDetailsV3Response
     */
    public function ConsignmentTrackingGetConsignmentDetailsV3(ConsignmentTrackingGetConsignmentDetailsV3 $parameters)
    {
      return $this->__soapCall('ConsignmentTrackingGetConsignmentDetailsV3', array($parameters));
    }

    /**
     * Returns the full details for a given Consignment, if that consignment is available to the given user.
     *
     * @param ConsignmentTrackingGetFullDetailsV2 $parameters
     * @return ConsignmentTrackingGetFullDetailsV2Response
     */
    public function ConsignmentTrackingGetFullDetailsV2(ConsignmentTrackingGetFullDetailsV2 $parameters)
    {
      return $this->__soapCall('ConsignmentTrackingGetFullDetailsV2', array($parameters));
    }

    /**
     * Returns the full details for a given Consignment, if that consignment is available to the given user.
     *
     * @param ConsignmentTrackingGetFullDetailsV3 $parameters
     * @return ConsignmentTrackingGetFullDetailsV3Response
     */
    public function ConsignmentTrackingGetFullDetailsV3(ConsignmentTrackingGetFullDetailsV3 $parameters)
    {
      return $this->__soapCall('ConsignmentTrackingGetFullDetailsV3', array($parameters));
    }

    /**
     * Get the estimated time of arrival for a given postcode.
     *
     * @param GetEstimatedTimeOfArrivalForPostcode $parameters
     * @return GetEstimatedTimeOfArrivalForPostcodeResponse
     */
    public function GetEstimatedTimeOfArrivalForPostcode(GetEstimatedTimeOfArrivalForPostcode $parameters)
    {
      return $this->__soapCall('GetEstimatedTimeOfArrivalForPostcode', array($parameters));
    }

}
