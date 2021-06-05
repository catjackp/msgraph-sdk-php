<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* VirtualEndpoint File
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
* VirtualEndpoint class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class VirtualEndpoint extends Entity
{

     /** 
     * Gets the cloudPCs
    * Cloud managed virtual desktops.
     *
     * @return CloudPC[]|null The cloudPCs
     */
    public function getCloudPCs()
    {
        if (array_key_exists('cloudPCs', $this->_propDict) && !is_null($this->_propDict['cloudPCs'])) {
           $cloudPCs = [];
           if (count($this->_propDict['cloudPCs']) > 0 && is_a($this->_propDict['cloudPCs'][0], 'CloudPC')) {
              return $this->_propDict['cloudPCs'];
           }
           foreach ($this->_propDict['cloudPCs'] as $singleValue) {
              $cloudPCs []= new CloudPC($singleValue);
           }
           $this->_propDict['cloudPCs'] = $cloudPCs;
           return $this->_propDict['cloudPCs'];
        }
        return null;
    }
    
    /** 
    * Sets the cloudPCs
    * Cloud managed virtual desktops.
    *
    * @param CloudPC[] $val The cloudPCs
    *
    * @return VirtualEndpoint
    */
    public function setCloudPCs($val)
    {
        $this->_propDict["cloudPCs"] = $val;
        return $this;
    }
    

     /** 
     * Gets the deviceImages
    * The image resource on cloud PC.
     *
     * @return CloudPcDeviceImage[]|null The deviceImages
     */
    public function getDeviceImages()
    {
        if (array_key_exists('deviceImages', $this->_propDict) && !is_null($this->_propDict['deviceImages'])) {
           $deviceImages = [];
           if (count($this->_propDict['deviceImages']) > 0 && is_a($this->_propDict['deviceImages'][0], 'CloudPcDeviceImage')) {
              return $this->_propDict['deviceImages'];
           }
           foreach ($this->_propDict['deviceImages'] as $singleValue) {
              $deviceImages []= new CloudPcDeviceImage($singleValue);
           }
           $this->_propDict['deviceImages'] = $deviceImages;
           return $this->_propDict['deviceImages'];
        }
        return null;
    }
    
    /** 
    * Sets the deviceImages
    * The image resource on cloud PC.
    *
    * @param CloudPcDeviceImage[] $val The deviceImages
    *
    * @return VirtualEndpoint
    */
    public function setDeviceImages($val)
    {
        $this->_propDict["deviceImages"] = $val;
        return $this;
    }
    

     /** 
     * Gets the onPremisesConnections
    * A defined collection of Azure resource information that can be used to establish on-premises network connectivity for cloud PCs.
     *
     * @return CloudPcOnPremisesConnection[]|null The onPremisesConnections
     */
    public function getOnPremisesConnections()
    {
        if (array_key_exists('onPremisesConnections', $this->_propDict) && !is_null($this->_propDict['onPremisesConnections'])) {
           $onPremisesConnections = [];
           if (count($this->_propDict['onPremisesConnections']) > 0 && is_a($this->_propDict['onPremisesConnections'][0], 'CloudPcOnPremisesConnection')) {
              return $this->_propDict['onPremisesConnections'];
           }
           foreach ($this->_propDict['onPremisesConnections'] as $singleValue) {
              $onPremisesConnections []= new CloudPcOnPremisesConnection($singleValue);
           }
           $this->_propDict['onPremisesConnections'] = $onPremisesConnections;
           return $this->_propDict['onPremisesConnections'];
        }
        return null;
    }
    
    /** 
    * Sets the onPremisesConnections
    * A defined collection of Azure resource information that can be used to establish on-premises network connectivity for cloud PCs.
    *
    * @param CloudPcOnPremisesConnection[] $val The onPremisesConnections
    *
    * @return VirtualEndpoint
    */
    public function setOnPremisesConnections($val)
    {
        $this->_propDict["onPremisesConnections"] = $val;
        return $this;
    }
    

     /** 
     * Gets the provisioningPolicies
    * cloud PC provisioning policy.
     *
     * @return CloudPcProvisioningPolicy[]|null The provisioningPolicies
     */
    public function getProvisioningPolicies()
    {
        if (array_key_exists('provisioningPolicies', $this->_propDict) && !is_null($this->_propDict['provisioningPolicies'])) {
           $provisioningPolicies = [];
           if (count($this->_propDict['provisioningPolicies']) > 0 && is_a($this->_propDict['provisioningPolicies'][0], 'CloudPcProvisioningPolicy')) {
              return $this->_propDict['provisioningPolicies'];
           }
           foreach ($this->_propDict['provisioningPolicies'] as $singleValue) {
              $provisioningPolicies []= new CloudPcProvisioningPolicy($singleValue);
           }
           $this->_propDict['provisioningPolicies'] = $provisioningPolicies;
           return $this->_propDict['provisioningPolicies'];
        }
        return null;
    }
    
    /** 
    * Sets the provisioningPolicies
    * cloud PC provisioning policy.
    *
    * @param CloudPcProvisioningPolicy[] $val The provisioningPolicies
    *
    * @return VirtualEndpoint
    */
    public function setProvisioningPolicies($val)
    {
        $this->_propDict["provisioningPolicies"] = $val;
        return $this;
    }
    

     /** 
     * Gets the userSettings
     *
     * @return CloudPcUserSetting[]|null The userSettings
     */
    public function getUserSettings()
    {
        if (array_key_exists('userSettings', $this->_propDict) && !is_null($this->_propDict['userSettings'])) {
           $userSettings = [];
           if (count($this->_propDict['userSettings']) > 0 && is_a($this->_propDict['userSettings'][0], 'CloudPcUserSetting')) {
              return $this->_propDict['userSettings'];
           }
           foreach ($this->_propDict['userSettings'] as $singleValue) {
              $userSettings []= new CloudPcUserSetting($singleValue);
           }
           $this->_propDict['userSettings'] = $userSettings;
           return $this->_propDict['userSettings'];
        }
        return null;
    }
    
    /** 
    * Sets the userSettings
    *
    * @param CloudPcUserSetting[] $val The userSettings
    *
    * @return VirtualEndpoint
    */
    public function setUserSettings($val)
    {
        $this->_propDict["userSettings"] = $val;
        return $this;
    }
    
}
