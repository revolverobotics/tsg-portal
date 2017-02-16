Hi Anup,

Here are updated instructions for the required work.

# Installation requirements
* Git for Windows
* Composer (dependency manager)

You should be able to run both `git` and `composer` from the command line and
see output about the commands.

# Working with our code
## First
* From the command line, go to an appropriate directory and run:
  `git clone git@github.com:revolverobotics/api-frontend.git`
* You should see the repo download to your computer.
* When finished downloading, enter the folder and type `git pull origin dev`.
* Next, run `git checkout dev`.
* Now type `composer install`.
* You should see `composer` installing the necessary packages.

## Next
* Go back to your parent directory and `git clone git@github.com:revolverobotics/tools-sales-ops.git`
* `cd tools-sales-ops`, `composer install`
* You should see the necessary packages install.
* Navigate to `tools-sales-ops/src/SalesOpz/Service/Zoom`
* I have already built an `Accounts.php`. We will need to build out `IMGroups.php` and `Users.php`.
  * For now, just familiarize yourself with the structure and syntax of the code.
* Navigate to `tools-sales-ops/src/SalesOpz/Service/Zoho/Inventory/Items.php`
  * We will need to build out `Deployments.php` and `Placements.php`.
  * For now, just familiarize yourself with the structure and syntax.

When done, send me a chat and we'll go from here. Please try to research as much as possible about Git. Also please research Laravel (laravel.com). It is the framework that the code is based on.

thank you,

Tim
