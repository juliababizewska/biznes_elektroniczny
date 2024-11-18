## [1.0.1] - 2023-05-31

Improved logging for errors.
Improved calculations for cart that caused errors.

## [1.1.0] - 2023-08-16

+ Added partial capture functionality.
+ Overall improvements and bug fixes.

## [1.2.0] - 2023-08-22

+ Added partial refund functionality.
+ Added shipping tracking info for captures.
+ Added Extra Merchant Data to session.
+ Overall improvements and bug fixes.

## [1.3.0] - 2023-09-11

+ New functionality - On-site messaging (OSM).
+ Added custom hook and switch toggle for EMD.
+ Overall improvements and bug fixes.

## [1.3.1] - 2023-09-15

+ Updated technical guide.
+ Compatibility with "thecheckout" module.

## [1.3.2] - 2023-10-12
+ Klarna iframe now loads on every payment method, not only the first one.
+ Selected Klarna payment method is now automatically selected in Klarna authorization pop-up.
+ Added new setting that allows to possibility to not automatically change order statuses.
+ Ability to access previous Klarna orders with a different MID.
+ Changed setting placement.
+ Sessions are now created with billing address country instead of shipping address.
+ Fixed context currency being displayed in the OM block in BO.
+ Overall improvements and bug fixes.

## [1.3.3] - 2023-10-26

+ Fixed security issues regarding PS permissions.
+ Fixed Cart cannot be loaded issue.

## [1.3.4] - 2023-11-03

+ Fixed security issues with authorization controller.

## [1.3.5] - 2023-11-10

+ Protected controllers from race condition requests.

## [1.3.6] - 2023-11-20

+ Fixed an issue with order placement when the Klarna iframe wasn't fully loaded.
+ Fixed an issue with incorrect context country being set.
+ Fixed order duplication by race condition.
+ Overall improvements and bug fixes.

## [1.3.7] - 2023-12-13

+ Changed symfony cache key storage location.
+ Changed symfony lock key storage location.

## [1.3.8] - 2024-01-09

+ Fixed order status update exception being thrown by other payment methods.

## [1.4.0] - 2024-01-26

+ Added Klarna express checkout functionality.
+ Added transaction id to the payment information block.
+ Fixed country not active issue.

## [1.5.0] - 2024-02-02

+ Hosted payment page functionality
+ Implemented one page checkout compatibility

## [1.5.1] - 2024-02-14

+ The validation error in the checkout
+ Error logs being generated when KEC is not active
+ Mixed currencies error
+ Issues with discount codes and free shipping option
+ Improved theme compatibility

## [1.5.2] - 2024-02-28

+ Order min/max implementation
+ Improved theme compatibility
+ Module back-office tabs fix
+ User agent encoding improved

## [1.5.3] - 2024-03-07

+ Fixed other payment methods not available on some specific configurations.
+ Implement logs export button.
+ Added a link to user guide in back office.
+ Compatibility with "supercheckout" module.

## [1.5.4] - 2024-03-18

+ Currency zero decimal tax calculation improvements

## [1.5.5] - 2024-04-04

+ Added secure_key to validateOrder call.
+ Fixed OSM issues with different locales.
+ Provided hooks for customization.
+ Added additional code of conduct.
+ Added usage for default country setting in module for guest customers that do not have an address

## [1.5.6] - 2024-06-10

+ Fixed "thecheckout" module infinite loader.

## [1.5.7] - 2024-08

+ Fixed COC text. Now showing only for NL country.
+ Improved logging.
+ Redesigned admin UX.
+ Added KEC button theme "Outlined".
+ Added KEC button shape "Rounded".
+ Fixed discount values mismatch

## [1.5.8] - 2024-09

+ Fixed issue with multiple vouchers. Bad values were being sent.
+ Improved back office credentials saving.
+ New feature Sign In With Klarna.
+ PrestaShop country restrictions for Klarna Products.

## [1.5.8.1] - 2024-09

+ HOTFIX: Database creation on upgrade caused issues with showing payment options
+ Added log information when hook attaching is failing

## [1.5.9] - 2024.10

+ Fixed issues with attached hooks.
+ Fixed Chrome autofiller. Now Chrome will not autofill Klarna credentials.
+ Fixed auto capturing failure on PrestaShop versions lower than 1.7.7.0
+ Added warning when "Friendly URL's" aren't enabled on shop.
+ Replaced deprecated key in Sign In With Klarna.