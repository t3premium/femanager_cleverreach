.. include:: ../Includes.txt
.. include:: Images.txt

.. _installation:

Installation and configuration
==============================

.. only:: html

   :ref:`stepbystep` |

.. _stepbystep:

Step by step
------------
CleverReach configuration
^^^^^^^^^^^^^^^^^^^^^^^^^
|cleverreach_settings_rest|

Set the checkbox 'Access to REST-API' in the CleverReach user account

|cleverreach_settings_fields|

Use the field definitions firstname and lastname for your receiver list

TypoScript root template
^^^^^^^^^^^^^^^^^^^^^^^^
Include static template (femanager_cleverreach) to your root TypoScript template

TypoScript configuration
^^^^^^^^^^^^^^^^^^^^^^^^
Constant editor
"""""""""""""""
|typoscript_constant_editor|

Add your CleverReach account data in TypoScript constant editor

Constants
"""""""""
You can find the constants in EXT:femanager_cleverreach/Configuration/TypoScript/constants.typoscript

Plain Text
""""""""""
.. code-block:: text

   plugin.tx_femanager_cleverreach {
     settings {
       # cat=plugin.tx_femanager_cleverreach//0100; type=text; label= REST URL
       restUrl = https://rest.cleverreach.com/v2
       # cat=plugin.tx_femanager_cleverreach//0200; type=int; label= Client id
       clientId =
       # cat=plugin.tx_femanager_cleverreach//0100; type=text; label= Client login name
       clientLogin =
       # cat=plugin.tx_femanager_cleverreach//0300; type=text; label= Client password
       clientPassword =
       # cat=plugin.tx_femanager_cleverreach//0400; type=int; label= Group id
       groupId =
     }
   }

Setup
"""""
You can find the setup in EXT:femanager_cleverreach/Configuration/TypoScript/setup.typoscript

Plain Text
""""""""""
.. code-block:: text

   plugin.tx_femanager {
     settings {
       finishers {
         # CleverReach finisher
         100 {
           class = T3premium\FemanagerCleverreach\Finisher\CleverReachFinisher
           config {
             restUrl = {$plugin.tx_femanager_cleverreach.settings.restUrl}
             clientId = {$plugin.tx_femanager_cleverreach.settings.clientId}
             clientLogin = {$plugin.tx_femanager_cleverreach.settings.clientLogin}
             clientPassword = {$plugin.tx_femanager_cleverreach.settings.clientPassword}
             groupId = {$plugin.tx_femanager_cleverreach.settings.groupId}
           }
         }
       }
     }
   }

Femanager settings
^^^^^^^^^^^^^^^^^^
|femanager_settings_fields|

The following fields are required for the mapping to the CleverReach receiver list

- Firstname
- Lastname
- Email

Highly recommended settings
"""""""""""""""""""""""""""
- Use the field **Terms and conditions**
- Use double opt-in
- Set required fields to **Firstname**, **Lastname** and **Terms and conditions**
