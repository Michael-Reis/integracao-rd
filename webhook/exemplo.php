<?php


$data = array (
    'leads' => 
    array (
      0 => 
      array (
        'id' => '1625309091',
        'email' => 'carolgparra@icloud.com',
        'name' => '',
        'company' => NULL,
        'job_title' => NULL,
        'bio' => NULL,
        'public_url' => 'http://app.rdstation.com.br/leads/public/b1c06e29-fec9-49b5-88ec-9d8d07b43e9e',
        'created_at' => '2021-07-06T08:40:55.436-03:00',
        'opportunity' => 'false',
        'number_conversions' => '1',
        'user' => NULL,
        'first_conversion' => 
        array (
          'content' => 
          array (
            'event_type' => 'CONVERSION',
            'event_identifier' => 'Finalização de Compra',
            'identificador' => 'Finalização de Compra',
            'event_timestamp' => NULL,
            'traffic_source' => '49291768.1625487794.1.1.utmcsr=(direct)|utmccn=(direct)|utmcmd=(none)',
            'email_lead' => 'carolgparra@icloud.com',
            'conversion_identifier' => 'Finalização de Compra',
            '__cdp__original_event' => 
            array (
              'event_batch_uuid' => 'a4cd4e57-1d84-48b9-8b5c-d0347d6ec286',
              'event_batch_index' => 0,
              'event_identifier' => 'Finalização de Compra',
              'event_uuid' => '924421cf-9d35-4da2-8a77-b47c32228735',
              'event_type' => 'CONVERSION',
              'event_family' => 'CDP',
              'event_timestamp' => NULL,
              'payload' => 
              array (
                'traffic_source' => '49291768.1625487794.1.1.utmcsr=(direct)|utmccn=(direct)|utmcmd=(none)',
                'email' => 'carolgparra@icloud.com',
                'conversion_identifier' => 'Finalização de Compra',
              ),
            ),
            'UF' => NULL,
          ),
          'created_at' => '2021-07-06T08:40:55.463-03:00',
          'cumulative_sum' => '1',
          'source' => 'Finalização de Compra',
          'conversion_origin' => 
          array (
            'source' => '(direct)',
            'medium' => '(none)',
            'value' => NULL,
            'campaign' => '(direct)',
            'channel' => 'Direct',
          ),
        ),
        'last_conversion' => 
        array (
          'content' => 
          array (
            'event_type' => 'CONVERSION',
            'event_identifier' => 'Finalização de Compra',
            'identificador' => 'Finalização de Compra',
            'event_timestamp' => NULL,
            'traffic_source' => '49291768.1625487794.1.1.utmcsr=(direct)|utmccn=(direct)|utmcmd=(none)',
            'email_lead' => 'carolgparra@icloud.com',
            'conversion_identifier' => 'Finalização de Compra',
            '__cdp__original_event' => 
            array (
              'event_batch_uuid' => 'a4cd4e57-1d84-48b9-8b5c-d0347d6ec286',
              'event_batch_index' => 0,
              'event_identifier' => 'Finalização de Compra',
              'event_uuid' => '924421cf-9d35-4da2-8a77-b47c32228735',
              'event_type' => 'CONVERSION',
              'event_family' => 'CDP',
              'event_timestamp' => NULL,
              'payload' => 
              array (
                'traffic_source' => '49291768.1625487794.1.1.utmcsr=(direct)|utmccn=(direct)|utmcmd=(none)',
                'email' => 'carolgparra@icloud.com',
                'conversion_identifier' => 'Finalização de Compra',
              ),
            ),
            'UF' => NULL,
          ),
          'created_at' => '2021-07-06T08:40:55.463-03:00',
          'cumulative_sum' => '1',
          'source' => 'Finalização de Compra',
          'conversion_origin' => 
          array (
            'source' => '(direct)',
            'medium' => '(none)',
            'value' => NULL,
            'campaign' => '(direct)',
            'channel' => 'Direct',
          ),
        ),
        'custom_fields' => 
        array (
        ),
        'website' => NULL,
        'personal_phone' => NULL,
        'mobile_phone' => NULL,
        'city' => NULL,
        'state' => NULL,
        'tags' => NULL,
        'lead_stage' => 'Lead',
        'last_marked_opportunity_date' => NULL,
        'uuid' => 'b1c06e29-fec9-49b5-88ec-9d8d07b43e9e',
      ),
    ),
);

//print_r($data);





echo "<br><br>";
$content = $data['leads'][0]['first_conversion']['content'];
$data['leads'][0]['first_conversion']['content']['event_identifier'];  
$data['leads'][0]['first_conversion']['content']['identificador'];  
$data['leads'][0]['first_conversion']['content']['event_timestamp'];   





?>