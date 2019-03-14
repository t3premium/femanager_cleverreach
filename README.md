# TYPO3 Extension ``femanager_cleverreach``

Extends to TYPO3 extension femanager with a CleverReach subscription

## 1) Installation


### Installation using Composer

Go to your Composer based TYPO3 project root and just do `composer req t3premium/femanager_cleverreach`.

### Installation as extension from TYPO3 Extension Repository (TER)

Download and install the extension with the extension manager module.


## 2) Configuration

1) Set the checkbox **Access to REST-API** in the CleverReach user account
2) Set CleverReach data in TYPO3 constant editor **PLUGIN.TX_FEMANAGER_CLEVERREACH**
3) Clear caches in install tool

## Highly recommended

- Use the checkbox **Terms and conditions** in your femanager form
- Set required fields to **Firstname**, **Lastname** and **Terms and conditions**
- Use double opt-in for registrations
