<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ServiceAnnouncementBase File
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
* ServiceAnnouncementBase class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ServiceAnnouncementBase extends Entity
{

     /** 
     * Gets the details
     *
     * @return KeyValuePair[]|null The details
     */
    public function getDetails()
    {
        if (array_key_exists('details', $this->_propDict) && !is_null($this->_propDict['details'])) {
           $details = [];
           if (count($this->_propDict['details']) > 0 && is_a($this->_propDict['details'][0], 'KeyValuePair')) {
              return $this->_propDict;
           }
           foreach ($this->_propDict['details'] as $singleValue) {
              $details []= new KeyValuePair($singleValue);
           }
           $this->_propDict['details'] = $details;
           return $this->_propDict['details'];
        }
        return null;
    }
    
    /** 
    * Sets the details
    *
    * @param KeyValuePair[] $val The details
    *
    * @return ServiceAnnouncementBase
    */
    public function setDetails($val)
    {
        $this->_propDict["details"] = $val;
        return $this;
    }
    
    /**
    * Gets the endDateTime
    *
    * @return \DateTime|null The endDateTime
    */
    public function getEndDateTime()
    {
        if (array_key_exists("endDateTime", $this->_propDict) && !is_null($this->_propDict["endDateTime"])) {
            if (is_a($this->_propDict["endDateTime"], "\DateTime")) {
                return $this->_propDict["endDateTime"];
            } else {
                $this->_propDict["endDateTime"] = new \DateTime($this->_propDict["endDateTime"]);
                return $this->_propDict["endDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the endDateTime
    *
    * @param \DateTime $val The endDateTime
    *
    * @return ServiceAnnouncementBase
    */
    public function setEndDateTime($val)
    {
        $this->_propDict["endDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the lastModifiedDateTime
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
    *
    * @param \DateTime $val The lastModifiedDateTime
    *
    * @return ServiceAnnouncementBase
    */
    public function setLastModifiedDateTime($val)
    {
        $this->_propDict["lastModifiedDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the startDateTime
    *
    * @return \DateTime|null The startDateTime
    */
    public function getStartDateTime()
    {
        if (array_key_exists("startDateTime", $this->_propDict) && !is_null($this->_propDict["startDateTime"])) {
            if (is_a($this->_propDict["startDateTime"], "\DateTime")) {
                return $this->_propDict["startDateTime"];
            } else {
                $this->_propDict["startDateTime"] = new \DateTime($this->_propDict["startDateTime"]);
                return $this->_propDict["startDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the startDateTime
    *
    * @param \DateTime $val The startDateTime
    *
    * @return ServiceAnnouncementBase
    */
    public function setStartDateTime($val)
    {
        $this->_propDict["startDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the title
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
    *
    * @param string $val The title
    *
    * @return ServiceAnnouncementBase
    */
    public function setTitle($val)
    {
        $this->_propDict["title"] = $val;
        return $this;
    }
    
}