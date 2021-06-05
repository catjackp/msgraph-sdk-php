<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* TermsAndConditions File
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
* TermsAndConditions class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class TermsAndConditions extends Entity
{
    /**
    * Gets the acceptanceStatement
    * Administrator-supplied explanation of the terms and conditions, typically describing what it means to accept the terms and conditions set out in the T&amp;C policy. This is shown to the user on prompts to accept the T&amp;C policy.
    *
    * @return string|null The acceptanceStatement
    */
    public function getAcceptanceStatement()
    {
        if (array_key_exists("acceptanceStatement", $this->_propDict)) {
            return $this->_propDict["acceptanceStatement"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the acceptanceStatement
    * Administrator-supplied explanation of the terms and conditions, typically describing what it means to accept the terms and conditions set out in the T&amp;C policy. This is shown to the user on prompts to accept the T&amp;C policy.
    *
    * @param string $val The acceptanceStatement
    *
    * @return TermsAndConditions
    */
    public function setAcceptanceStatement($val)
    {
        $this->_propDict["acceptanceStatement"] = $val;
        return $this;
    }
    
    /**
    * Gets the bodyText
    * Administrator-supplied body text of the terms and conditions, typically the terms themselves. This is shown to the user on prompts to accept the T&amp;C policy.
    *
    * @return string|null The bodyText
    */
    public function getBodyText()
    {
        if (array_key_exists("bodyText", $this->_propDict)) {
            return $this->_propDict["bodyText"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the bodyText
    * Administrator-supplied body text of the terms and conditions, typically the terms themselves. This is shown to the user on prompts to accept the T&amp;C policy.
    *
    * @param string $val The bodyText
    *
    * @return TermsAndConditions
    */
    public function setBodyText($val)
    {
        $this->_propDict["bodyText"] = $val;
        return $this;
    }
    
    /**
    * Gets the createdDateTime
    * DateTime the object was created.
    *
    * @return \DateTime|null The createdDateTime
    */
    public function getCreatedDateTime()
    {
        if (array_key_exists("createdDateTime", $this->_propDict) && !is_null($this->_propDict["createdDateTime"])) {
            if (is_a($this->_propDict["createdDateTime"], "\DateTime")) {
                return $this->_propDict["createdDateTime"];
            } else {
                $this->_propDict["createdDateTime"] = new \DateTime($this->_propDict["createdDateTime"]);
                return $this->_propDict["createdDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the createdDateTime
    * DateTime the object was created.
    *
    * @param \DateTime $val The createdDateTime
    *
    * @return TermsAndConditions
    */
    public function setCreatedDateTime($val)
    {
        $this->_propDict["createdDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the description
    * Administrator-supplied description of the T&amp;C policy.
    *
    * @return string|null The description
    */
    public function getDescription()
    {
        if (array_key_exists("description", $this->_propDict)) {
            return $this->_propDict["description"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the description
    * Administrator-supplied description of the T&amp;C policy.
    *
    * @param string $val The description
    *
    * @return TermsAndConditions
    */
    public function setDescription($val)
    {
        $this->_propDict["description"] = $val;
        return $this;
    }
    
    /**
    * Gets the displayName
    * Administrator-supplied name for the T&amp;C policy.
    *
    * @return string|null The displayName
    */
    public function getDisplayName()
    {
        if (array_key_exists("displayName", $this->_propDict)) {
            return $this->_propDict["displayName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the displayName
    * Administrator-supplied name for the T&amp;C policy.
    *
    * @param string $val The displayName
    *
    * @return TermsAndConditions
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    
    /**
    * Gets the lastModifiedDateTime
    * DateTime the object was last modified.
    *
    * @return \DateTime|null The lastModifiedDateTime
    */
    public function getLastModifiedDateTime()
    {
        if (array_key_exists("lastModifiedDateTime", $this->_propDict) && !is_null($this->_propDict["lastModifiedDateTime"])) {
            if (is_a($this->_propDict["lastModifiedDateTime"], "\DateTime")) {
                return $this->_propDict["lastModifiedDateTime"];
            } else {
                $this->_propDict["lastModifiedDateTime"] = new \DateTime($this->_propDict["lastModifiedDateTime"]);
                return $this->_propDict["lastModifiedDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the lastModifiedDateTime
    * DateTime the object was last modified.
    *
    * @param \DateTime $val The lastModifiedDateTime
    *
    * @return TermsAndConditions
    */
    public function setLastModifiedDateTime($val)
    {
        $this->_propDict["lastModifiedDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the modifiedDateTime
    * DateTime the object was last modified.
    *
    * @return \DateTime|null The modifiedDateTime
    */
    public function getModifiedDateTime()
    {
        if (array_key_exists("modifiedDateTime", $this->_propDict) && !is_null($this->_propDict["modifiedDateTime"])) {
            if (is_a($this->_propDict["modifiedDateTime"], "\DateTime")) {
                return $this->_propDict["modifiedDateTime"];
            } else {
                $this->_propDict["modifiedDateTime"] = new \DateTime($this->_propDict["modifiedDateTime"]);
                return $this->_propDict["modifiedDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the modifiedDateTime
    * DateTime the object was last modified.
    *
    * @param \DateTime $val The modifiedDateTime
    *
    * @return TermsAndConditions
    */
    public function setModifiedDateTime($val)
    {
        $this->_propDict["modifiedDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the roleScopeTagIds
    * List of Scope Tags for this Entity instance.
    *
    * @return string|null The roleScopeTagIds
    */
    public function getRoleScopeTagIds()
    {
        if (array_key_exists("roleScopeTagIds", $this->_propDict)) {
            return $this->_propDict["roleScopeTagIds"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the roleScopeTagIds
    * List of Scope Tags for this Entity instance.
    *
    * @param string $val The roleScopeTagIds
    *
    * @return TermsAndConditions
    */
    public function setRoleScopeTagIds($val)
    {
        $this->_propDict["roleScopeTagIds"] = $val;
        return $this;
    }
    
    /**
    * Gets the title
    * Administrator-supplied title of the terms and conditions. This is shown to the user on prompts to accept the T&amp;C policy.
    *
    * @return string|null The title
    */
    public function getTitle()
    {
        if (array_key_exists("title", $this->_propDict)) {
            return $this->_propDict["title"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the title
    * Administrator-supplied title of the terms and conditions. This is shown to the user on prompts to accept the T&amp;C policy.
    *
    * @param string $val The title
    *
    * @return TermsAndConditions
    */
    public function setTitle($val)
    {
        $this->_propDict["title"] = $val;
        return $this;
    }
    
    /**
    * Gets the version
    * Integer indicating the current version of the terms. Incremented when an administrator makes a change to the terms and wishes to require users to re-accept the modified T&amp;C policy.
    *
    * @return int|null The version
    */
    public function getVersion()
    {
        if (array_key_exists("version", $this->_propDict)) {
            return $this->_propDict["version"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the version
    * Integer indicating the current version of the terms. Incremented when an administrator makes a change to the terms and wishes to require users to re-accept the modified T&amp;C policy.
    *
    * @param int $val The version
    *
    * @return TermsAndConditions
    */
    public function setVersion($val)
    {
        $this->_propDict["version"] = intval($val);
        return $this;
    }
    

     /** 
     * Gets the acceptanceStatuses
    * The list of acceptance statuses for this T&amp;C policy.
     *
     * @return TermsAndConditionsAcceptanceStatus[]|null The acceptanceStatuses
     */
    public function getAcceptanceStatuses()
    {
        if (array_key_exists('acceptanceStatuses', $this->_propDict) && !is_null($this->_propDict['acceptanceStatuses'])) {
           $acceptanceStatuses = [];
           if (count($this->_propDict['acceptanceStatuses']) > 0 && is_a($this->_propDict['acceptanceStatuses'][0], 'TermsAndConditionsAcceptanceStatus')) {
              return $this->_propDict['acceptanceStatuses'];
           }
           foreach ($this->_propDict['acceptanceStatuses'] as $singleValue) {
              $acceptanceStatuses []= new TermsAndConditionsAcceptanceStatus($singleValue);
           }
           $this->_propDict['acceptanceStatuses'] = $acceptanceStatuses;
           return $this->_propDict['acceptanceStatuses'];
        }
        return null;
    }
    
    /** 
    * Sets the acceptanceStatuses
    * The list of acceptance statuses for this T&amp;C policy.
    *
    * @param TermsAndConditionsAcceptanceStatus[] $val The acceptanceStatuses
    *
    * @return TermsAndConditions
    */
    public function setAcceptanceStatuses($val)
    {
        $this->_propDict["acceptanceStatuses"] = $val;
        return $this;
    }
    

     /** 
     * Gets the assignments
    * The list of assignments for this T&amp;C policy.
     *
     * @return TermsAndConditionsAssignment[]|null The assignments
     */
    public function getAssignments()
    {
        if (array_key_exists('assignments', $this->_propDict) && !is_null($this->_propDict['assignments'])) {
           $assignments = [];
           if (count($this->_propDict['assignments']) > 0 && is_a($this->_propDict['assignments'][0], 'TermsAndConditionsAssignment')) {
              return $this->_propDict['assignments'];
           }
           foreach ($this->_propDict['assignments'] as $singleValue) {
              $assignments []= new TermsAndConditionsAssignment($singleValue);
           }
           $this->_propDict['assignments'] = $assignments;
           return $this->_propDict['assignments'];
        }
        return null;
    }
    
    /** 
    * Sets the assignments
    * The list of assignments for this T&amp;C policy.
    *
    * @param TermsAndConditionsAssignment[] $val The assignments
    *
    * @return TermsAndConditions
    */
    public function setAssignments($val)
    {
        $this->_propDict["assignments"] = $val;
        return $this;
    }
    

     /** 
     * Gets the groupAssignments
    * The list of group assignments for this T&amp;C policy.
     *
     * @return TermsAndConditionsGroupAssignment[]|null The groupAssignments
     */
    public function getGroupAssignments()
    {
        if (array_key_exists('groupAssignments', $this->_propDict) && !is_null($this->_propDict['groupAssignments'])) {
           $groupAssignments = [];
           if (count($this->_propDict['groupAssignments']) > 0 && is_a($this->_propDict['groupAssignments'][0], 'TermsAndConditionsGroupAssignment')) {
              return $this->_propDict['groupAssignments'];
           }
           foreach ($this->_propDict['groupAssignments'] as $singleValue) {
              $groupAssignments []= new TermsAndConditionsGroupAssignment($singleValue);
           }
           $this->_propDict['groupAssignments'] = $groupAssignments;
           return $this->_propDict['groupAssignments'];
        }
        return null;
    }
    
    /** 
    * Sets the groupAssignments
    * The list of group assignments for this T&amp;C policy.
    *
    * @param TermsAndConditionsGroupAssignment[] $val The groupAssignments
    *
    * @return TermsAndConditions
    */
    public function setGroupAssignments($val)
    {
        $this->_propDict["groupAssignments"] = $val;
        return $this;
    }
    
}
