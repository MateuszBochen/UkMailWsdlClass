<?php

namespace UkMail\Test\Tracking;

class Service extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ManifestDomesticV1' => 'UkMail\\Test\\Tracking\\ManifestDomesticV1',
      'DomesticV1' => 'UkMail\\Test\\Tracking\\DomesticV1',
      'ArrayOfDomesticSubV1' => 'UkMail\\Test\\Tracking\\ArrayOfDomesticSubV1',
      'DomesticSubV1' => 'UkMail\\Test\\Tracking\\DomesticSubV1',
      'ArrayOfBoxV1' => 'UkMail\\Test\\Tracking\\ArrayOfBoxV1',
      'BoxV1' => 'UkMail\\Test\\Tracking\\BoxV1',
      'ManifestDomesticV1Response' => 'UkMail\\Test\\Tracking\\ManifestDomesticV1Response',
      'ManifestResult' => 'UkMail\\Test\\Tracking\\ManifestResult',
      'ArrayOfError' => 'UkMail\\Test\\Tracking\\ArrayOfError',
      'Error' => 'UkMail\\Test\\Tracking\\Error',
      'ManifestThirdPartyCollectionV1' => 'UkMail\\Test\\Tracking\\ManifestThirdPartyCollectionV1',
      'ThirdPartyCollectionV1' => 'UkMail\\Test\\Tracking\\ThirdPartyCollectionV1',
      'ManifestThirdPartyCollectionV1Response' => 'UkMail\\Test\\Tracking\\ManifestThirdPartyCollectionV1Response',
      'ManifestCarriageForwardCollectionV1' => 'UkMail\\Test\\Tracking\\ManifestCarriageForwardCollectionV1',
      'CarriageForwardCollectionV1' => 'UkMail\\Test\\Tracking\\CarriageForwardCollectionV1',
      'ManifestCarriageForwardCollectionV1Response' => 'UkMail\\Test\\Tracking\\ManifestCarriageForwardCollectionV1Response',
      'ManifestInternationalV1' => 'UkMail\\Test\\Tracking\\ManifestInternationalV1',
      'InternationalV1' => 'UkMail\\Test\\Tracking\\InternationalV1',
      'ManifestInternationalV1Response' => 'UkMail\\Test\\Tracking\\ManifestInternationalV1Response',
      'ManifestParcelScanV1' => 'UkMail\\Test\\Tracking\\ManifestParcelScanV1',
      'ParcelScanV1' => 'UkMail\\Test\\Tracking\\ParcelScanV1',
      'ManifestParcelScanV1Response' => 'UkMail\\Test\\Tracking\\ManifestParcelScanV1Response',
      'GetConsignmentNumberRangeForAccountV1' => 'UkMail\\Test\\Tracking\\GetConsignmentNumberRangeForAccountV1',
      'GetConsignmentNumberRangeForAccountV1Response' => 'UkMail\\Test\\Tracking\\GetConsignmentNumberRangeForAccountV1Response',
      'ConsignmentNumberRangeResult' => 'UkMail\\Test\\Tracking\\ConsignmentNumberRangeResult',
      'ConsignmentNumberRange' => 'UkMail\\Test\\Tracking\\ConsignmentNumberRange',
      'GetSignaturesForConsignmentNumberV1' => 'UkMail\\Test\\Tracking\\GetSignaturesForConsignmentNumberV1',
      'GetSignaturesForConsignmentNumberV1Response' => 'UkMail\\Test\\Tracking\\GetSignaturesForConsignmentNumberV1Response',
      'SignatureResult' => 'UkMail\\Test\\Tracking\\SignatureResult',
      'ArrayOfSignatureDetails' => 'UkMail\\Test\\Tracking\\ArrayOfSignatureDetails',
      'SignatureDetails' => 'UkMail\\Test\\Tracking\\SignatureDetails',
      'ConsignmentTrackingTestWebServiceV1' => 'UkMail\\Test\\Tracking\\ConsignmentTrackingTestWebServiceV1',
      'ConsignmentTrackingTestWebServiceV1Response' => 'UkMail\\Test\\Tracking\\ConsignmentTrackingTestWebServiceV1Response',
      'ConsTrackingTestResult' => 'UkMail\\Test\\Tracking\\ConsTrackingTestResult',
      'ConsignmentTrackingGetConsignmentDetailsV1' => 'UkMail\\Test\\Tracking\\ConsignmentTrackingGetConsignmentDetailsV1',
      'ConsignmentTrackingGetConsignmentDetailsV1Response' => 'UkMail\\Test\\Tracking\\ConsignmentTrackingGetConsignmentDetailsV1Response',
      'ConsignmentTrackingGetDetailsResult' => 'UkMail\\Test\\Tracking\\ConsignmentTrackingGetDetailsResult',
      'ArrayOfGetConsignmentDetailsSub' => 'UkMail\\Test\\Tracking\\ArrayOfGetConsignmentDetailsSub',
      'GetConsignmentDetailsSub' => 'UkMail\\Test\\Tracking\\GetConsignmentDetailsSub',
      'ArrayOfGetConsignmentDetailsPod' => 'UkMail\\Test\\Tracking\\ArrayOfGetConsignmentDetailsPod',
      'GetConsignmentDetailsPod' => 'UkMail\\Test\\Tracking\\GetConsignmentDetailsPod',
      'ArrayOfGetConsignmentDetailsStatus' => 'UkMail\\Test\\Tracking\\ArrayOfGetConsignmentDetailsStatus',
      'GetConsignmentDetailsStatus' => 'UkMail\\Test\\Tracking\\GetConsignmentDetailsStatus',
      'ConsignmentTrackingSearchV1' => 'UkMail\\Test\\Tracking\\ConsignmentTrackingSearchV1',
      'ConsignmentTrackingSearchV1Response' => 'UkMail\\Test\\Tracking\\ConsignmentTrackingSearchV1Response',
      'ConsignmentTrackingSearchResult' => 'UkMail\\Test\\Tracking\\ConsignmentTrackingSearchResult',
      'ArrayOfConsignmentSearchResult' => 'UkMail\\Test\\Tracking\\ArrayOfConsignmentSearchResult',
      'ConsignmentSearchResult' => 'UkMail\\Test\\Tracking\\ConsignmentSearchResult',
      'ConsignmentTrackingGetStatusV1' => 'UkMail\\Test\\Tracking\\ConsignmentTrackingGetStatusV1',
      'ConsignmentTrackingGetStatusV1Response' => 'UkMail\\Test\\Tracking\\ConsignmentTrackingGetStatusV1Response',
      'ConsignmentTrackingGetStatusResult' => 'UkMail\\Test\\Tracking\\ConsignmentTrackingGetStatusResult',
      'ArrayOfGetConsignmentStatus' => 'UkMail\\Test\\Tracking\\ArrayOfGetConsignmentStatus',
      'GetConsignmentStatus' => 'UkMail\\Test\\Tracking\\GetConsignmentStatus',
      'ConsignmentTrackingGetFullDetailsV1' => 'UkMail\\Test\\Tracking\\ConsignmentTrackingGetFullDetailsV1',
      'ConsignmentTrackingGetFullDetailsV1Response' => 'UkMail\\Test\\Tracking\\ConsignmentTrackingGetFullDetailsV1Response',
      'ConsignmentTrackingGetFullDetailsResult' => 'UkMail\\Test\\Tracking\\ConsignmentTrackingGetFullDetailsResult',
      'ConsignmentTrackingGetFullDetails' => 'UkMail\\Test\\Tracking\\ConsignmentTrackingGetFullDetails',
      'ArrayOfGetFullConsignmentDetailsPod' => 'UkMail\\Test\\Tracking\\ArrayOfGetFullConsignmentDetailsPod',
      'GetFullConsignmentDetailsPod' => 'UkMail\\Test\\Tracking\\GetFullConsignmentDetailsPod',
      'ArrayOfConsignmentScan' => 'UkMail\\Test\\Tracking\\ArrayOfConsignmentScan',
      'ConsignmentScan' => 'UkMail\\Test\\Tracking\\ConsignmentScan',
      'ArrayOfConsignmentDiscrepency' => 'UkMail\\Test\\Tracking\\ArrayOfConsignmentDiscrepency',
      'ConsignmentDiscrepency' => 'UkMail\\Test\\Tracking\\ConsignmentDiscrepency',
      'ArrayOfConsignmentNote' => 'UkMail\\Test\\Tracking\\ArrayOfConsignmentNote',
      'ConsignmentNote' => 'UkMail\\Test\\Tracking\\ConsignmentNote',
      'ArrayOfConsignmentPOC' => 'UkMail\\Test\\Tracking\\ArrayOfConsignmentPOC',
      'ConsignmentPOC' => 'UkMail\\Test\\Tracking\\ConsignmentPOC',
      'ConsignmentTrackingGetConsignmentDetailsV2' => 'UkMail\\Test\\Tracking\\ConsignmentTrackingGetConsignmentDetailsV2',
      'ConsignmentTrackingGetConsignmentDetailsV2Response' => 'UkMail\\Test\\Tracking\\ConsignmentTrackingGetConsignmentDetailsV2Response',
      'ConsignmentTrackingGetDetailsResultV2' => 'UkMail\\Test\\Tracking\\ConsignmentTrackingGetDetailsResultV2',
      'ConsignmentTrackingGetConsignmentDetailsV3' => 'UkMail\\Test\\Tracking\\ConsignmentTrackingGetConsignmentDetailsV3',
      'ConsignmentTrackingGetConsignmentDetailsV3Response' => 'UkMail\\Test\\Tracking\\ConsignmentTrackingGetConsignmentDetailsV3Response',
      'ConsignmentTrackingGetDetailsResultV3' => 'UkMail\\Test\\Tracking\\ConsignmentTrackingGetDetailsResultV3',
      'ConsignmentTrackingGetFullDetailsV2' => 'UkMail\\Test\\Tracking\\ConsignmentTrackingGetFullDetailsV2',
      'ConsignmentTrackingGetFullDetailsV2Response' => 'UkMail\\Test\\Tracking\\ConsignmentTrackingGetFullDetailsV2Response',
      'ConsignmentTrackingGetFullDetailsResultV2' => 'UkMail\\Test\\Tracking\\ConsignmentTrackingGetFullDetailsResultV2',
      'ArrayOfGetFullConsignmentDetailsPodV2' => 'UkMail\\Test\\Tracking\\ArrayOfGetFullConsignmentDetailsPodV2',
      'GetFullConsignmentDetailsPodV2' => 'UkMail\\Test\\Tracking\\GetFullConsignmentDetailsPodV2',
      'ConsignmentTrackingGetFullDetailsV3' => 'UkMail\\Test\\Tracking\\ConsignmentTrackingGetFullDetailsV3',
      'ConsignmentTrackingGetFullDetailsV3Response' => 'UkMail\\Test\\Tracking\\ConsignmentTrackingGetFullDetailsV3Response',
      'ConsignmentTrackingGetFullDetailsResultV3' => 'UkMail\\Test\\Tracking\\ConsignmentTrackingGetFullDetailsResultV3',
      'GetEstimatedTimeOfArrivalForPostcode' => 'UkMail\\Test\\Tracking\\GetEstimatedTimeOfArrivalForPostcode',
      'GetEstimatedTimeOfArrivalForPostcodeResponse' => 'UkMail\\Test\\Tracking\\GetEstimatedTimeOfArrivalForPostcodeResponse',
      'GetEstimatedTimeOfArrivalForPostcodeResult' => 'UkMail\\Test\\Tracking\\GetEstimatedTimeOfArrivalForPostcodeResult',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(), $wsdl = 'http://apollo.internet-delivery.com/ThirdPartyIntegration/ThirdPartyIntegrationService.asmx?wsdl')
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
