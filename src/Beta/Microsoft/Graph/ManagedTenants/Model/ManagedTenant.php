<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ManagedTenant File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\ManagedTenants\Model;

/**
* ManagedTenant class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ManagedTenant extends \Beta\Microsoft\Graph\Model\Entity
{

     /** 
     * Gets the aggregatedPolicyCompliances
     *
     * @return AggregatedPolicyCompliance[]|null The aggregatedPolicyCompliances
     */
    public function getAggregatedPolicyCompliances()
    {
        if (array_key_exists('aggregatedPolicyCompliances', $this->_propDict) && !is_null($this->_propDict['aggregatedPolicyCompliances'])) {
           $aggregatedPolicyCompliances = [];
           if (count($this->_propDict['aggregatedPolicyCompliances']) > 0 && is_a($this->_propDict['aggregatedPolicyCompliances'][0], 'AggregatedPolicyCompliance')) {
              return $this->_propDict['aggregatedPolicyCompliances'];
           }
           foreach ($this->_propDict['aggregatedPolicyCompliances'] as $singleValue) {
              $aggregatedPolicyCompliances []= new AggregatedPolicyCompliance($singleValue);
           }
           $this->_propDict['aggregatedPolicyCompliances'] = $aggregatedPolicyCompliances;
           return $this->_propDict['aggregatedPolicyCompliances'];
        }
        return null;
    }
    
    /** 
    * Sets the aggregatedPolicyCompliances
    *
    * @param AggregatedPolicyCompliance[] $val The aggregatedPolicyCompliances
    *
    * @return ManagedTenant
    */
    public function setAggregatedPolicyCompliances($val)
    {
        $this->_propDict["aggregatedPolicyCompliances"] = $val;
        return $this;
    }
    

     /** 
     * Gets the cloudPcConnections
     *
     * @return CloudPcConnection[]|null The cloudPcConnections
     */
    public function getCloudPcConnections()
    {
        if (array_key_exists('cloudPcConnections', $this->_propDict) && !is_null($this->_propDict['cloudPcConnections'])) {
           $cloudPcConnections = [];
           if (count($this->_propDict['cloudPcConnections']) > 0 && is_a($this->_propDict['cloudPcConnections'][0], 'CloudPcConnection')) {
              return $this->_propDict['cloudPcConnections'];
           }
           foreach ($this->_propDict['cloudPcConnections'] as $singleValue) {
              $cloudPcConnections []= new CloudPcConnection($singleValue);
           }
           $this->_propDict['cloudPcConnections'] = $cloudPcConnections;
           return $this->_propDict['cloudPcConnections'];
        }
        return null;
    }
    
    /** 
    * Sets the cloudPcConnections
    *
    * @param CloudPcConnection[] $val The cloudPcConnections
    *
    * @return ManagedTenant
    */
    public function setCloudPcConnections($val)
    {
        $this->_propDict["cloudPcConnections"] = $val;
        return $this;
    }
    

     /** 
     * Gets the cloudPcDevices
     *
     * @return CloudPcDevice[]|null The cloudPcDevices
     */
    public function getCloudPcDevices()
    {
        if (array_key_exists('cloudPcDevices', $this->_propDict) && !is_null($this->_propDict['cloudPcDevices'])) {
           $cloudPcDevices = [];
           if (count($this->_propDict['cloudPcDevices']) > 0 && is_a($this->_propDict['cloudPcDevices'][0], 'CloudPcDevice')) {
              return $this->_propDict['cloudPcDevices'];
           }
           foreach ($this->_propDict['cloudPcDevices'] as $singleValue) {
              $cloudPcDevices []= new CloudPcDevice($singleValue);
           }
           $this->_propDict['cloudPcDevices'] = $cloudPcDevices;
           return $this->_propDict['cloudPcDevices'];
        }
        return null;
    }
    
    /** 
    * Sets the cloudPcDevices
    *
    * @param CloudPcDevice[] $val The cloudPcDevices
    *
    * @return ManagedTenant
    */
    public function setCloudPcDevices($val)
    {
        $this->_propDict["cloudPcDevices"] = $val;
        return $this;
    }
    

     /** 
     * Gets the cloudPcsOverview
     *
     * @return CloudPcOverview[]|null The cloudPcsOverview
     */
    public function getCloudPcsOverview()
    {
        if (array_key_exists('cloudPcsOverview', $this->_propDict) && !is_null($this->_propDict['cloudPcsOverview'])) {
           $cloudPcsOverview = [];
           if (count($this->_propDict['cloudPcsOverview']) > 0 && is_a($this->_propDict['cloudPcsOverview'][0], 'CloudPcOverview')) {
              return $this->_propDict['cloudPcsOverview'];
           }
           foreach ($this->_propDict['cloudPcsOverview'] as $singleValue) {
              $cloudPcsOverview []= new CloudPcOverview($singleValue);
           }
           $this->_propDict['cloudPcsOverview'] = $cloudPcsOverview;
           return $this->_propDict['cloudPcsOverview'];
        }
        return null;
    }
    
    /** 
    * Sets the cloudPcsOverview
    *
    * @param CloudPcOverview[] $val The cloudPcsOverview
    *
    * @return ManagedTenant
    */
    public function setCloudPcsOverview($val)
    {
        $this->_propDict["cloudPcsOverview"] = $val;
        return $this;
    }
    

     /** 
     * Gets the conditionalAccessPolicyCoverages
     *
     * @return ConditionalAccessPolicyCoverage[]|null The conditionalAccessPolicyCoverages
     */
    public function getConditionalAccessPolicyCoverages()
    {
        if (array_key_exists('conditionalAccessPolicyCoverages', $this->_propDict) && !is_null($this->_propDict['conditionalAccessPolicyCoverages'])) {
           $conditionalAccessPolicyCoverages = [];
           if (count($this->_propDict['conditionalAccessPolicyCoverages']) > 0 && is_a($this->_propDict['conditionalAccessPolicyCoverages'][0], 'ConditionalAccessPolicyCoverage')) {
              return $this->_propDict['conditionalAccessPolicyCoverages'];
           }
           foreach ($this->_propDict['conditionalAccessPolicyCoverages'] as $singleValue) {
              $conditionalAccessPolicyCoverages []= new ConditionalAccessPolicyCoverage($singleValue);
           }
           $this->_propDict['conditionalAccessPolicyCoverages'] = $conditionalAccessPolicyCoverages;
           return $this->_propDict['conditionalAccessPolicyCoverages'];
        }
        return null;
    }
    
    /** 
    * Sets the conditionalAccessPolicyCoverages
    *
    * @param ConditionalAccessPolicyCoverage[] $val The conditionalAccessPolicyCoverages
    *
    * @return ManagedTenant
    */
    public function setConditionalAccessPolicyCoverages($val)
    {
        $this->_propDict["conditionalAccessPolicyCoverages"] = $val;
        return $this;
    }
    

     /** 
     * Gets the credentialUserRegistrationsSummaries
     *
     * @return CredentialUserRegistrationsSummary[]|null The credentialUserRegistrationsSummaries
     */
    public function getCredentialUserRegistrationsSummaries()
    {
        if (array_key_exists('credentialUserRegistrationsSummaries', $this->_propDict) && !is_null($this->_propDict['credentialUserRegistrationsSummaries'])) {
           $credentialUserRegistrationsSummaries = [];
           if (count($this->_propDict['credentialUserRegistrationsSummaries']) > 0 && is_a($this->_propDict['credentialUserRegistrationsSummaries'][0], 'CredentialUserRegistrationsSummary')) {
              return $this->_propDict['credentialUserRegistrationsSummaries'];
           }
           foreach ($this->_propDict['credentialUserRegistrationsSummaries'] as $singleValue) {
              $credentialUserRegistrationsSummaries []= new CredentialUserRegistrationsSummary($singleValue);
           }
           $this->_propDict['credentialUserRegistrationsSummaries'] = $credentialUserRegistrationsSummaries;
           return $this->_propDict['credentialUserRegistrationsSummaries'];
        }
        return null;
    }
    
    /** 
    * Sets the credentialUserRegistrationsSummaries
    *
    * @param CredentialUserRegistrationsSummary[] $val The credentialUserRegistrationsSummaries
    *
    * @return ManagedTenant
    */
    public function setCredentialUserRegistrationsSummaries($val)
    {
        $this->_propDict["credentialUserRegistrationsSummaries"] = $val;
        return $this;
    }
    

     /** 
     * Gets the deviceCompliancePolicySettingStateSummaries
     *
     * @return DeviceCompliancePolicySettingStateSummary[]|null The deviceCompliancePolicySettingStateSummaries
     */
    public function getDeviceCompliancePolicySettingStateSummaries()
    {
        if (array_key_exists('deviceCompliancePolicySettingStateSummaries', $this->_propDict) && !is_null($this->_propDict['deviceCompliancePolicySettingStateSummaries'])) {
           $deviceCompliancePolicySettingStateSummaries = [];
           if (count($this->_propDict['deviceCompliancePolicySettingStateSummaries']) > 0 && is_a($this->_propDict['deviceCompliancePolicySettingStateSummaries'][0], 'DeviceCompliancePolicySettingStateSummary')) {
              return $this->_propDict['deviceCompliancePolicySettingStateSummaries'];
           }
           foreach ($this->_propDict['deviceCompliancePolicySettingStateSummaries'] as $singleValue) {
              $deviceCompliancePolicySettingStateSummaries []= new DeviceCompliancePolicySettingStateSummary($singleValue);
           }
           $this->_propDict['deviceCompliancePolicySettingStateSummaries'] = $deviceCompliancePolicySettingStateSummaries;
           return $this->_propDict['deviceCompliancePolicySettingStateSummaries'];
        }
        return null;
    }
    
    /** 
    * Sets the deviceCompliancePolicySettingStateSummaries
    *
    * @param DeviceCompliancePolicySettingStateSummary[] $val The deviceCompliancePolicySettingStateSummaries
    *
    * @return ManagedTenant
    */
    public function setDeviceCompliancePolicySettingStateSummaries($val)
    {
        $this->_propDict["deviceCompliancePolicySettingStateSummaries"] = $val;
        return $this;
    }
    

     /** 
     * Gets the managedDeviceCompliances
     *
     * @return ManagedDeviceCompliance[]|null The managedDeviceCompliances
     */
    public function getManagedDeviceCompliances()
    {
        if (array_key_exists('managedDeviceCompliances', $this->_propDict) && !is_null($this->_propDict['managedDeviceCompliances'])) {
           $managedDeviceCompliances = [];
           if (count($this->_propDict['managedDeviceCompliances']) > 0 && is_a($this->_propDict['managedDeviceCompliances'][0], 'ManagedDeviceCompliance')) {
              return $this->_propDict['managedDeviceCompliances'];
           }
           foreach ($this->_propDict['managedDeviceCompliances'] as $singleValue) {
              $managedDeviceCompliances []= new ManagedDeviceCompliance($singleValue);
           }
           $this->_propDict['managedDeviceCompliances'] = $managedDeviceCompliances;
           return $this->_propDict['managedDeviceCompliances'];
        }
        return null;
    }
    
    /** 
    * Sets the managedDeviceCompliances
    *
    * @param ManagedDeviceCompliance[] $val The managedDeviceCompliances
    *
    * @return ManagedTenant
    */
    public function setManagedDeviceCompliances($val)
    {
        $this->_propDict["managedDeviceCompliances"] = $val;
        return $this;
    }
    

     /** 
     * Gets the managedDeviceComplianceTrends
     *
     * @return ManagedDeviceComplianceTrend[]|null The managedDeviceComplianceTrends
     */
    public function getManagedDeviceComplianceTrends()
    {
        if (array_key_exists('managedDeviceComplianceTrends', $this->_propDict) && !is_null($this->_propDict['managedDeviceComplianceTrends'])) {
           $managedDeviceComplianceTrends = [];
           if (count($this->_propDict['managedDeviceComplianceTrends']) > 0 && is_a($this->_propDict['managedDeviceComplianceTrends'][0], 'ManagedDeviceComplianceTrend')) {
              return $this->_propDict['managedDeviceComplianceTrends'];
           }
           foreach ($this->_propDict['managedDeviceComplianceTrends'] as $singleValue) {
              $managedDeviceComplianceTrends []= new ManagedDeviceComplianceTrend($singleValue);
           }
           $this->_propDict['managedDeviceComplianceTrends'] = $managedDeviceComplianceTrends;
           return $this->_propDict['managedDeviceComplianceTrends'];
        }
        return null;
    }
    
    /** 
    * Sets the managedDeviceComplianceTrends
    *
    * @param ManagedDeviceComplianceTrend[] $val The managedDeviceComplianceTrends
    *
    * @return ManagedTenant
    */
    public function setManagedDeviceComplianceTrends($val)
    {
        $this->_propDict["managedDeviceComplianceTrends"] = $val;
        return $this;
    }
    

     /** 
     * Gets the riskyUsers
     *
     * @return RiskyUser[]|null The riskyUsers
     */
    public function getRiskyUsers()
    {
        if (array_key_exists('riskyUsers', $this->_propDict) && !is_null($this->_propDict['riskyUsers'])) {
           $riskyUsers = [];
           if (count($this->_propDict['riskyUsers']) > 0 && is_a($this->_propDict['riskyUsers'][0], 'RiskyUser')) {
              return $this->_propDict['riskyUsers'];
           }
           foreach ($this->_propDict['riskyUsers'] as $singleValue) {
              $riskyUsers []= new RiskyUser($singleValue);
           }
           $this->_propDict['riskyUsers'] = $riskyUsers;
           return $this->_propDict['riskyUsers'];
        }
        return null;
    }
    
    /** 
    * Sets the riskyUsers
    *
    * @param RiskyUser[] $val The riskyUsers
    *
    * @return ManagedTenant
    */
    public function setRiskyUsers($val)
    {
        $this->_propDict["riskyUsers"] = $val;
        return $this;
    }
    

     /** 
     * Gets the windowsDeviceMalwareStates
     *
     * @return WindowsDeviceMalwareState[]|null The windowsDeviceMalwareStates
     */
    public function getWindowsDeviceMalwareStates()
    {
        if (array_key_exists('windowsDeviceMalwareStates', $this->_propDict) && !is_null($this->_propDict['windowsDeviceMalwareStates'])) {
           $windowsDeviceMalwareStates = [];
           if (count($this->_propDict['windowsDeviceMalwareStates']) > 0 && is_a($this->_propDict['windowsDeviceMalwareStates'][0], 'WindowsDeviceMalwareState')) {
              return $this->_propDict['windowsDeviceMalwareStates'];
           }
           foreach ($this->_propDict['windowsDeviceMalwareStates'] as $singleValue) {
              $windowsDeviceMalwareStates []= new WindowsDeviceMalwareState($singleValue);
           }
           $this->_propDict['windowsDeviceMalwareStates'] = $windowsDeviceMalwareStates;
           return $this->_propDict['windowsDeviceMalwareStates'];
        }
        return null;
    }
    
    /** 
    * Sets the windowsDeviceMalwareStates
    *
    * @param WindowsDeviceMalwareState[] $val The windowsDeviceMalwareStates
    *
    * @return ManagedTenant
    */
    public function setWindowsDeviceMalwareStates($val)
    {
        $this->_propDict["windowsDeviceMalwareStates"] = $val;
        return $this;
    }
    

     /** 
     * Gets the windowsProtectionStates
     *
     * @return WindowsProtectionState[]|null The windowsProtectionStates
     */
    public function getWindowsProtectionStates()
    {
        if (array_key_exists('windowsProtectionStates', $this->_propDict) && !is_null($this->_propDict['windowsProtectionStates'])) {
           $windowsProtectionStates = [];
           if (count($this->_propDict['windowsProtectionStates']) > 0 && is_a($this->_propDict['windowsProtectionStates'][0], 'WindowsProtectionState')) {
              return $this->_propDict['windowsProtectionStates'];
           }
           foreach ($this->_propDict['windowsProtectionStates'] as $singleValue) {
              $windowsProtectionStates []= new WindowsProtectionState($singleValue);
           }
           $this->_propDict['windowsProtectionStates'] = $windowsProtectionStates;
           return $this->_propDict['windowsProtectionStates'];
        }
        return null;
    }
    
    /** 
    * Sets the windowsProtectionStates
    *
    * @param WindowsProtectionState[] $val The windowsProtectionStates
    *
    * @return ManagedTenant
    */
    public function setWindowsProtectionStates($val)
    {
        $this->_propDict["windowsProtectionStates"] = $val;
        return $this;
    }
    
}
