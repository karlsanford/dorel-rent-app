# dorel-rent-app

wp press plugin with short code

Install:

1.	Upload entire folder to wp-content/plugins
2.	Activate plugin at http://yoursite.com/wp-admin
3.	Create a new page or edit an existing page
4.	Go to text view of editor
5.	Add this short code: 
  a.	[dorel_rent_manager_rental_application]
6.	Save File

Use:

1. Links to this application should have two query string parameters, 'location' and 'propshortname'. Both are case sensitive.
  
  http://yoursite.com/yourapplicationpage.php?location=propertyLocationCode@propshortname=PropertyShortName

2. This plugin requires bootstrap.
3. For testing add env=test to the query string. This will make the following changes:
  a. Form post will be to http:httpbin.org which will redirect you to a page with json of your form post
  b. It will pull in bootstrap from cdn

