<?php

class Oportunidade{
    
    public $id;
    public $email;
    public $name;
    public $company;
    public $job_title;
    public $bio;
    public $publicUrl;
    public $createdAt;
    public $opportunity;
    public $numberConversions;
    public $user;
    public $firstEventType;
    public $firstEventIdentifier;
    public $firstIdentificador;
    public $firstEventTimestamp;
    public $firstTrafficSource;
    public $firstEmailLead;
    public $firstConversionIdentifier;
    public $firstCdpEventBatchUuid;
    public $firstCdpEventBatchIndex;
    public $firstCdpEventIdentifier;
    public $firstCdpEventUuid;
    public $firstCdpEventType;
    public $firstCdpEventFamily;
    public $firstCdpEventTimestamp;
    public $firstCdptraffic_source;
    public $firstCdpemail;
    public $firstCdpConversionIdentifier;
    public $firstCreatedAt;
    public $firstCumulativeSum;
    public $firstSource;
    public $firstCoSource;
    public $firstCoMedium;
    public $firstCoValue;
    public $firstCompaign;
    public $firstChannel;
    public $lastEventType;
    public $lastEventIdentifier;
    public $lastIdentificador;
    public $lastEventTimestamp;
    public $lastTrafficSource;
    public $lastEmailLead;
    public $lastConversionIdentifier;
    public $lastEventCdpBatchUuid;
    public $lastEventCdpBatchIndex;
    public $lastEventCdpIdentifier;
    public $lastEventCdpUuid;
    public $lastCdpEventType;
    public $lastCdpEventFamily;
    public $lastCdpEventTimestamp;
    public $lastCdpTrafficSource;
    public $lastCdpEmail;
    public $lastCdpConversionIdentifier;
    public $lastCreatedAt;
    public $lastCumulativeSum;
    public $lastSource;
    public $lastConversionSource;
    public $lastMedium;
    public $lastValue;
    public $lastCompaign;
    public $lastChannel;
    public $customWebsite;
    public $customPersonalPhone;
    public $customMobilePhone;
    public $customCity;
    public $customState;
    public $customLeadStage;
    public $customLastMarkedOpportunityDate;
    public $customUuid;
    public $firstCdpPayloadClientTrakingId;
    public $firstCdpPayloadInternalSource;
    public $firstCdpPayloadRdExperimentContentId;
    public $firstCdpPayloadCutmz;
    public $firstCdpPayloadTrafficSource;
    public $lastCdpPayloadClientTrakingId;
    public $lastCdpPayloadInternalSource;
    public $lastCdpPayloadRdExperimentContentId;
    public $lastCdpPayloadCUtmz;
    public $lastCdpPayloadTrafficSource;
    public $tagid;
    public $tag;

