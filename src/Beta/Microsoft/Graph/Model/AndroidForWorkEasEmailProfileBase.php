<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AndroidForWorkEasEmailProfileBase File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\Model;

/**
* AndroidForWorkEasEmailProfileBase class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AndroidForWorkEasEmailProfileBase extends DeviceConfiguration
{
    /**
    * Gets the authenticationMethod
    * Authentication method for Exchange ActiveSync. Possible values are: usernameAndPassword, certificate, derivedCredential.
    *
    * @return EasAuthenticationMethod|null The authenticationMethod
    */
    public function getAuthenticationMethod()
    {
        if (array_key_exists("authenticationMethod", $this->_propDict) && !is_null($this->_propDict["authenticationMethod"])) {
            if (is_a($this->_propDict["authenticationMethod"], "\Beta\Microsoft\Graph\Model\EasAuthenticationMethod")) {
                return $this->_propDict["authenticationMethod"];
            } else {
                $this->_propDict["authenticationMethod"] = new EasAuthenticationMethod($this->_propDict["authenticationMethod"]);
                return $this->_propDict["authenticationMethod"];
            }
        }
        return null;
    }
    
    /**
    * Sets the authenticationMethod
    * Authentication method for Exchange ActiveSync. Possible values are: usernameAndPassword, certificate, derivedCredential.
    *
    * @param EasAuthenticationMethod $val The authenticationMethod
    *
    * @return AndroidForWorkEasEmailProfileBase
    */
    public function setAuthenticationMethod($val)
    {
        $this->_propDict["authenticationMethod"] = $val;
        return $this;
    }
    
    /**
    * Gets the durationOfEmailToSync
    * Duration of time email should be synced to. Possible values are: userDefined, oneDay, threeDays, oneWeek, twoWeeks, oneMonth, unlimited.
    *
    * @return EmailSyncDuration|null The durationOfEmailToSync
    */
    public function getDurationOfEmailToSync()
    {
        if (array_key_exists("durationOfEmailToSync", $this->_propDict) && !is_null($this->_propDict["durationOfEmailToSync"])) {
            if (is_a($this->_propDict["durationOfEmailToSync"], "\Beta\Microsoft\Graph\Model\EmailSyncDuration")) {
                return $this->_propDict["durationOfEmailToSync"];
            } else {
                $this->_propDict["durationOfEmailToSync"] = new EmailSyncDuration($this->_propDict["durationOfEmailToSync"]);
                return $this->_propDict["durationOfEmailToSync"];
            }
        }
        return null;
    }
    
    /**
    * Sets the durationOfEmailToSync
    * Duration of time email should be synced to. Possible values are: userDefined, oneDay, threeDays, oneWeek, twoWeeks, oneMonth, unlimited.
    *
    * @param EmailSyncDuration $val The durationOfEmailToSync
    *
    * @return AndroidForWorkEasEmailProfileBase
    */
    public function setDurationOfEmailToSync($val)
    {
        $this->_propDict["durationOfEmailToSync"] = $val;
        return $this;
    }
    
    /**
    * Gets the emailAddressSource
    * Email attribute that is picked from AAD and injected into this profile before installing on the device. Possible values are: userPrincipalName, primarySmtpAddress.
    *
    * @return UserEmailSource|null The emailAddressSource
    */
    public function getEmailAddressSource()
    {
        if (array_key_exists("emailAddressSource", $this->_propDict) && !is_null($this->_propDict["emailAddressSource"])) {
            if (is_a($this->_propDict["emailAddressSource"], "\Beta\Microsoft\Graph\Model\UserEmailSource")) {
                return $this->_propDict["emailAddressSource"];
            } else {
                $this->_propDict["emailAddressSource"] = new UserEmailSource($this->_propDict["emailAddressSource"]);
                return $this->_propDict["emailAddressSource"];
            }
        }
        return null;
    }
    
    /**
    * Sets the emailAddressSource
    * Email attribute that is picked from AAD and injected into this profile before installing on the device. Possible values are: userPrincipalName, primarySmtpAddress.
    *
    * @param UserEmailSource $val The emailAddressSource
    *
    * @return AndroidForWorkEasEmailProfileBase
    */
    public function setEmailAddressSource($val)
    {
        $this->_propDict["emailAddressSource"] = $val;
        return $this;
    }
    
    /**
    * Gets the hostName
    * Exchange location (URL) that the mail app connects to.
    *
    * @return string|null The hostName
    */
    public function getHostName()
    {
        if (array_key_exists("hostName", $this->_propDict)) {
            return $this->_propDict["hostName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the hostName
    * Exchange location (URL) that the mail app connects to.
    *
    * @param string $val The hostName
    *
    * @return AndroidForWorkEasEmailProfileBase
    */
    public function setHostName($val)
    {
        $this->_propDict["hostName"] = $val;
        return $this;
    }
    
    /**
    * Gets the requireSsl
    * Indicates whether or not to use SSL.
    *
    * @return bool|null The requireSsl
    */
    public function getRequireSsl()
    {
        if (array_key_exists("requireSsl", $this->_propDict)) {
            return $this->_propDict["requireSsl"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the requireSsl
    * Indicates whether or not to use SSL.
    *
    * @param bool $val The requireSsl
    *
    * @return AndroidForWorkEasEmailProfileBase
    */
    public function setRequireSsl($val)
    {
        $this->_propDict["requireSsl"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the usernameSource
    * Username attribute that is picked from AAD and injected into this profile before installing on the device. Possible values are: username, userPrincipalName, samAccountName, primarySmtpAddress.
    *
    * @return AndroidUsernameSource|null The usernameSource
    */
    public function getUsernameSource()
    {
        if (array_key_exists("usernameSource", $this->_propDict) && !is_null($this->_propDict["usernameSource"])) {
            if (is_a($this->_propDict["usernameSource"], "\Beta\Microsoft\Graph\Model\AndroidUsernameSource")) {
                return $this->_propDict["usernameSource"];
            } else {
                $this->_propDict["usernameSource"] = new AndroidUsernameSource($this->_propDict["usernameSource"]);
                return $this->_propDict["usernameSource"];
            }
        }
        return null;
    }
    
    /**
    * Sets the usernameSource
    * Username attribute that is picked from AAD and injected into this profile before installing on the device. Possible values are: username, userPrincipalName, samAccountName, primarySmtpAddress.
    *
    * @param AndroidUsernameSource $val The usernameSource
    *
    * @return AndroidForWorkEasEmailProfileBase
    */
    public function setUsernameSource($val)
    {
        $this->_propDict["usernameSource"] = $val;
        return $this;
    }
    
    /**
    * Gets the identityCertificate
    * Identity certificate.
    *
    * @return AndroidForWorkCertificateProfileBase|null The identityCertificate
    */
    public function getIdentityCertificate()
    {
        if (array_key_exists("identityCertificate", $this->_propDict) && !is_null($this->_propDict["identityCertificate"])) {
            if (is_a($this->_propDict["identityCertificate"], "\Beta\Microsoft\Graph\Model\AndroidForWorkCertificateProfileBase")) {
                return $this->_propDict["identityCertificate"];
            } else {
                $this->_propDict["identityCertificate"] = new AndroidForWorkCertificateProfileBase($this->_propDict["identityCertificate"]);
                return $this->_propDict["identityCertificate"];
            }
        }
        return null;
    }
    
    /**
    * Sets the identityCertificate
    * Identity certificate.
    *
    * @param AndroidForWorkCertificateProfileBase $val The identityCertificate
    *
    * @return AndroidForWorkEasEmailProfileBase
    */
    public function setIdentityCertificate($val)
    {
        $this->_propDict["identityCertificate"] = $val;
        return $this;
    }
    
}
