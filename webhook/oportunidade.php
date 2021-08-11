<?php
 
include('../conexao.php'); 
include('../componentes/oportunidade.php'); 
include('../integracao/contatoEmail.php');
 
$data = json_decode(file_get_contents("php://input"),true);

$oportunidade = new Oportunidade();
$oportunidade->link = $link;
  
$oportunidade->id = isset($data['leads'][0]['id']) ? $data['leads'][0]['id'] : NULL;
$oportunidade->email = isset($data['leads'][0]['email']) ?  $data['leads'][0]['email'] :  NULL;
salvaContato($data['leads'][0]['email']);
$oportunidade->name = isset($data['leads'][0]['name']) ? $data['leads'][0]['name'] : NULL;
$oportunidade->company = isset($data['leads'][0]['company']) ? $data['leads'][0]['company'] : NULL;
$oportunidade->job_title = isset($data['leads'][0]['job_title']) ? $data['leads'][0]['job_title'] : NULL;
$oportunidade->bio = isset($data['leads'][0]['bio']) ? $data['leads'][0]['bio'] : NULL;
$oportunidade->publicUrl = isset($data['leads'][0]['public_url']) ? $data['leads'][0]['public_url'] : NULL;
$oportunidade->createdAt = isset($data['leads'][0]['created_at']) ? $data['leads'][0]['created_at'] : NULL;
$oportunidade->opportunity = isset($data['leads'][0]['opportunity']) ? $data['leads'][0]['opportunity'] : NULL;
$oportunidade->numberConversions = isset($data['leads'][0]['number_conversions']) ? $data['leads'][0]['number_conversions'] : NULL;
$oportunidade->user = isset($data['leads'][0]['user']) ? $data['leads'][0]['user'] : NULL;
$oportunidade->firstEventType = isset($data['leads'][0]['first_conversion']['content']['event_type']) ? $data['leads'][0]['first_conversion']['content']['event_type'] : NULL;
$oportunidade->firstEventIdentifier = isset($data['leads'][0]['first_conversion']['content']['event_identifier']) ? $data['leads'][0]['first_conversion']['content']['event_identifier'] : NULL;
$oportunidade->firstIdentificador = isset($data['leads'][0]['first_conversion']['content']['identificador']) ? $data['leads'][0]['first_conversion']['content']['identificador'] : NULL;
$oportunidade->firstEventTimestamp = isset($data['leads'][0]['first_conversion']['content']['event_timestamp']) ? $data['leads'][0]['first_conversion']['content']['event_timestamp'] : NULL;
$oportunidade->firstTrafficSource = isset($data['leads'][0]['first_conversion']['content']['traffic_source']) ? $data['leads'][0]['first_conversion']['content']['traffic_source'] : NULL;
$oportunidade->firstEmailLead = isset($data['leads'][0]['first_conversion']['content']['email_lead']) ? $data['leads'][0]['first_conversion']['content']['email_lead'] : NULL;
$oportunidade->firstConversionIdentifier = isset($data['leads'][0]['first_conversion']['content']['conversion_identifier']) ? $data['leads'][0]['first_conversion']['content']['conversion_identifier'] : NULL;
$oportunidade->firstCdpEventBatchUuid = isset($data['leads'][0]['first_conversion']['content']['__cdp__original_event']['event_batch_uuid']) ? $data['leads'][0]['first_conversion']['content']['__cdp__original_event']['event_batch_uuid'] : NULL;
$oportunidade->firstCdpEventBatchIndex = isset($data['leads'][0]['first_conversion']['content']['__cdp__original_event']['event_batch_index']) ? $data['leads'][0]['first_conversion']['content']['__cdp__original_event']['event_batch_index'] : NULL;
$oportunidade->firstCdpEventIdentifier = isset($data['leads'][0]['first_conversion']['content']['__cdp__original_event']['event_identifier']) ? $data['leads'][0]['first_conversion']['content']['__cdp__original_event']['event_identifier'] : NULL;
$oportunidade->firstCdpEventUuid = isset($data['leads'][0]['first_conversion']['content']['__cdp__original_event']['event_uuid']) ? $data['leads'][0]['first_conversion']['content']['__cdp__original_event']['event_uuid'] : NULL;
$oportunidade->firstCdpEventType = isset($data['leads'][0]['first_conversion']['content']['__cdp__original_event']['event_type']) ? $data['leads'][0]['first_conversion']['content']['__cdp__original_event']['event_type'] : NULL;
$oportunidade->firstCdpEventFamily = isset($data['leads'][0]['first_conversion']['content']['__cdp__original_event']['event_family']) ? $data['leads'][0]['first_conversion']['content']['__cdp__original_event']['event_family'] : NULL;
$oportunidade->firstCdpEventTimestamp = isset($data['leads'][0]['first_conversion']['content']['__cdp__original_event']['event_timestamp']) ? $data['leads'][0]['first_conversion']['content']['__cdp__original_event']['event_timestamp'] : NULL;
$oportunidade->firstCdpPayload = isset($data['leads'][0]['first_conversion']['content']['__cdp__original_event']['payload']) ? $data['leads'][0]['first_conversion']['content']['__cdp__original_event']['payload'] : NULL;

