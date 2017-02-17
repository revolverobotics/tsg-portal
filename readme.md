# Scope of Work

This effort will be broken up into two phases. Phase I will entail modules being built out to interact with the required APIs. Phase II will be a collaborative effort in connecting the modules with frontend forms.

## Phase I
The following modules are required for our deployment. [PHP Interfaces](http://php.net/manual/en/language.oop5.interfaces.php) will be used to outline the methods for each Class, while the Implementation in each case is an extension of a [Client class](https://github.com/revolverobotics/tools-sales-ops/blob/master/src/SalesOpz/Client/Client.php), which uses [Guzzle](http://docs.guzzlephp.org/en/latest/) to make our request/response calls elegant and easy to manage.

* [ ] Zoom API
  * [ ] Users
    * [ ] Interface
    * [ ] Implementation
    * [ ] Testing (CRUD)
  * [ ] IM Groups
    * [ ] Interface
    * [ ] Implementation
    * [ ] Testing (CRUD)
  * [ ] Accounts
    * [x] [Interface](https://github.com/revolverobotics/tools-sales-ops/blob/master/src/SalesOpz/Contracts/Service/Zoom/AccountInterface.php)
    * [x] [Implementation](https://github.com/revolverobotics/tools-sales-ops/blob/master/src/SalesOpz/Service/Zoom/Accounts.php)
    * [ ] Testing (CRUD)

The ultimate goal here is to have a set of classes that allow us to make simple and elegant calls like so:
```php
class ZoomController extends Controller
{
    public function newSubscription()
    {
        $zoomApi = new ZoomAPI(
            ['api_key' => 'myKey', 'api_secret' => 'mySecret']
        );
        
        // Create a new sub account
        $response = $zoomApi->accounts->createSubAccount(['input' => [data]]);
        
        // Subscribe the sub account to a plan
        $response = $zoomApi->accounts->subscribePlan(['input' => [data]]);
        
        // Notify user with account details
        Mail::to('account-owner@email.com')->queue(new Mailable($response));
    }
...
```

## Phase II
Phase II shall be a collaborative effort to involve using the above classes, once finished, to build out the controller logic for our deployment. The following controllers and methods will be needed:
* [ ] Deployments Controller
  * [ ] Fetch
  * [ ] Create
  * [ ] Update
  * [ ] Soft Delete
* [ ] Placements Controller
  * [ ] Fetch
  * [ ] Create
  * [ ] Update
  * [ ] Soft Delete
  * [ ] Request (Create with `status = 'pending'`)
  * [ ] Approve (Update with `status = 'confirmed'`)
  
  The controller methods will render the appropriate views.

# Timeline
* [ ] Feb 16 - 24: Phase I
* [ ] Feb 27 - Mar 3: Phase II
* [ ] Mar 6 - 10: Testing & Bugfixes, Authentication/Security
* [ ] Mar 13 - 17: Testing & Bugfixes, Finalization
