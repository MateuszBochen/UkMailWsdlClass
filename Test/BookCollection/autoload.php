<?php


 function autoload_5b9c204604d31acd46b1b13ddf9cf712($class)
{
    $classes = array(
        'UkMail\Test\BookCollection\UKMCollectionService' => __DIR__ .'/UKMCollectionService.php',
        'UkMail\Test\BookCollection\UKMResultState' => __DIR__ .'/UKMResultState.php',
        'UkMail\Test\BookCollection\AddCollectionWebRequest' => __DIR__ .'/AddCollectionWebRequest.php',
        'UkMail\Test\BookCollection\WebRequest' => __DIR__ .'/WebRequest.php',
        'UkMail\Test\BookCollection\UKMAddCollectionWebResponse' => __DIR__ .'/UKMAddCollectionWebResponse.php',
        'UkMail\Test\BookCollection\UKMWebResponse' => __DIR__ .'/UKMWebResponse.php',
        'UkMail\Test\BookCollection\ArrayOfUKMWebError' => __DIR__ .'/ArrayOfUKMWebError.php',
        'UkMail\Test\BookCollection\UKMWebError' => __DIR__ .'/UKMWebError.php',
        'UkMail\Test\BookCollection\ArrayOfUKMWebWarning' => __DIR__ .'/ArrayOfUKMWebWarning.php',
        'UkMail\Test\BookCollection\UKMWebWarning' => __DIR__ .'/UKMWebWarning.php',
        'UkMail\Test\BookCollection\BookCollection' => __DIR__ .'/BookCollection.php',
        'UkMail\Test\BookCollection\BookCollectionResponse' => __DIR__ .'/BookCollectionResponse.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_5b9c204604d31acd46b1b13ddf9cf712');

// Do nothing. The rest is just leftovers from the code generation.
{
}
