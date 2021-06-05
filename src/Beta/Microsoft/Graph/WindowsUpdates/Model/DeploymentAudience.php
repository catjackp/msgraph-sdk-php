<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeploymentAudience File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\WindowsUpdates\Model;

/**
* DeploymentAudience class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DeploymentAudience extends \Beta\Microsoft\Graph\Model\Entity
{

     /** 
     * Gets the exclusions
    * Specifies the assets to exclude from the audience.
     *
     * @return UpdatableAsset[]|null The exclusions
     */
    public function getExclusions()
    {
        if (array_key_exists('exclusions', $this->_propDict) && !is_null($this->_propDict['exclusions'])) {
           $exclusions = [];
           if (count($this->_propDict['exclusions']) > 0 && is_a($this->_propDict['exclusions'][0], 'UpdatableAsset')) {
              return $this->_propDict['exclusions'];
           }
           foreach ($this->_propDict['exclusions'] as $singleValue) {
              $exclusions []= new UpdatableAsset($singleValue);
           }
           $this->_propDict['exclusions'] = $exclusions;
           return $this->_propDict['exclusions'];
        }
        return null;
    }
    
    /** 
    * Sets the exclusions
    * Specifies the assets to exclude from the audience.
    *
    * @param UpdatableAsset[] $val The exclusions
    *
    * @return DeploymentAudience
    */
    public function setExclusions($val)
    {
        $this->_propDict["exclusions"] = $val;
        return $this;
    }
    

     /** 
     * Gets the members
    * Specifies the assets to include in the audience.
     *
     * @return UpdatableAsset[]|null The members
     */
    public function getMembers()
    {
        if (array_key_exists('members', $this->_propDict) && !is_null($this->_propDict['members'])) {
           $members = [];
           if (count($this->_propDict['members']) > 0 && is_a($this->_propDict['members'][0], 'UpdatableAsset')) {
              return $this->_propDict['members'];
           }
           foreach ($this->_propDict['members'] as $singleValue) {
              $members []= new UpdatableAsset($singleValue);
           }
           $this->_propDict['members'] = $members;
           return $this->_propDict['members'];
        }
        return null;
    }
    
    /** 
    * Sets the members
    * Specifies the assets to include in the audience.
    *
    * @param UpdatableAsset[] $val The members
    *
    * @return DeploymentAudience
    */
    public function setMembers($val)
    {
        $this->_propDict["members"] = $val;
        return $this;
    }
    
}
