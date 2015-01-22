<?php


 function autoload_5341dac71f7278a0d0c71a831090cf8f($class)
{
    $classes = array(
        'UkMail\Test\DespatchingDomesticConsignments\UKMConsignmentService' => __DIR__ .'/UKMConsignmentService.php',
        'UkMail\Test\DespatchingDomesticConsignments\ArrayOfbase64Binary' => __DIR__ .'/ArrayOfbase64Binary.php',
        'UkMail\Test\DespatchingDomesticConsignments\UKMResultState' => __DIR__ .'/UKMResultState.php',
        'UkMail\Test\DespatchingDomesticConsignments\AddDomesticConsignmentWebRequest' => __DIR__ .'/AddDomesticConsignmentWebRequest.php',
        'UkMail\Test\DespatchingDomesticConsignments\AddConsignmentWebRequest' => __DIR__ .'/AddConsignmentWebRequest.php',
        'UkMail\Test\DespatchingDomesticConsignments\WebRequest' => __DIR__ .'/WebRequest.php',
        'UkMail\Test\DespatchingDomesticConsignments\AddressWebModel' => __DIR__ .'/AddressWebModel.php',
        'UkMail\Test\DespatchingDomesticConsignments\PreDeliveryNotificationType' => __DIR__ .'/PreDeliveryNotificationType.php',
        'UkMail\Test\DespatchingDomesticConsignments\UKMAddDomesticConsignmentWebResponse' => __DIR__ .'/UKMAddDomesticConsignmentWebResponse.php',
        'UkMail\Test\DespatchingDomesticConsignments\UKMWebResponse' => __DIR__ .'/UKMWebResponse.php',
        'UkMail\Test\DespatchingDomesticConsignments\ArrayOfUKMWebError' => __DIR__ .'/ArrayOfUKMWebError.php',
        'UkMail\Test\DespatchingDomesticConsignments\UKMWebError' => __DIR__ .'/UKMWebError.php',
        'UkMail\Test\DespatchingDomesticConsignments\ArrayOfUKMWebWarning' => __DIR__ .'/ArrayOfUKMWebWarning.php',
        'UkMail\Test\DespatchingDomesticConsignments\UKMWebWarning' => __DIR__ .'/UKMWebWarning.php',
        'UkMail\Test\DespatchingDomesticConsignments\AddPacketConsignmentWebRequest' => __DIR__ .'/AddPacketConsignmentWebRequest.php',
        'UkMail\Test\DespatchingDomesticConsignments\PacketAddressWebModel' => __DIR__ .'/PacketAddressWebModel.php',
        'UkMail\Test\DespatchingDomesticConsignments\UKMAddPacketConsignmentWebResponse' => __DIR__ .'/UKMAddPacketConsignmentWebResponse.php',
        'UkMail\Test\DespatchingDomesticConsignments\AddInternationalConsignmentWebRequest' => __DIR__ .'/AddInternationalConsignmentWebRequest.php',
        'UkMail\Test\DespatchingDomesticConsignments\InvoiceTypeList' => __DIR__ .'/InvoiceTypeList.php',
        'UkMail\Test\DespatchingDomesticConsignments\UKMAddInternationalConsignmentWebResponse' => __DIR__ .'/UKMAddInternationalConsignmentWebResponse.php',
        'UkMail\Test\DespatchingDomesticConsignments\AddReturnWebRequest' => __DIR__ .'/AddReturnWebRequest.php',
        'UkMail\Test\DespatchingDomesticConsignments\UKMAddReturnToSenderWebResponse' => __DIR__ .'/UKMAddReturnToSenderWebResponse.php',
        'UkMail\Test\DespatchingDomesticConsignments\AddSendToThirdPartyWebRequest' => __DIR__ .'/AddSendToThirdPartyWebRequest.php',
        'UkMail\Test\DespatchingDomesticConsignments\UKMAddSendToThirdPartyWebResponse' => __DIR__ .'/UKMAddSendToThirdPartyWebResponse.php',
        'UkMail\Test\DespatchingDomesticConsignments\CancelConsignmentWebRequest' => __DIR__ .'/CancelConsignmentWebRequest.php',
        'UkMail\Test\DespatchingDomesticConsignments\UKMCancelConsignmentWebResponse' => __DIR__ .'/UKMCancelConsignmentWebResponse.php',
        'UkMail\Test\DespatchingDomesticConsignments\CancelReturnWebRequest' => __DIR__ .'/CancelReturnWebRequest.php',
        'UkMail\Test\DespatchingDomesticConsignments\UKMCancelReturnWebResponse' => __DIR__ .'/UKMCancelReturnWebResponse.php',
        'UkMail\Test\DespatchingDomesticConsignments\AddDomesticConsignmentDeferredWebRequest' => __DIR__ .'/AddDomesticConsignmentDeferredWebRequest.php',
        'UkMail\Test\DespatchingDomesticConsignments\AddConsignmentDeferredWebRequest' => __DIR__ .'/AddConsignmentDeferredWebRequest.php',
        'UkMail\Test\DespatchingDomesticConsignments\LabelFormatType' => __DIR__ .'/LabelFormatType.php',
        'UkMail\Test\DespatchingDomesticConsignments\AddDomesticConsignment' => __DIR__ .'/AddDomesticConsignment.php',
        'UkMail\Test\DespatchingDomesticConsignments\AddDomesticConsignmentResponse' => __DIR__ .'/AddDomesticConsignmentResponse.php',
        'UkMail\Test\DespatchingDomesticConsignments\AddPacketConsignment' => __DIR__ .'/AddPacketConsignment.php',
        'UkMail\Test\DespatchingDomesticConsignments\AddPacketConsignmentResponse' => __DIR__ .'/AddPacketConsignmentResponse.php',
        'UkMail\Test\DespatchingDomesticConsignments\AddInternationalConsignment' => __DIR__ .'/AddInternationalConsignment.php',
        'UkMail\Test\DespatchingDomesticConsignments\AddInternationalConsignmentResponse' => __DIR__ .'/AddInternationalConsignmentResponse.php',
        'UkMail\Test\DespatchingDomesticConsignments\AddReturnToSender' => __DIR__ .'/AddReturnToSender.php',
        'UkMail\Test\DespatchingDomesticConsignments\AddReturnToSenderResponse' => __DIR__ .'/AddReturnToSenderResponse.php',
        'UkMail\Test\DespatchingDomesticConsignments\AddSendToThirdParty' => __DIR__ .'/AddSendToThirdParty.php',
        'UkMail\Test\DespatchingDomesticConsignments\AddSendToThirdPartyResponse' => __DIR__ .'/AddSendToThirdPartyResponse.php',
        'UkMail\Test\DespatchingDomesticConsignments\CancelConsignment' => __DIR__ .'/CancelConsignment.php',
        'UkMail\Test\DespatchingDomesticConsignments\CancelConsignmentResponse' => __DIR__ .'/CancelConsignmentResponse.php',
        'UkMail\Test\DespatchingDomesticConsignments\CancelReturn' => __DIR__ .'/CancelReturn.php',
        'UkMail\Test\DespatchingDomesticConsignments\CancelReturnResponse' => __DIR__ .'/CancelReturnResponse.php',
        'UkMail\Test\DespatchingDomesticConsignments\AddDomesticConsignmentDeferred' => __DIR__ .'/AddDomesticConsignmentDeferred.php',
        'UkMail\Test\DespatchingDomesticConsignments\AddDomesticConsignmentDeferredResponse' => __DIR__ .'/AddDomesticConsignmentDeferredResponse.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_5341dac71f7278a0d0c71a831090cf8f');

// Do nothing. The rest is just leftovers from the code generation.
{
}