//criar no banco de dados
$oportunidade->firstCdpPayloadClientTrakingId = isset($data['leads'][0]['first_conversion']['content']['__cdp__original_event']['payload']['client_tracking_id']) ? $data['leads'][0]['first_conversion']['content']['__cdp__original_event']['payload']['client_tracking_id'] : NULL;
$oportunidade->firstCdpPayloadInternalSource = isset($data['leads'][0]['first_conversion']['content']['__cdp__original_event']['payload']['internal_source']) ? $data['leads'][0]['first_conversion']['content']['__cdp__original_event']['payload']['internal_source'] : NULL;
$oportunidade->firstCdpPayloadRdExperimentContentId = isset($data['leads'][0]['first_conversion']['content']['__cdp__original_event']['payload']['_rd_experiment_content_id']) ? $data['leads'][0]['first_conversion']['content']['__cdp__original_event']['payload']['_rd_experiment_content_id'] : NULL;
$oportunidade->firstCdpPayloadCutmz = isset($data['leads'][0]['first_conversion']['content']['__cdp__original_event']['payload']['c_utmz']) ? $data['leads'][0]['first_conversion']['content']['__cdp__original_event']['payload']['c_utmz'] : NULL;
$oportunidade->firstCdpPayloadTrafficSource = isset($data['leads'][0]['first_conversion']['content']['__cdp__original_event']['payload']['traffic_source']) ? $data['leads'][0]['first_conversion']['content']['__cdp__original_event']['payload']['traffic_source'] : NULL;

 
$oportunidade->firstCdptraffic_source = isset($data['leads'][0]['first_conversion']['content']['__cdp__original_event']['payload']['traffic_source']) ? $data['leads'][0]['first_conversion']['content']['__cdp__original_event']['payload']['traffic_source'] : NULL;
$oportunidade->firstCdpemail = isset($data['leads'][0]['first_conversion']['content']['__cdp__original_event']['payload']['email']) ? $data['leads'][0]['first_conversion']['content']['__cdp__original_event']['payload']['email'] : NULL;
$oportunidade->firstCdpConversionIdentifier = isset($data['leads'][0]['first_conversion']['content']['__cdp__original_event']['payload']['conversion_identifier']) ? $data['leads'][0]['first_conversion']['content']['__cdp__original_event']['payload']['conversion_identifier'] : NULL; 
$oportunidade->firstCreatedAt = isset($data['leads'][0]['first_conversion']['created_at']) ? $data['leads'][0]['first_conversion']['created_at'] : NULL; 
$oportunidade->firstCumulativeSum = isset($data['leads'][0]['first_conversion']['cumulative_sum']) ? $data['leads'][0]['first_conversion']['cumulative_sum'] : NULL; 
$oportunidade->firstSource = isset($data['leads'][0]['first_conversion']['source']) ? $data['leads'][0]['first_conversion']['source'] : NULL;   
$oportunidade->firstCoSource = isset($data['leads'][0]['first_conversion']['conversion_origin']['source']) ? $data['leads'][0]['first_conversion']['conversion_origin']['source'] : NULL;  
$oportunidade->firstCoMedium = isset($data['leads'][0]['first_conversion']['conversion_origin']['medium']) ? $data['leads'][0]['first_conversion']['conversion_origin']['medium'] : NULL;  
$oportunidade->firstCoValue = isset($data['leads'][0]['first_conversion']['conversion_origin']['value']) ? $data['leads'][0]['first_conversion']['conversion_origin']['value'] : NULL;  
$oportunidade->firstCompaign = isset($data['leads'][0]['first_conversion']['conversion_origin']['campaign']) ? $data['leads'][0]['first_conversion']['conversion_origin']['campaign'] : NULL;  
$oportunidade->firstChannel = isset($data['leads'][0]['first_conversion']['conversion_origin']['channel']) ? $data['leads'][0]['first_conversion']['conversion_origin']['channel'] : NULL;  
$oportunidade->lastEventType = isset($data['leads'][0]['last_conversion']['content']['event_type']) ? $data['leads'][0]['last_conversion']['content']['event_type'] : NULL;  
$oportunidade->lastEventIdentifier = isset($data['leads'][0]['last_conversion']['content']['event_identifier']) ? $data['leads'][0]['last_conversion']['content']['event_identifier'] : NULL;  
$oportunidade->lastIdentificador = isset($data['leads'][0]['last_conversion']['content']['identificador']) ? $data['leads'][0]['last_conversion']['content']['identificador'] : NULL;  
$oportunidade->lastEventTimestamp = isset($data['leads'][0]['last_conversion']['content']['event_timestamp']) ? $data['leads'][0]['last_conversion']['content']['event_timestamp'] : NULL;  
$oportunidade->lastTrafficSource = isset($data['leads'][0]['last_conversion']['content']['traffic_source']) ? $data['leads'][0]['last_conversion']['content']['traffic_source'] : NULL;  
$oportunidade->lastEmailLead = isset($data['leads'][0]['last_conversion']['content']['email_lead']) ? $data['leads'][0]['last_conversion']['content']['email_lead'] : NULL;  
$oportunidade->lastConversionIdentifier = isset($data['leads'][0]['last_conversion']['content']['conversion_identifier']) ? $data['leads'][0]['last_conversion']['content']['conversion_identifier'] : NULL;  
$oportunidade->lastEventCdpBatchUuid = isset($data['leads'][0]['last_conversion']['content']['__cdp__original_event']['event_batch_uuid']) ? $data['leads'][0]['last_conversion']['content']['__cdp__original_event']['event_batch_uuid'] : NULL;  
$oportunidade->lastEventCdpBatchIndex = isset($data['leads'][0]['last_conversion']['content']['__cdp__original_event']['event_batch_index']) ? $data['leads'][0]['last_conversion']['content']['__cdp__original_event']['event_batch_index'] : NULL;  
$oportunidade->lastEventCdpIdentifier = isset($data['leads'][0]['last_conversion']['content']['__cdp__original_event']['event_identifier']) ? $data['leads'][0]['last_conversion']['content']['__cdp__original_event']['event_identifier'] : NULL;  
$oportunidade->lastEventCdpUuid = isset($data['leads'][0]['last_conversion']['content']['__cdp__original_event']['event_uuid']) ? $data['leads'][0]['last_conversion']['content']['__cdp__original_event']['event_uuid'] : NULL;  
$oportunidade->lastCdpEventType = isset($data['leads'][0]['last_conversion']['content']['__cdp__original_event']['event_type']) ? $data['leads'][0]['last_conversion']['content']['__cdp__original_event']['event_type'] : NULL;  
$oportunidade->lastCdpEventFamily = isset($data['leads'][0]['last_conversion']['content']['__cdp__original_event']['event_family']) ? $data['leads'][0]['last_conversion']['content']['__cdp__original_event']['event_family'] : NULL;  
$oportunidade->lastCdpEventTimestamp = isset($data['leads'][0]['last_conversion']['content']['__cdp__original_event']['event_timestamp']) ? $data['leads'][0]['last_conversion']['content']['__cdp__original_event']['event_timestamp'] : NULL;  
$oportunidade->lastCdpTrafficSource = isset($data['leads'][0]['last_conversion']['content']['__cdp__original_event']['payload']['traffic_source']) ? $data['leads'][0]['last_conversion']['content']['__cdp__original_event']['payload']['traffic_source'] : NULL;  
 
