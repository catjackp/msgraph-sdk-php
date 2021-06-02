<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* RbacApplication File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Microsoft\Graph\Model;

/**
* RbacApplication class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class RbacApplication extends Entity
{

     /** 
     * Gets the roleAssignments
     *
     * @return UnifiedRoleAssignment[]|null The roleAssignments
     */
    public function getRoleAssignments()
    {
        if (array_key_exists('roleAssignments', $this->_propDict) && !is_null($this->_propDict['roleAssignments'])) {
           $roleAssignments = [];
           if (count($this->_propDict['roleAssignments']) > 0 && is_a($this->_propDict['roleAssignments'][0], 'UnifiedRoleAssignment')) {
              return $this->_propDict;
           }
           foreach ($this->_propDict['roleAssignments'] as $singleValue) {
              $roleAssignments []= new UnifiedRoleAssignment($singleValue);
           }
           $this->_propDict['roleAssignments'] = $roleAssignments;
           return $this->_propDict['roleAssignments'];
        }
        return null;
    }
    
    /** 
    * Sets the roleAssignments
    *
    * @param UnifiedRoleAssignment[] $val The roleAssignments
    *
    * @return RbacApplication
    */
    public function setRoleAssignments($val)
    {
        $this->_propDict["roleAssignments"] = $val;
        return $this;
    }
    

     /** 
     * Gets the roleDefinitions
     *
     * @return UnifiedRoleDefinition[]|null The roleDefinitions
     */
    public function getRoleDefinitions()
    {
        if (array_key_exists('roleDefinitions', $this->_propDict) && !is_null($this->_propDict['roleDefinitions'])) {
           $roleDefinitions = [];
           if (count($this->_propDict['roleDefinitions']) > 0 && is_a($this->_propDict['roleDefinitions'][0], 'UnifiedRoleDefinition')) {
              return $this->_propDict;
           }
           foreach ($this->_propDict['roleDefinitions'] as $singleValue) {
              $roleDefinitions []= new UnifiedRoleDefinition($singleValue);
           }
           $this->_propDict['roleDefinitions'] = $roleDefinitions;
           return $this->_propDict['roleDefinitions'];
        }
        return null;
    }
    
    /** 
    * Sets the roleDefinitions
    *
    * @param UnifiedRoleDefinition[] $val The roleDefinitions
    *
    * @return RbacApplication
    */
    public function setRoleDefinitions($val)
    {
        $this->_propDict["roleDefinitions"] = $val;
        return $this;
    }
    
}
