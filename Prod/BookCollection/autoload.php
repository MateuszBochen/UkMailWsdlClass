<?php


 function autoload_fcbc52afc05f66113f1294025574ad92($class)
{
    $classes = array(
        'UkMail\Prod\BookCollection\UKMCollectionService' => __DIR__ .'/UKMCollectionService.php',
        'UkMail\Prod\BookCollection\UKMResultState' => __DIR__ .'/UKMResultState.php',
        'UkMail\Prod\BookCollection\AddCollectionWebRequest' => __DIR__ .'/AddCollectionWebRequest.php',
        'UkMail\Prod\BookCollection\WebRequest' => __DIR__ .'/WebRequest.php',
        'UkMail\Prod\BookCollection\UKMAddCollectionWebResponse' => __DIR__ .'/UKMAddCollectionWebResponse.php',
        'UkMail\Prod\BookCollection\UKMWebResponse' => __DIR__ .'/UKMWebResponse.php',
        'UkMail\Prod\BookCollection\ArrayOfUKMWebError' => __DIR__ .'/ArrayOfUKMWebError.php',
        'UkMail\Prod\BookCollection\UKMWebError' => __DIR__ .'/UKMWebError.php',
        'UkMail\Prod\BookCollection\ArrayOfUKMWebWarning' => __DIR__ .'/ArrayOfUKMWebWarning.php',
        'UkMail\Prod\BookCollection\UKMWebWarning' => __DIR__ .'/UKMWebWarning.php',
        'UkMail\Prod\BookCollection\BookCollection' => __DIR__ .'/BookCollection.php',
        'UkMail\Prod\BookCollection\BookCollectionResponse' => __DIR__ .'/BookCollectionResponse.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_fcbc52afc05f66113f1294025574ad92');

// Do nothing. The rest is just leftovers from the code generation.
{
}
