<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* MembersAddedEventMessageDetail File
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
* MembersAddedEventMessageDetail class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class MembersAddedEventMessageDetail extends EventMessageDetail
{
    /**
    * Set the @odata.type since this type is immediately descended from an abstract
    * type that is referenced as the type in an entity.
    */
    public function __construct()
    {
        $this->setODataType("#microsoft.graph.membersAddedEventMessageDetail");
    }


    /**
    * Gets the initiator
    *
    * @return IdentitySet|null The initiator
    */
    public function getInitiator()
    {
        if (array_key_exists("initiator", $this->_propDict) && !is_null($this->_propDict["initiator"])) {
     
            if (is_a($this->_propDict["initiator"], "\Beta\Microsoft\Graph\Model\IdentitySet")) {
                return $this->_propDict["initiator"];
            } else {
                $this->_propDict["initiator"] = new IdentitySet($this->_propDict["initiator"]);
                return $this->_propDict["initiator"];
            }
        }
        return null;
    }

    /**
    * Sets the initiator
    *
    * @param IdentitySet $val The value to assign to the initiator
    *
    * @return MembersAddedEventMessageDetail The MembersAddedEventMessageDetail
    */
    public function setInitiator($val)
    {
        $this->_propDict["initiator"] = $val;
         return $this;
    }

    /**
    * Gets the members
    *
    * @return Identity[]|null The members
    */
    public function getMembers()
    {
        if (array_key_exists("members", $this->_propDict) && !is_null($this->_propDict["members"])) {
       
            if (count($this->_propDict['members']) === 0) {
              return $this->_propDict['members'];
            }
            if (is_a($this->_propDict['members'][0], ' Identity')) {
               return $this->_propDict['members'];
            }
            $members = [];
            foreach ($this->_propDict['members'] as $singleValue) {
               $members []= new Identity($singleValue);
            }
            $this->_propDict['members'] = $members;
            return $this->_propDict['members'];
            }
        return null;
    }

    /**
    * Sets the members
    *
    * @param Identity[] $val The value to assign to the members
    *
    * @return MembersAddedEventMessageDetail The MembersAddedEventMessageDetail
    */
    public function setMembers($val)
    {
        $this->_propDict["members"] = $val;
         return $this;
    }
}
