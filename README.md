<h1>Magento 2 extension - Facebook Customer Chat</h1>

This Free Magento 2 extension integrates the Facebook Customer Chat Plugin easy into Magento 2.

<h2>Features</h2>
- Set theme color.

- Set logged in greeting.

- Set logged out greeting.

- Set greeting dialog display:


show: The greeting dialog will always be shown when the plugin loads.

hide: The greeting dialog of the plugin will always be hidden until a user clicks on the plugin.

fade: The greeting dialog of the plugin will be shown, then fade away and stay hidden afterwards.

- Set greeting dialog delay.

## Getting Started

Download the extension as a ZIP file from this repository or install our module with [Composer](https://getcomposer.org/) using the following command:

```
composer require magextensionsio/facebookcustomerchat
```

If you're installing the extension manually, unzip the archive and upload the files to `/app/code/Magextensionsio/FacebookCustomerChat`. After uploading, run the following [Magento CLI](http://devdocs.magento.com/guides/v2.0/config-guide/cli/config-cli-subcommands.html) commands:

```
bin/magento module:enable Magextensionsio_FacebookCustomerChat --clear-static-content
bin/magento setup:upgrade
bin/magento setup:di:compile
```

These commands will enable the Facebook Customer Chat extension, perform necessary database updates, and re-compile your Magento store. From there, you'll want to run through the pre-import checklist and set everything up using our [extension guide](https://www.magextensions.io/)).

<h2> Setting Up the Plugin </h2>
To include the customer chat plugin on your webpage, do the following:

1. Whitelist the domain of your website in your Facebook Page settings

2. Set your Facebook PageId in the extension settings.

For more info please read the Facebook developer page: https://developers.facebook.com/docs/messenger-platform/discovery/customer-chat-plugin


<b>PrintScreen Frontend 01</b>
![alt text](https://www.magextensions.io/wp-content/uploads/2018/04/Schermafdruk-van-2018-04-21-18-07-27.png)
<b>PrintScreen Frontend 02</b>
![alt text](https://www.magextensions.io/wp-content/uploads/2018/04/Schermafdruk-van-2018-04-21-20-39-09.png)
<b>PrintScreen Backend 01</b>
![alt text](https://www.magextensions.io/wp-content/uploads/2018/04/Schermafdruk-van-2018-04-23-14-19-57.png)

<b>PrintScreen Backend 02</b>
![alt text](https://www.magextensions.io/wp-content/uploads/2018/04/Schermafdruk-van-2018-04-23-14-20-24.png)

<h2> Troubleshooting Tips </h2>
If you're having trouble getting the working please contact us by visit our website: https://www.magextensions.io
