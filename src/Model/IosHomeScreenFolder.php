<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* IosHomeScreenFolder File
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
* IosHomeScreenFolder class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class IosHomeScreenFolder extends IosHomeScreenItem
{
    /**
    * Set the @odata.type since this type is immediately descended from an abstract
    * type that is referenced as the type in an entity.
    */
    public function __construct()
    {
        $this->setODataType("#microsoft.graph.iosHomeScreenFolder");
    }


    /**
    * Gets the pages
    * Pages of Home Screen Layout Icons which must be applications or web clips. This collection can contain a maximum of 500 elements.
    *
    * @return IosHomeScreenFolderPage[]|null The pages
    */
    public function getPages()
    {
        if (array_key_exists("pages", $this->_propDict) && !is_null($this->_propDict["pages"])) {
       
            if (count($this->_propDict['pages']) === 0) {
              return $this->_propDict['pages'];
            }
            if (is_a($this->_propDict['pages'][0], ' IosHomeScreenFolderPage')) {
               return $this->_propDict['pages'];
            }
            $pages = [];
            foreach ($this->_propDict['pages'] as $singleValue) {
               $pages []= new IosHomeScreenFolderPage($singleValue);
            }
            $this->_propDict['pages'] = $pages;
            return $this->_propDict['pages'];
            }
        return null;
    }

    /**
    * Sets the pages
    * Pages of Home Screen Layout Icons which must be applications or web clips. This collection can contain a maximum of 500 elements.
    *
    * @param IosHomeScreenFolderPage[] $val The value to assign to the pages
    *
    * @return IosHomeScreenFolder The IosHomeScreenFolder
    */
    public function setPages($val)
    {
        $this->_propDict["pages"] = $val;
         return $this;
    }
}