    public function insereOportunidade(){ 
        
        if(isset($this->id)){
            $qry = " 
            INSERT INTO `webhooks`( `email`, `idu`, `name`, `company`, `job_title`, `bio`, `publicUrl`, `createdAt`, `opportunity`, `numberConversions`, `user`, `firstEventType`, `firstEventIdentifier`, `firstIdentificador`, `firstEventTimestamp`, `firstTrafficSource`, `firstEmailLead`, `firstConversionIdentifier`, `firstCdpEventBatchUuid`, `firstCdpEventBatchIndex`, `firstCdpEventIdentifier`, `firstCdpEventUuid`, `firstCdpEventType`, `firstCdpEventFamily`, `firstCdpEventTimestamp`, `firstCdptraffic_source`, `firstCdpemail`, `firstCdpConversionIdentifier`, `firstCreatedAt`, `firstCumulativeSum`, `firstSource`, `firstCoSource`, `firstCoMedium`, `firstCoValue`, `firstCompaign`, `firstChannel`, `lastEventType`, `lastEventIdentifier`, `lastIdentificador`, `lastEventTimestamp`, `lastTrafficSource`, `lastEmailLead`, `lastConversionIdentifier`, `lastEventCdpBatchUuid`, `lastEventCdpBatchIndex`, `lastEventCdpIdentifier`, `lastEventCdpUuid`, `lastCdpEventType`, `lastCdpEventFamily`, `lastCdpEventTimestamp`, `lastCdpTrafficSource`, `lastCdpEmail`, `lastCdpConversionIdentifier`, `lastCreatedAt`, `lastCumulativeSum`, `lastSource`, `lastConversionSource`, `lastMedium`, `lastValue`, `lastCompaign`, `lastChannel`, `customWebsite`, `customPersonalPhone`, `customMobilePhone`, `customCity`, `customState`, `customLeadStage`, `customLastMarkedOpportunityDate`, `customUuid`, `firstCdpPayloadClientTrakingId`, `firstCdpPayloadInternalSource`, `firstCdpPayloadRdExperimentContentId`, `firstCdpPayloadCutmz`, `firstCdpPayloadTrafficSource`, `lastCdpPayloadClientTrakingId`, `lastCdpPayloadInternalSource`, `lastCdpPayloadRdExperimentContentId`, `lastCdpPayloadCUtmz`, `lastCdpPayloadTrafficSource`) VALUES('$this->email', 
            '$this->id',  
            '$this->name',
            '$this->company', 
            '$this->job_title',
            '$this->bio',
            '$this->publicUrl',
            '$this->createdAt',
            '$this->opportunity',
            '$this->numberConversions',
            '$this->user',
            '$this->firstEventType',
            '$this->firstEventIdentifier',
            '$this->firstIdentificador',
            '$this->firstEventTimestamp',
            '$this->firstTrafficSource',
            '$this->firstEmailLead',
            '$this->firstConversionIdentifier',
            '$this->firstCdpEventBatchUuid',
            '$this->firstCdpEventBatchIndex',
            '$this->firstCdpEventIdentifier',
            '$this->firstCdpEventUuid',
            '$this->firstCdpEventType',
            '$this->firstCdpEventFamily',
            '$this->firstCdpEventTimestamp',
            '$this->firstCdptraffic_source',
            '$this->firstCdpemail',
            '$this->firstCdpConversionIdentifier',
            '$this->firstCreatedAt',
            '$this->firstCumulativeSum',
            '$this->firstSource',
            '$this->firstCoSource',
            '$this->firstCoMedium',
            '$this->firstCoValue',
            '$this->firstCompaign',
            '$this->firstChannel',
            '$this->lastEventType',
            '$this->lastEventIdentifier',
            '$this->lastIdentificador',
            '$this->lastEventTimestamp',
            '$this->lastTrafficSource',
            '$this->lastEmailLead',
            '$this->lastConversionIdentifier',
            '$this->lastEventCdpBatchUuid',
            '$this->lastEventCdpBatchIndex',
            '$this->lastEventCdpIdentifier',
            '$this->lastEventCdpUuid',
            '$this->lastCdpEventType',
            '$this->lastCdpEventFamily',
            '$this->lastCdpEventTimestamp',
            '$this->lastCdpTrafficSource',
            '$this->lastCdpEmail',
            '$this->lastCdpConversionIdentifier',
            '$this->lastCreatedAt',
            '$this->lastCumulativeSum',
            '$this->lastSource',
            '$this->lastConversionSource',
            '$this->lastMedium',
            '$this->lastValue',
            '$this->lastCompaign',
            '$this->lastChannel',
            '$this->customWebsite',
            '$this->customPersonalPhone',
            '$this->customMobilePhone',
            '$this->customCity',
            '$this->customState',
            '$this->customLeadStage',
            '$this->customLastMarkedOpportunityDate',
            '$this->customUuid',
            '$this->firstCdpPayloadClientTrakingId',
            '$this->firstCdpPayloadInternalSource',
            '$this->firstCdpPayloadRdExperimentContentId',
            '$this->firstCdpPayloadCutmz',
            '$this->firstCdpPayloadTrafficSource',
            '$this->lastCdpPayloadClientTrakingId',
            '$this->lastCdpPayloadInternalSource',
            '$this->lastCdpPayloadRdExperimentContentId',
            '$this->lastCdpPayloadCUtmz',
            '$this->lastCdpPayloadTrafficSource')";    

            echo $qry;
            mysqli_query($this->link, $qry);  

        }


    }

    public function insereOportunidadeTag(){
        $qry = " INSERT INTO webhookstags(idu, tag) VALUE ('$this->tagid', '$this->tag')";
        mysqli_query($this->link, $qry);  

    }

}

?>