//criar no banco de dados a compra
$oportunidade->lastCdpPayloadClientTrakingId = isset($data['leads'][0]['last_conversion']['content']['__cdp__original_event']['payload']['client_tracking_id']) ? $data['leads'][0]['first_conversion']['content']['__cdp__original_event']['payload']['client_tracking_id'] : NULL;
$oportunidade->lastCdpPayloadInternalSource = isset($data['leads'][0]['last_conversion']['content']['__cdp__original_event']['payload']['internal_source']) ? $data['leads'][0]['first_conversion']['content']['__cdp__original_event']['payload']['internal_source'] : NULL;
$oportunidade->lastCdpPayloadRdExperimentContentId = isset($data['leads'][0]['last_conversion']['content']['__cdp__original_event']['payload']['_rd_experiment_content_id']) ? $data['leads'][0]['first_conversion']['content']['__cdp__original_event']['payload']['_rd_experiment_content_id'] : NULL;
$oportunidade->lastCdpPayloadCUtmz = isset($data['leads'][0]['last_conversion']['content']['__cdp__original_event']['payload']['c_utmz']) ? $data['leads'][0]['first_conversion']['content']['__cdp__original_event']['payload']['c_utmz'] : NULL;
$oportunidade->lastCdpPayloadTrafficSource = isset($data['leads'][0]['last_conversion']['content']['__cdp__original_event']['payload']['traffic_source']) ? $data['leads'][0]['first_conversion']['content']['__cdp__original_event']['payload']['traffic_source'] : NULL;


