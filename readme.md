## Preliminary Requirements

Hi Anup,

1. Please write code for an AJAX GET request to the Zoho API.
Display the API call's output in the div layer with id="output".

  **Please use jQuery to achieve this.** The code must be contained within
the `<script>` tags in `index.html`.

  The following API endpoints should be called:
  
  `https://crm.zoho.com/crm/private/json/CustomModule2/getRecords`
  
  `https://crm.zoho.com/crm/private/json/CustomModule4/getRecords`

  Please parse the JSON and output the data from both GET requests
cleanly, e.g.:

  * Request 1 (CustomModule2)
    * Unit Number (Internal): <unit number>
    * Account Name: <account>
    * City: <city>
    * etc...

  * Request 2 (CustomModule4)
    * Family Member Emal: <email>
    * Family member Relation: <relation>
    * etc...

2. Next, write code for an AJAX POST request to the Zoho API.

  The following endpoint should be called:
  
  `https://crm.zoho.com/crm/private/xml/CustomModule4/insertRecords?authtoken=AuthToken&scope=crmapi&xmlData=Your%20XML%20Data`

  You should insert a record with the following fields using dummy data:
```
Address Line 1
Address Line 2
City
Created Time
External Unit Number
Family Member Email
Family Member Name
Family Member Phone
Family Mmeber Relation
Last Activity Time
Modified Time
Patient Name
Placement Request Owner
POA Email
POA Name
POA Phone
Request Number
Request Status
Room No. / Description
State
Sumbitter Name
Team Access
Wi-Fi Available
Zip
```

  I will be able to see data in the CRM to know whether or not the endpoint
was called correctly.

If you have any questions, please e-mail me.

thank you,

Tim
