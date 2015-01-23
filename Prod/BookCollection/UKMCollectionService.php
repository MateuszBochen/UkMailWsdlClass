<?php

namespace UkMail\Prod\BookCollection;

class UKMCollectionService extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'AddCollectionWebRequest' => 'UkMail\\Prod\\BookCollection\\AddCollectionWebRequest',
      'WebRequest' => 'UkMail\\Prod\\BookCollection\\WebRequest',
      'UKMAddCollectionWebResponse' => 'UkMail\\Prod\\BookCollection\\UKMAddCollectionWebResponse',
      'UKMWebResponse' => 'UkMail\\Prod\\BookCollection\\UKMWebResponse',
      'ArrayOfUKMWebError' => 'UkMail\\Prod\\BookCollection\\ArrayOfUKMWebError',
      'UKMWebError' => 'UkMail\\Prod\\BookCollection\\UKMWebError',
      'ArrayOfUKMWebWarning' => 'UkMail\\Prod\\BookCollection\\ArrayOfUKMWebWarning',
      'UKMWebWarning' => 'UkMail\\Prod\\BookCollection\\UKMWebWarning',
      'BookCollection' => 'UkMail\\Prod\\BookCollection\\BookCollection',
      'BookCollectionResponse' => 'UkMail\\Prod\\BookCollection\\BookCollectionResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(), $wsdl = 'https://api.ukmail.com/Services/UKMCollectionServices/UKMCollectionService.svc?wsdl')
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
