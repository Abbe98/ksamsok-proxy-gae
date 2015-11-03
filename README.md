#K-Samsök Proxy for Google App Engine

This proxy server for K-Samsök(SOCH) API enables CORS request and runs on the Google App Engine.

##CORS
This proxy delivers all of K-Samsök response HTTP headers and in addition to those is also adds support for CORS which allows you to make API requests from for example client side JavaScript applications.

##Setup

Setting up this proxy on Google App Engine requires the Google App Engine SKD for the PHP runtime.

 - Clone this repo.
 - Create a new project at the [Google Developer Console](console.developers.google.com/) named `ksamsok-proxy-gap`.
 - Note the id your project is given.
 - Launch Google App Engine SKD and under `file` you can add your cloned repo as an existing application.
 - Select the app in the list and click the deploy button.

The proxy should now serve from `application-id.appspot.com`.

##Notes

###XSLT stylesheets

The XSLT stylesheets is served directly from within this app. The stylesheets used are the ones from the latest open sourced version of K-Samsök. That version was released in 2013 so the ones this application serves might differ from the ones on K-Samsöks servers. If you run into trouble please open a issue and I will look into it.

###JSON-LD

K-Samsök supports JSON-LD through a custom HTTP header(`Accept format`), this is also available through this proxy. But in some rare cases it does not work, because all web browsers and web servers does not support HTTP headers with spacing. This issue exists with regular use of the K-Samsök API too.
