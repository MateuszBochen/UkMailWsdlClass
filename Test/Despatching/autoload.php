<?php


 function autoload_64c97d9cd144fbfce66a6e33d08b9b1b($class)
{
    $classes = array(
        'UkMail\Test\Despatching\UKMConsignmentService' => __DIR__ .'/UKMConsignmentService.php',
        'UkMail\Test\Despatching\ArrayOfbase64Binary' => __DIR__ .'/ArrayOfbase64Binary.php',
        'UkMail\Test\Despatching\UKMResultState' => __DIR__ .'/UKMResultState.php',
        'UkMail\Test\Despatching\AddDomesticConsignmentWebRequest' => __DIR__ .'/AddDomesticConsignmentWebRequest.php',
        'UkMail\Test\Despatching\AddConsignmentWebRequest' => __DIR__ .'/AddConsignmentWebRequest.php',
        'UkMail\Test\Despatching\WebRequest' => __DIR__ .'/WebRequest.php',
        'UkMail\Test\Despatching\AddressWebModel' => __DIR__ .'/AddressWebModel.php',
        'UkMail\Test\Despatching\PreDeliveryNotificationType' => __DIR__ .'/PreDeliveryNotificationType.php',
        'UkMail\Test\Despatching\UKMAddDomesticConsignmentWebResponse' => __DIR__ .'/UKMAddDomesticConsignmentWebResponse.php',
        'UkMail\Test\Despatching\UKMWebResponse' => __DIR__ .'/UKMWebResponse.php',
        'UkMail\Test\Despatching\ArrayOfUKMWebError' => __DIR__ .'/ArrayOfUKMWebError.php',
        'UkMail\Test\Despatching\UKMWebError' => __DIR__ .'/UKMWebError.php',
        'UkMail\Test\Despatching\ArrayOfUKMWebWarning' => __DIR__ .'/ArrayOfUKMWebWarning.php',
        'UkMail\Test\Despatching\UKMWebWarning' => __DIR__ .'/UKMWebWarning.php',
        'UkMail\Test\Despatching\AddPacketConsignmentWebRequest' => __DIR__ .'/AddPacketConsignmentWebRequest.php',
        'UkMail\Test\Despatching\PacketAddressWebModel' => __DIR__ .'/PacketAddressWebModel.php',
        'UkMail\Test\Despatching\UKMAddPacketConsignmentWebResponse' => __DIR__ .'/UKMAddPacketConsignmentWebResponse.php',
        'UkMail\Test\Despatching\AddInternationalConsignmentWebRequest' => __DIR__ .'/AddInternationalConsignmentWebRequest.php',
        'UkMail\Test\Despatching\InvoiceTypeList' => __DIR__ .'/InvoiceTypeList.php',
        'UkMail\Test\Despatching\UKMAddInternationalConsignmentWebResponse' => __DIR__ .'/UKMAddInternationalConsignmentWebResponse.php',
        'UkMail\Test\Despatching\AddReturnWebRequest' => __DIR__ .'/AddReturnWebRequest.php',
        'UkMail\Test\Despatching\UKMAddReturnToSenderWebResponse' => __DIR__ .'/UKMAddReturnToSenderWebResponse.php',
        'UkMail\Test\Despatching\AddSendToThirdPartyWebRequest' => __DIR__ .'/AddSendToThirdPartyWebRequest.php',
        'UkMail\Test\Despatching\UKMAddSendToThirdPartyWebResponse' => __DIR__ .'/UKMAddSendToThirdPartyWebResponse.php',
        'UkMail\Test\Despatching\CancelConsignmentWebRequest' => __DIR__ .'/CancelConsignmentWebRequest.php',
        'UkMail\Test\Despatching\UKMCancelConsignmentWebResponse' => __DIR__ .'/UKMCancelConsignmentWebResponse.php',
        'UkMail\Test\Despatching\CancelReturnWebRequest' => __DIR__ .'/CancelReturnWebRequest.php',
        'UkMail\Test\Despatching\UKMCancelReturnWebResponse' => __DIR__ .'/UKMCancelReturnWebResponse.php',
        'UkMail\Test\Despatching\AddDomesticConsignmentDeferredWebRequest' => __DIR__ .'/AddDomesticConsignmentDeferredWebRequest.php',
        'UkMail\Test\Despatching\AddConsignmentDeferredWebRequest' => __DIR__ .'/AddConsignmentDeferredWebRequest.php',
        'UkMail\Test\Despatching\LabelFormatType' => __DIR__ .'/LabelFormatType.php',
        'UkMail\Test\Despatching\AddDomesticConsignment' => __DIR__ .'/AddDomesticConsignment.php',
        'UkMail\Test\Despatching\AddDomesticConsignmentResponse' => __DIR__ .'/AddDomesticConsignmentResponse.php',
        'UkMail\Test\Despatching\AddPacketConsignment' => __DIR__ .'/AddPacketConsignment.php',
        'UkMail\Test\Despatching\AddPacketConsignmentResponse' => __DIR__ .'/AddPacketConsignmentResponse.php',
        'UkMail\Test\Despatching\AddInternationalConsignment' => __DIR__ .'/AddInternationalConsignment.php',
        'UkMail\Test\Despatching\AddInternationalConsignmentResponse' => __DIR__ .'/AddInternationalConsignmentResponse.php',
        'UkMail\Test\Despatching\AddReturnToSender' => __DIR__ .'/AddReturnToSender.php',
        'UkMail\Test\Despatching\AddReturnToSenderResponse' => __DIR__ .'/AddReturnToSenderResponse.php',
        'UkMail\Test\Despatching\AddSendToThirdParty' => __DIR__ .'/AddSendToThirdParty.php',
        'UkMail\Test\Despatching\AddSendToThirdPartyResponse' => __DIR__ .'/AddSendToThirdPartyResponse.php',
        'UkMail\Test\Despatching\CancelConsignment' => __DIR__ .'/CancelConsignment.php',
        'UkMail\Test\Despatching\CancelConsignmentResponse' => __DIR__ .'/CancelConsignmentResponse.php',
        'UkMail\Test\Despatching\CancelReturn' => __DIR__ .'/CancelReturn.php',
        'UkMail\Test\Despatching\CancelReturnResponse' => __DIR__ .'/CancelReturnResponse.php',
        'UkMail\Test\Despatching\AddDomesticConsignmentDeferred' => __DIR__ .'/AddDomesticConsignmentDeferred.php',
        'UkMail\Test\Despatching\AddDomesticConsignmentDeferredResponse' => __DIR__ .'/AddDomesticConsignmentDeferredResponse.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_64c97d9cd144fbfce66a6e33d08b9b1b');

// Do nothing. The rest is just leftovers from the code generation.
{
}
