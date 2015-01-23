<?php

namespace UkMail\Test\BookCollection;

class UKMCollectionService extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'AddCollectionWebRequest' => 'UkMail\\Test\\BookCollection\\AddCollectionWebRequest',
      'WebRequest' => 'UkMail\\Test\\BookCollection\\WebRequest',
      'UKMAddCollectionWebResponse' => 'UkMail\\Test\\BookCollection\\UKMAddCollectionWebResponse',
      'UKMWebResponse' => 'UkMail\\Test\\BookCollection\\UKMWebResponse',
      'ArrayOfUKMWebError' => 'UkMail\\Test\\BookCollection\\ArrayOfUKMWebError',
      'UKMWebError' => 'UkMail\\Test\\BookCollection\\UKMWebError',
      'ArrayOfUKMWebWarning' => 'UkMail\\Test\\BookCollection\\ArrayOfUKMWebWarning',
      'UKMWebWarning' => 'UkMail\\Test\\BookCollection\\UKMWebWarning',
      'BookCollection' => 'UkMail\\Test\\BookCollection\\BookCollection',
      'BookCollectionResponse' => 'UkMail\\Test\\BookCollection\\BookCollectionResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(), $wsdl = 'https://qa-api.ukmail.com/Services/UKMCollectionServices/UKMCollectionService.svc?wsdl')
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

    public function bookCollection(BookCollection $parameters)
    {
      return $this->__soapCall('BookCollection', array($parameters));
    }

}
