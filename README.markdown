Overview
========

PHP Library for accessing the http://usaspending.gov/ api. 
This API returns XML.


Usage
=====

<pre>
// Base API Class
require 'APIBaseClass.php';
// Custom API Class
require 'usaSpendingApi.php';

$new = new usaSpendingApi();

// Debug information
die(print_r($new).print_r(get_object_vars($new)).print_r(get_class_methods(get_class($new))));


//Website examples ::

// contracts($state,$detail=NULL)

$new->contracts('AL','b');

// assistance($state,$fiscal_year,$max_records=20)
// /faads/faads.php?detail=b&principal_place_state_code=TX&fiscal_year=2006&max_records=20 becomes

$new->assistance('TX',2006);

//fiscal_summary($fiscal_year,$detail=NULL)
// /fsrs/fsrs.php?fiscal_year=2010&detail=s becomes

$new->fiscal_summary(2010,'s');

die(print_r($new).print_r(get_object_vars($new)).print_r(get_class_methods(get_class($new))));

</pre>
