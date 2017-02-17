<?php

$requiredMethods = [
    'getMyRecords'          => 'To retrieve data by the owner of the Authentication Token specified in the API request',
    'getRecords'            => 'To retrieve all users data specified in the API request',
    'getRecordById'         => 'To retrieve individual records by record ID',
    'getDeletedRecordIds'   => 'To retrieve the list of IDs of deleted records from recylce bin',
    'insertRecords'         => 'To insert records into the required Zoho CRM module',
    'updateRecords'         => 'To update or modify the records in Zoho CRM',
    'getSearchRecordsByPDC' => 'To search the values based on pre-defined columns',
    'deleteRecords'         => 'To delete the selected records',
    'getRelatedRecords'     => 'To retrieve records related to a primary module',
    'getFields'             => 'To retrieve details of fields available in a module',
    'updateRelatedRecords ' => 'To update records related to another record',
    'delink'                => 'To disassociate the relationship between parent and child records',
    'searchRecords'         => 'To retrieve the records that match your search criteria',
];

