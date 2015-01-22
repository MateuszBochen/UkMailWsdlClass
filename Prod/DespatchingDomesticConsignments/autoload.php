<?php


 function autoload_7d62256bdff31b5ba77d20fa1f9aeecb($class)
{
    $classes = array(
        'UkMail\Prod\DespatchingDomesticConsignments\UKMConsignmentService' => __DIR__ .'/UKMConsignmentService.php',
        'UkMail\Prod\DespatchingDomesticConsignments\ArrayOfbase64Binary' => __DIR__ .'/ArrayOfbase64Binary.php',
        'UkMail\Prod\DespatchingDomesticConsignments\UKMResultState' => __DIR__ .'/UKMResultState.php',
        'UkMail\Prod\DespatchingDomesticConsignments\AddDomesticConsignmentWebRequest' => __DIR__ .'/AddDomesticConsignmentWebRequest.php',
        'UkMail\Prod\DespatchingDomesticConsignments\AddConsignmentWebRequest' => __DIR__ .'/AddConsignmentWebRequest.php',
        'UkMail\Prod\DespatchingDomesticConsignments\WebRequest' => __DIR__ .'/WebRequest.php',
        'UkMail\Prod\DespatchingDomesticConsignments\AddressWebModel' => __DIR__ .'/AddressWebModel.php',
        'UkMail\Prod\DespatchingDomesticConsignments\PreDeliveryNotificationType' => __DIR__ .'/PreDeliveryNotificationType.php',
        'UkMail\Prod\DespatchingDomesticConsignments\UKMAddDomesticConsignmentWebResponse' => __DIR__ .'/UKMAddDomesticConsignmentWebResponse.php',
        'UkMail\Prod\DespatchingDomesticConsignments\UKMWebResponse' => __DIR__ .'/UKMWebResponse.php',
        'UkMail\Prod\DespatchingDomesticConsignments\ArrayOfUKMWebError' => __DIR__ .'/ArrayOfUKMWebError.php',
        'UkMail\Prod\DespatchingDomesticConsignments\UKMWebError' => __DIR__ .'/UKMWebError.php',
        'UkMail\Prod\DespatchingDomesticConsignments\ArrayOfUKMWebWarning' => __DIR__ .'/ArrayOfUKMWebWarning.php',
        'UkMail\Prod\DespatchingDomesticConsignments\UKMWebWarning' => __DIR__ .'/UKMWebWarning.php',
        'UkMail\Prod\DespatchingDomesticConsignments\AddPacketConsignmentWebRequest' => __DIR__ .'/AddPacketConsignmentWebRequest.php',
        'UkMail\Prod\DespatchingDomesticConsignments\PacketAddressWebModel' => __DIR__ .'/PacketAddressWebModel.php',
        'UkMail\Prod\DespatchingDomesticConsignments\UKMAddPacketConsignmentWebResponse' => __DIR__ .'/UKMAddPacketConsignmentWebResponse.php',
        'UkMail\Prod\DespatchingDomesticConsignments\AddInternationalConsignmentWebRequest' => __DIR__ .'/AddInternationalConsignmentWebRequest.php',
        'UkMail\Prod\DespatchingDomesticConsignments\InvoiceTypeList' => __DIR__ .'/InvoiceTypeList.php',
        'UkMail\Prod\DespatchingDomesticConsignments\UKMAddInternationalConsignmentWebResponse' => __DIR__ .'/UKMAddInternationalConsignmentWebResponse.php',
        'UkMail\Prod\DespatchingDomesticConsignments\AddReturnWebRequest' => __DIR__ .'/AddReturnWebRequest.php',
        'UkMail\Prod\DespatchingDomesticConsignments\UKMAddReturnToSenderWebResponse' => __DIR__ .'/UKMAddReturnToSenderWebResponse.php',
        'UkMail\Prod\DespatchingDomesticConsignments\AddSendToThirdPartyWebRequest' => __DIR__ .'/AddSendToThirdPartyWebRequest.php',
        'UkMail\Prod\DespatchingDomesticConsignments\UKMAddSendToThirdPartyWebResponse' => __DIR__ .'/UKMAddSendToThirdPartyWebResponse.php',
        'UkMail\Prod\DespatchingDomesticConsignments\CancelConsignmentWebRequest' => __DIR__ .'/CancelConsignmentWebRequest.php',
        'UkMail\Prod\DespatchingDomesticConsignments\UKMCancelConsignmentWebResponse' => __DIR__ .'/UKMCancelConsignmentWebResponse.php',
        'UkMail\Prod\DespatchingDomesticConsignments\CancelReturnWebRequest' => __DIR__ .'/CancelReturnWebRequest.php',
        'UkMail\Prod\DespatchingDomesticConsignments\UKMCancelReturnWebResponse' => __DIR__ .'/UKMCancelReturnWebResponse.php',
        'UkMail\Prod\DespatchingDomesticConsignments\AddDomesticConsignmentDeferredWebRequest' => __DIR__ .'/AddDomesticConsignmentDeferredWebRequest.php',
        'UkMail\Prod\DespatchingDomesticConsignments\AddConsignmentDeferredWebRequest' => __DIR__ .'/AddConsignmentDeferredWebRequest.php',
        'UkMail\Prod\DespatchingDomesticConsignments\LabelFormatType' => __DIR__ .'/LabelFormatType.php',
        'UkMail\Prod\DespatchingDomesticConsignments\AddDomesticConsignment' => __DIR__ .'/AddDomesticConsignment.php',
        'UkMail\Prod\DespatchingDomesticConsignments\AddDomesticConsignmentResponse' => __DIR__ .'/AddDomesticConsignmentResponse.php',
        'UkMail\Prod\DespatchingDomesticConsignments\AddPacketConsignment' => __DIR__ .'/AddPacketConsignment.php',
        'UkMail\Prod\DespatchingDomesticConsignments\AddPacketConsignmentResponse' => __DIR__ .'/AddPacketConsignmentResponse.php',
        'UkMail\Prod\DespatchingDomesticConsignments\AddInternationalConsignment' => __DIR__ .'/AddInternationalConsignment.php',
        'UkMail\Prod\DespatchingDomesticConsignments\AddInternationalConsignmentResponse' => __DIR__ .'/AddInternationalConsignmentResponse.php',
        'UkMail\Prod\DespatchingDomesticConsignments\AddReturnToSender' => __DIR__ .'/AddReturnToSender.php',
        'UkMail\Prod\DespatchingDomesticConsignments\AddReturnToSenderResponse' => __DIR__ .'/AddReturnToSenderResponse.php',
        'UkMail\Prod\DespatchingDomesticConsignments\AddSendToThirdParty' => __DIR__ .'/AddSendToThirdParty.php',
        'UkMail\Prod\DespatchingDomesticConsignments\AddSendToThirdPartyResponse' => __DIR__ .'/AddSendToThirdPartyResponse.php',
        'UkMail\Prod\DespatchingDomesticConsignments\CancelConsignment' => __DIR__ .'/CancelConsignment.php',
        'UkMail\Prod\DespatchingDomesticConsignments\CancelConsignmentResponse' => __DIR__ .'/CancelConsignmentResponse.php',
        'UkMail\Prod\DespatchingDomesticConsignments\CancelReturn' => __DIR__ .'/CancelReturn.php',
        'UkMail\Prod\DespatchingDomesticConsignments\CancelReturnResponse' => __DIR__ .'/CancelReturnResponse.php',
        'UkMail\Prod\DespatchingDomesticConsignments\AddDomesticConsignmentDeferred' => __DIR__ .'/AddDomesticConsignmentDeferred.php',
        'UkMail\Prod\DespatchingDomesticConsignments\AddDomesticConsignmentDeferredResponse' => __DIR__ .'/AddDomesticConsignmentDeferredResponse.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_7d62256bdff31b5ba77d20fa1f9aeecb');

// Do nothing. The rest is just leftovers from the code generation.
{
}
