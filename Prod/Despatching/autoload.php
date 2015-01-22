<?php


 function autoload_48a9cfbc88eff60f57d68a0529830847($class)
{
    $classes = array(
        'UkMail\Prod\Despatching\UKMConsignmentService' => __DIR__ .'/UKMConsignmentService.php',
        'UkMail\Prod\Despatching\ArrayOfbase64Binary' => __DIR__ .'/ArrayOfbase64Binary.php',
        'UkMail\Prod\Despatching\UKMResultState' => __DIR__ .'/UKMResultState.php',
        'UkMail\Prod\Despatching\AddDomesticConsignmentWebRequest' => __DIR__ .'/AddDomesticConsignmentWebRequest.php',
        'UkMail\Prod\Despatching\AddConsignmentWebRequest' => __DIR__ .'/AddConsignmentWebRequest.php',
        'UkMail\Prod\Despatching\WebRequest' => __DIR__ .'/WebRequest.php',
        'UkMail\Prod\Despatching\AddressWebModel' => __DIR__ .'/AddressWebModel.php',
        'UkMail\Prod\Despatching\PreDeliveryNotificationType' => __DIR__ .'/PreDeliveryNotificationType.php',
        'UkMail\Prod\Despatching\UKMAddDomesticConsignmentWebResponse' => __DIR__ .'/UKMAddDomesticConsignmentWebResponse.php',
        'UkMail\Prod\Despatching\UKMWebResponse' => __DIR__ .'/UKMWebResponse.php',
        'UkMail\Prod\Despatching\ArrayOfUKMWebError' => __DIR__ .'/ArrayOfUKMWebError.php',
        'UkMail\Prod\Despatching\UKMWebError' => __DIR__ .'/UKMWebError.php',
        'UkMail\Prod\Despatching\ArrayOfUKMWebWarning' => __DIR__ .'/ArrayOfUKMWebWarning.php',
        'UkMail\Prod\Despatching\UKMWebWarning' => __DIR__ .'/UKMWebWarning.php',
        'UkMail\Prod\Despatching\AddPacketConsignmentWebRequest' => __DIR__ .'/AddPacketConsignmentWebRequest.php',
        'UkMail\Prod\Despatching\PacketAddressWebModel' => __DIR__ .'/PacketAddressWebModel.php',
        'UkMail\Prod\Despatching\UKMAddPacketConsignmentWebResponse' => __DIR__ .'/UKMAddPacketConsignmentWebResponse.php',
        'UkMail\Prod\Despatching\AddInternationalConsignmentWebRequest' => __DIR__ .'/AddInternationalConsignmentWebRequest.php',
        'UkMail\Prod\Despatching\InvoiceTypeList' => __DIR__ .'/InvoiceTypeList.php',
        'UkMail\Prod\Despatching\UKMAddInternationalConsignmentWebResponse' => __DIR__ .'/UKMAddInternationalConsignmentWebResponse.php',
        'UkMail\Prod\Despatching\AddReturnWebRequest' => __DIR__ .'/AddReturnWebRequest.php',
        'UkMail\Prod\Despatching\UKMAddReturnToSenderWebResponse' => __DIR__ .'/UKMAddReturnToSenderWebResponse.php',
        'UkMail\Prod\Despatching\AddSendToThirdPartyWebRequest' => __DIR__ .'/AddSendToThirdPartyWebRequest.php',
        'UkMail\Prod\Despatching\UKMAddSendToThirdPartyWebResponse' => __DIR__ .'/UKMAddSendToThirdPartyWebResponse.php',
        'UkMail\Prod\Despatching\CancelConsignmentWebRequest' => __DIR__ .'/CancelConsignmentWebRequest.php',
        'UkMail\Prod\Despatching\UKMCancelConsignmentWebResponse' => __DIR__ .'/UKMCancelConsignmentWebResponse.php',
        'UkMail\Prod\Despatching\CancelReturnWebRequest' => __DIR__ .'/CancelReturnWebRequest.php',
        'UkMail\Prod\Despatching\UKMCancelReturnWebResponse' => __DIR__ .'/UKMCancelReturnWebResponse.php',
        'UkMail\Prod\Despatching\AddDomesticConsignmentDeferredWebRequest' => __DIR__ .'/AddDomesticConsignmentDeferredWebRequest.php',
        'UkMail\Prod\Despatching\AddConsignmentDeferredWebRequest' => __DIR__ .'/AddConsignmentDeferredWebRequest.php',
        'UkMail\Prod\Despatching\LabelFormatType' => __DIR__ .'/LabelFormatType.php',
        'UkMail\Prod\Despatching\AddDomesticConsignment' => __DIR__ .'/AddDomesticConsignment.php',
        'UkMail\Prod\Despatching\AddDomesticConsignmentResponse' => __DIR__ .'/AddDomesticConsignmentResponse.php',
        'UkMail\Prod\Despatching\AddPacketConsignment' => __DIR__ .'/AddPacketConsignment.php',
        'UkMail\Prod\Despatching\AddPacketConsignmentResponse' => __DIR__ .'/AddPacketConsignmentResponse.php',
        'UkMail\Prod\Despatching\AddInternationalConsignment' => __DIR__ .'/AddInternationalConsignment.php',
        'UkMail\Prod\Despatching\AddInternationalConsignmentResponse' => __DIR__ .'/AddInternationalConsignmentResponse.php',
        'UkMail\Prod\Despatching\AddReturnToSender' => __DIR__ .'/AddReturnToSender.php',
        'UkMail\Prod\Despatching\AddReturnToSenderResponse' => __DIR__ .'/AddReturnToSenderResponse.php',
        'UkMail\Prod\Despatching\AddSendToThirdParty' => __DIR__ .'/AddSendToThirdParty.php',
        'UkMail\Prod\Despatching\AddSendToThirdPartyResponse' => __DIR__ .'/AddSendToThirdPartyResponse.php',
        'UkMail\Prod\Despatching\CancelConsignment' => __DIR__ .'/CancelConsignment.php',
        'UkMail\Prod\Despatching\CancelConsignmentResponse' => __DIR__ .'/CancelConsignmentResponse.php',
        'UkMail\Prod\Despatching\CancelReturn' => __DIR__ .'/CancelReturn.php',
        'UkMail\Prod\Despatching\CancelReturnResponse' => __DIR__ .'/CancelReturnResponse.php',
        'UkMail\Prod\Despatching\AddDomesticConsignmentDeferred' => __DIR__ .'/AddDomesticConsignmentDeferred.php',
        'UkMail\Prod\Despatching\AddDomesticConsignmentDeferredResponse' => __DIR__ .'/AddDomesticConsignmentDeferredResponse.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_48a9cfbc88eff60f57d68a0529830847');

// Do nothing. The rest is just leftovers from the code generation.
{
}
