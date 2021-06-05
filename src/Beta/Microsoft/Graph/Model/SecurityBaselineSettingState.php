<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* SecurityBaselineSettingState File
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
* SecurityBaselineSettingState class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class SecurityBaselineSettingState extends Entity
{

     /** 
     * Gets the contributingPolicies
    * The policies that contribute to this setting instance
     *
     * @return SecurityBaselineContributingPolicy[]|null The contributingPolicies
     */
    public function getContributingPolicies()
    {
        if (array_key_exists('contributingPolicies', $this->_propDict) && !is_null($this->_propDict['contributingPolicies'])) {
           $contributingPolicies = [];
           if (count($this->_propDict['contributingPolicies']) > 0 && is_a($this->_propDict['contributingPolicies'][0], 'SecurityBaselineContributingPolicy')) {
              return $this->_propDict['contributingPolicies'];
           }
           foreach ($this->_propDict['contributingPolicies'] as $singleValue) {
              $contributingPolicies []= new SecurityBaselineContributingPolicy($singleValue);
           }
           $this->_propDict['contributingPolicies'] = $contributingPolicies;
           return $this->_propDict['contributingPolicies'];
        }
        return null;
    }
    
    /** 
    * Sets the contributingPolicies
    * The policies that contribute to this setting instance
    *
    * @param SecurityBaselineContributingPolicy[] $val The contributingPolicies
    *
    * @return SecurityBaselineSettingState
    */
    public function setContributingPolicies($val)
    {
        $this->_propDict["contributingPolicies"] = $val;
        return $this;
    }
    
    /**
    * Gets the errorCode
    * The error code if the setting is in error state
    *
    * @return string|null The errorCode
    */
    public function getErrorCode()
    {
        if (array_key_exists("errorCode", $this->_propDict)) {
            return $this->_propDict["errorCode"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the errorCode
    * The error code if the setting is in error state
    *
    * @param string $val The errorCode
    *
    * @return SecurityBaselineSettingState
    */
    public function setErrorCode($val)
    {
        $this->_propDict["errorCode"] = $val;
        return $this;
    }
    
    /**
    * Gets the settingCategoryId
    * The setting category id which this setting belongs to
    *
    * @return string|null The settingCategoryId
    */
    public function getSettingCategoryId()
    {
        if (array_key_exists("settingCategoryId", $this->_propDict)) {
            return $this->_propDict["settingCategoryId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the settingCategoryId
    * The setting category id which this setting belongs to
    *
    * @param string $val The settingCategoryId
    *
    * @return SecurityBaselineSettingState
    */
    public function setSettingCategoryId($val)
    {
        $this->_propDict["settingCategoryId"] = $val;
        return $this;
    }
    
    /**
    * Gets the settingCategoryName
    * The setting category name which this setting belongs to
    *
    * @return string|null The settingCategoryName
    */
    public function getSettingCategoryName()
    {
        if (array_key_exists("settingCategoryName", $this->_propDict)) {
            return $this->_propDict["settingCategoryName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the settingCategoryName
    * The setting category name which this setting belongs to
    *
    * @param string $val The settingCategoryName
    *
    * @return SecurityBaselineSettingState
    */
    public function setSettingCategoryName($val)
    {
        $this->_propDict["settingCategoryName"] = $val;
        return $this;
    }
    
    /**
    * Gets the settingId
    * The setting id guid
    *
    * @return string|null The settingId
    */
    public function getSettingId()
    {
        if (array_key_exists("settingId", $this->_propDict)) {
            return $this->_propDict["settingId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the settingId
    * The setting id guid
    *
    * @param string $val The settingId
    *
    * @return SecurityBaselineSettingState
    */
    public function setSettingId($val)
    {
        $this->_propDict["settingId"] = $val;
        return $this;
    }
    
    /**
    * Gets the settingName
    * The setting name that is being reported
    *
    * @return string|null The settingName
    */
    public function getSettingName()
    {
        if (array_key_exists("settingName", $this->_propDict)) {
            return $this->_propDict["settingName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the settingName
    * The setting name that is being reported
    *
    * @param string $val The settingName
    *
    * @return SecurityBaselineSettingState
    */
    public function setSettingName($val)
    {
        $this->_propDict["settingName"] = $val;
        return $this;
    }
    

     /** 
     * Gets the sourcePolicies
    * The policies that contribute to this setting instance
     *
     * @return SettingSource[]|null The sourcePolicies
     */
    public function getSourcePolicies()
    {
        if (array_key_exists('sourcePolicies', $this->_propDict) && !is_null($this->_propDict['sourcePolicies'])) {
           $sourcePolicies = [];
           if (count($this->_propDict['sourcePolicies']) > 0 && is_a($this->_propDict['sourcePolicies'][0], 'SettingSource')) {
              return $this->_propDict['sourcePolicies'];
           }
           foreach ($this->_propDict['sourcePolicies'] as $singleValue) {
              $sourcePolicies []= new SettingSource($singleValue);
           }
           $this->_propDict['sourcePolicies'] = $sourcePolicies;
           return $this->_propDict['sourcePolicies'];
        }
        return null;
    }
    
    /** 
    * Sets the sourcePolicies
    * The policies that contribute to this setting instance
    *
    * @param SettingSource[] $val The sourcePolicies
    *
    * @return SecurityBaselineSettingState
    */
    public function setSourcePolicies($val)
    {
        $this->_propDict["sourcePolicies"] = $val;
        return $this;
    }
    
    /**
    * Gets the state
    * The compliance state of the security baseline setting
    *
    * @return SecurityBaselineComplianceState|null The state
    */
    public function getState()
    {
        if (array_key_exists("state", $this->_propDict) && !is_null($this->_propDict["state"])) {
            if (is_a($this->_propDict["state"], "\Beta\Microsoft\Graph\Model\SecurityBaselineComplianceState")) {
                return $this->_propDict["state"];
            } else {
                $this->_propDict["state"] = new SecurityBaselineComplianceState($this->_propDict["state"]);
                return $this->_propDict["state"];
            }
        }
        return null;
    }
    
    /**
    * Sets the state
    * The compliance state of the security baseline setting
    *
    * @param SecurityBaselineComplianceState $val The state
    *
    * @return SecurityBaselineSettingState
    */
    public function setState($val)
    {
        $this->_propDict["state"] = $val;
        return $this;
    }
    
}
