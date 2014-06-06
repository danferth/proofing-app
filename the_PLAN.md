Thomson PROOFS webApp
----------

#The Front End

###Welcome/Log in
This page will be the `index.php`.  A **Thomson** *proofs* logo with **ENTER** button to access the login that will be hidden until button clicked.

###List
List of all items with icon at the front denoting approved or not.  This will be a giant sortable table.  Each item will also be a link to it's respective item page

- icon for approval status [see](http://codepen.io/danferth/pen/DLhuF)
- title of item **In bold**
- approval date *In italic*

###Item page
The item page will be the heart of the app.

- preview of the item *(clickable for larger version)*
- small form for user to approve or disapprove the item
- icon with status of approval [see](http://codepen.io/danferth/pen/DLhuF)
- short description of item
- if *(item is approved)* {display links to download preview and art files}

###Add item page
Form for art department to upload new items

- name of item
- short description of item
- file upload *(for preview)*
- file upload *(PDF for preview click)*

###Edit item page
Form that will be prefilled with db data

- name of item
- short description of item
- file upload *(for preview)*
- file upload *(PDF for preview click & download)*
- file upload *(for printable approved files **.ziped**)*
- checkbox to display printable art files or not
- checkboxes for approval adjustment *(SE & ME)*

###Add user page
Form for adding users to view the item list and item pages

- user name
- password
- retype password
- admin checkbox

_____________________________________
##The Backend
The webApp will be written in `php` and incorporate a db.  `SESSIONS` will be used to keep track of who is viewing...

####Anticipated `SESSION` variables

- SESSION[**NAME**]
- SESSION[**STATUS (visitor, editor, admin)**]
- SESSION[**TIMEOUT**]

####db users

| id | user | salt | password *(salted & hashed)* | status *(visitor, editor, admin)* |

####db items

| id | title | short description | preview *(file jpeg)* | preview large *(PDF)* | print files *(URL from db to .ziped file)* | approval status *(0,1,2)* | ME approval status *(0,1)* | SE approval status *(0,1)* |

####index.php
- check if `SESSION active`
- login form
    - query db for username, salt, & salted/hashed pass-phrase
    - add user salt to supplied password and hash and compare
    - if passed redirect to list view

```php
if (SESSION active) {
    redirect to list view;
}else {
    status normal display welcome screen;
}

//on login
$supplied-username = $_POST[username];
$supplied-password = $_POST[password];

open connection to db;
query db for $supplied-username;

if ($supplied-username == true) {
    retrieve salt & salted-hash & user status;
    $salt = user salt;
    $pass-phrase = salted-hash;
    $status = user status;
    
    if (hash($salt.$supplied-password) === $pass-phrase) {
        set SESSION[NAME];
        set SESSION[STATUS];
        redirect to list view;
    } else {
    display error message;
    }



```