$oportunidade->lastCdpEmail = isset($data['leads'][0]['last_conversion']['content']['__cdp__original_event']['payload']['email']) ? $data['leads'][0]['last_conversion']['content']['__cdp__original_event']['payload']['email'] : NULL;  
$oportunidade->lastCdpConversionIdentifier = isset($data['leads'][0]['last_conversion']['content']['__cdp__original_event']['payload']['conversion_identifier']) ? $data['leads'][0]['last_conversion']['content']['__cdp__original_event']['payload']['conversion_identifier'] : NULL;  
$oportunidade->lastCreatedAt = isset($data['leads'][0]['last_conversion']['created_at']) ? $data['leads'][0]['last_conversion']['created_at'] : NULL;  
$oportunidade->lastCumulativeSum = isset($data['leads'][0]['last_conversion']['cumulative_sum']) ? $data['leads'][0]['last_conversion']['cumulative_sum'] : NULL;  
$oportunidade->lastSource = isset($data['leads'][0]['last_conversion']['source']) ? $data['leads'][0]['last_conversion']['source'] : NULL;  
$oportunidade->lastConversionSource = isset($data['leads'][0]['last_conversion']['conversion_origin']['source']) ? $data['leads'][0]['last_conversion']['conversion_origin']['source'] : NULL;  
$oportunidade->lastMedium = isset($data['leads'][0]['last_conversion']['conversion_origin']['medium']) ? $data['leads'][0]['last_conversion']['conversion_origin']['medium'] : NULL;  
$oportunidade->lastValue = isset($data['leads'][0]['last_conversion']['conversion_origin']['value']) ? $data['leads'][0]['last_conversion']['conversion_origin']['value'] : NULL;  
$oportunidade->lastCompaign = isset($data['leads'][0]['last_conversion']['conversion_origin']['campaign']) ? $data['leads'][0]['last_conversion']['conversion_origin']['campaign'] : NULL;  
$oportunidade->lastChannel = isset($data['leads'][0]['last_conversion']['conversion_origin']['channel']) ? $data['leads'][0]['last_conversion']['conversion_origin']['channel'] : NULL;  
$oportunidade->customWebsite = isset($data['leads'][0]['website']) ? $data['leads'][0]['website'] : NULL;
$oportunidade->customPersonalPhone = isset($data['leads'][0]['personal_phone']) ? $data['leads'][0]['personal_phone'] : NULL;
$oportunidade->customMobilePhone = isset($data['leads'][0]['mobile_phone']) ? $data['leads'][0]['mobile_phone'] : NULL;
$oportunidade->customCity = isset($data['leads'][0]['city']) ? $data['leads'][0]['city'] : NULL;
$oportunidade->customState = isset($data['leads'][0]['state']) ? $data['leads'][0]['state'] : NULL;

if(isset($data['leads'][0]['tags'])){
   
    foreach ($data['leads'][0]['tags'] as $key => $value) {
        $oportunidade->tagid = $data['leads'][0]['id']; 
        $oportunidade->tag = $value;
        $oportunidade->insereOportunidadeTag(); 
    } 

}
 
$oportunidade->customLeadStage = isset($data['leads'][0]['lead_stage']) ? $data['leads'][0]['lead_stage'] : NULL;
$oportunidade->customLastMarkedOpportunityDate = isset($data['leads'][0]['last_marked_opportunity_date']) ? $data['leads'][0]['last_marked_opportunity_date'] : NULL;
$oportunidade->customUuid = isset($data['leads'][0]['uuid']) ? $data['leads'][0]['uuid'] : NULL;  
$oportunidade->insereOportunidade();
 

?> 