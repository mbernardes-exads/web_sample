# CHANGELOG

## 3.10 (12.01.2022)
* Add a parameter that may be used for forward compatibility
* Add support of webp format

## 3.9 (03.12.2021)
* Add detection timeout to avoid false positives on slow connections

## 3.8 (10.06.2021)
* Remove popunder-related code (inline is the preferred way) and unnecessary cookie

## 3.7 (05.07.2019)
* Some measures against "anti-cv" filter

## 3.6 (16.05.2019)
* Remove js object reference, which is sometimes blocked
* New ip detection API in diag (supports ipv6)

## 3.5 (14.03.2019)
* Add functionality to remove partially blocked ads
* Add no_cookie param to allow having backend_loader.php on different domain
* Add acpu cache support

## 3.4 (09.07.2018)
* Improve detection (wait for page load)

## 3.3 (25.05.2018)
* Update documentation link for passing IPs
* Fix window.ExoLoader override with error by some blockers (uBlock)
* Replace old IP detection service

## 3.2 (15.03.2018)
* Fix error with php <= 5.3

## 3.1 (07.03.2018)
* Auto-randomize banner and link parameter names, add more flexible control
* Fix js error if serve() called multiple times

## 3.0 (30.01.2018)
* Introduced concept of requested renderers
* Added new ad formats: native ad, sticky banner, web & mobile instant message
* Dynamic ExoLoader object naming in case it's made immutable by adblockers
* Small changes to facilitate phar installer and wordpress plugin
* PHP version auto-checked for multi curl

## 2.25 (12.10.2017)
* Fix check for response body text change in diag ads request
* Log errors returned from ad server
* Fix ip detection diagnostics (use setup from backend_loader.php)

## 2.24 (15.08.2017)
* Check ip detection in diagnostics script
* Ability to host backend_loader.php on different domain

## 2.23 (28.07.2017)
* Use new popunder code from CDN

## 2.22 (13.06.2017)
* Detection: Do not allow site box-sizing styling influence the DOM trap parameters

## 2.21 (09.06.2017)
* Solve issue with false positives during adblock detection

## 2.20 (01.06.2017)
* Changed blocker detection
* Fix issue with several serve() runs overriding each other's cookie

## 2.19 (24.05.2017)
* Solve issue with exchange campaigns and 404 banner
* Small fixes for 5.2 php version

## 2.18 (07.04.2017)
* Send correct header for javascript in case of strict headers validation

## 2.17 (27.03.2017)
* Fix the interface error for older php versions in backend_loader.php
* Fix forntend_loader.php open link issue when LINK_URL_PREFIX specified 

## 2.16 (14.03.2017)
* Allow adding zones dynamically. Not only on page load
* Add container reference as addZone parameter

## 2.15 (08.03.2017)
* Add file cache.
* Decrease the amount of transferred data.
* Load banners though <img src="...">, instead of base64 background style.

## 2.14 (30.09.2016)
* Fix resolveMulti to always return array

## 2.13 (14.09.2016)
* properly pass post params for openLink

## 2.12 (12.09.2016)
* completely move inline styles to css classes

## 2.11 (09.09.2016)
* Fix document.contains undefined issue in IE

## 2.10 (07.09.2016)
* Fix problems with ipv6 connectivity + curl
* fix issues with incorrect click links because of server-side aliases

## 2.9 (02.09.2016)
* Change the open link mechanism to redirect through backend loader

## 2.8 (30.08.2016)
* Resolve the https ads issue with outside of curl DNS resolution and caching

## 2.7 (22.08.2016)
* Switch ad endpoints to https to avoid mixed content problems

## 2.6 (17.08.2016)
* More generic DOM placeholder for banners
* Fix issue with headers
* Separate errors from debug messages in frontend loader
* Troubleshooting instructions

## 2.5 (02.08.2016)
* Introduce log for timed out requests and other errors
* Fix js error when something overwrites DOM placeholder for ad

## 2.4 (22.07.2016)
* Better timeouts
* Diagnostics file and better debugging

## 2.3 (20.07.2016)
* Fix minor issue with making request to backend loader, when no zones were added

## 2.2 (15.07.2016)
* New domain for ads-endpoint with better load balancing

## 2.1 (27.06.2016)
* Fix incompatibility with Prototype framework

## 2.0 (14.06.2016)
* Open release
* Single request for multiple ads
* Unified loader for banners and popunders
