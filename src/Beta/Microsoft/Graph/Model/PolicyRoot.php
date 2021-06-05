<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* PolicyRoot File
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
* PolicyRoot class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class PolicyRoot implements \JsonSerializable
{
    /**
    * The array of properties available
    * to the model
    *
    * @var array $_propDict
    */
    protected $_propDict;
    
    /**
    * Construct a new PolicyRoot
    *
    * @param array $propDict A list of properties to set
    */
    function __construct($propDict = array())
    {
        if (!is_array($propDict)) {
           $propDict = array();
        }
        $this->_propDict = $propDict;
    }

    /**
    * Gets the property dictionary of the PolicyRoot
    *
    * @return array The list of properties
    */
    public function getProperties()
    {
        return $this->_propDict;
    }
    
    /**
    * Gets the authenticationMethodsPolicy
    *
    * @return AuthenticationMethodsPolicy|null The authenticationMethodsPolicy
    */
    public function getAuthenticationMethodsPolicy()
    {
        if (array_key_exists("authenticationMethodsPolicy", $this->_propDict) && !is_null($this->_propDict["authenticationMethodsPolicy"])) {
            if (is_a($this->_propDict["authenticationMethodsPolicy"], "\Beta\Microsoft\Graph\Model\AuthenticationMethodsPolicy")) {
                return $this->_propDict["authenticationMethodsPolicy"];
            } else {
                $this->_propDict["authenticationMethodsPolicy"] = new AuthenticationMethodsPolicy($this->_propDict["authenticationMethodsPolicy"]);
                return $this->_propDict["authenticationMethodsPolicy"];
            }
        }
        return null;
    }
    
    /**
    * Sets the authenticationMethodsPolicy
    *
    * @param AuthenticationMethodsPolicy $val The authenticationMethodsPolicy
    *
    * @return PolicyRoot
    */
    public function setAuthenticationMethodsPolicy($val)
    {
        $this->_propDict["authenticationMethodsPolicy"] = $val;
        return $this;
    }
    
    /**
    * Gets the authenticationFlowsPolicy
    *
    * @return AuthenticationFlowsPolicy|null The authenticationFlowsPolicy
    */
    public function getAuthenticationFlowsPolicy()
    {
        if (array_key_exists("authenticationFlowsPolicy", $this->_propDict) && !is_null($this->_propDict["authenticationFlowsPolicy"])) {
            if (is_a($this->_propDict["authenticationFlowsPolicy"], "\Beta\Microsoft\Graph\Model\AuthenticationFlowsPolicy")) {
                return $this->_propDict["authenticationFlowsPolicy"];
            } else {
                $this->_propDict["authenticationFlowsPolicy"] = new AuthenticationFlowsPolicy($this->_propDict["authenticationFlowsPolicy"]);
                return $this->_propDict["authenticationFlowsPolicy"];
            }
        }
        return null;
    }
    
    /**
    * Sets the authenticationFlowsPolicy
    *
    * @param AuthenticationFlowsPolicy $val The authenticationFlowsPolicy
    *
    * @return PolicyRoot
    */
    public function setAuthenticationFlowsPolicy($val)
    {
        $this->_propDict["authenticationFlowsPolicy"] = $val;
        return $this;
    }
    
    /**
    * Gets the b2cAuthenticationMethodsPolicy
    *
    * @return B2cAuthenticationMethodsPolicy|null The b2cAuthenticationMethodsPolicy
    */
    public function getB2cAuthenticationMethodsPolicy()
    {
        if (array_key_exists("b2cAuthenticationMethodsPolicy", $this->_propDict) && !is_null($this->_propDict["b2cAuthenticationMethodsPolicy"])) {
            if (is_a($this->_propDict["b2cAuthenticationMethodsPolicy"], "\Beta\Microsoft\Graph\Model\B2cAuthenticationMethodsPolicy")) {
                return $this->_propDict["b2cAuthenticationMethodsPolicy"];
            } else {
                $this->_propDict["b2cAuthenticationMethodsPolicy"] = new B2cAuthenticationMethodsPolicy($this->_propDict["b2cAuthenticationMethodsPolicy"]);
                return $this->_propDict["b2cAuthenticationMethodsPolicy"];
            }
        }
        return null;
    }
    
    /**
    * Sets the b2cAuthenticationMethodsPolicy
    *
    * @param B2cAuthenticationMethodsPolicy $val The b2cAuthenticationMethodsPolicy
    *
    * @return PolicyRoot
    */
    public function setB2cAuthenticationMethodsPolicy($val)
    {
        $this->_propDict["b2cAuthenticationMethodsPolicy"] = $val;
        return $this;
    }
    

     /** 
     * Gets the activityBasedTimeoutPolicies
     *
     * @return ActivityBasedTimeoutPolicy[]|null The activityBasedTimeoutPolicies
     */
    public function getActivityBasedTimeoutPolicies()
    {
        if (array_key_exists('activityBasedTimeoutPolicies', $this->_propDict) && !is_null($this->_propDict['activityBasedTimeoutPolicies'])) {
           $activityBasedTimeoutPolicies = [];
           if (count($this->_propDict['activityBasedTimeoutPolicies']) > 0 && is_a($this->_propDict['activityBasedTimeoutPolicies'][0], 'ActivityBasedTimeoutPolicy')) {
              return $this->_propDict['activityBasedTimeoutPolicies'];
           }
           foreach ($this->_propDict['activityBasedTimeoutPolicies'] as $singleValue) {
              $activityBasedTimeoutPolicies []= new ActivityBasedTimeoutPolicy($singleValue);
           }
           $this->_propDict['activityBasedTimeoutPolicies'] = $activityBasedTimeoutPolicies;
           return $this->_propDict['activityBasedTimeoutPolicies'];
        }
        return null;
    }
    
    /** 
    * Sets the activityBasedTimeoutPolicies
    *
    * @param ActivityBasedTimeoutPolicy[] $val The activityBasedTimeoutPolicies
    *
    * @return PolicyRoot
    */
    public function setActivityBasedTimeoutPolicies($val)
    {
        $this->_propDict["activityBasedTimeoutPolicies"] = $val;
        return $this;
    }
    

     /** 
     * Gets the authorizationPolicy
     *
     * @return AuthorizationPolicy[]|null The authorizationPolicy
     */
    public function getAuthorizationPolicy()
    {
        if (array_key_exists('authorizationPolicy', $this->_propDict) && !is_null($this->_propDict['authorizationPolicy'])) {
           $authorizationPolicy = [];
           if (count($this->_propDict['authorizationPolicy']) > 0 && is_a($this->_propDict['authorizationPolicy'][0], 'AuthorizationPolicy')) {
              return $this->_propDict['authorizationPolicy'];
           }
           foreach ($this->_propDict['authorizationPolicy'] as $singleValue) {
              $authorizationPolicy []= new AuthorizationPolicy($singleValue);
           }
           $this->_propDict['authorizationPolicy'] = $authorizationPolicy;
           return $this->_propDict['authorizationPolicy'];
        }
        return null;
    }
    
    /** 
    * Sets the authorizationPolicy
    *
    * @param AuthorizationPolicy[] $val The authorizationPolicy
    *
    * @return PolicyRoot
    */
    public function setAuthorizationPolicy($val)
    {
        $this->_propDict["authorizationPolicy"] = $val;
        return $this;
    }
    

     /** 
     * Gets the claimsMappingPolicies
     *
     * @return ClaimsMappingPolicy[]|null The claimsMappingPolicies
     */
    public function getClaimsMappingPolicies()
    {
        if (array_key_exists('claimsMappingPolicies', $this->_propDict) && !is_null($this->_propDict['claimsMappingPolicies'])) {
           $claimsMappingPolicies = [];
           if (count($this->_propDict['claimsMappingPolicies']) > 0 && is_a($this->_propDict['claimsMappingPolicies'][0], 'ClaimsMappingPolicy')) {
              return $this->_propDict['claimsMappingPolicies'];
           }
           foreach ($this->_propDict['claimsMappingPolicies'] as $singleValue) {
              $claimsMappingPolicies []= new ClaimsMappingPolicy($singleValue);
           }
           $this->_propDict['claimsMappingPolicies'] = $claimsMappingPolicies;
           return $this->_propDict['claimsMappingPolicies'];
        }
        return null;
    }
    
    /** 
    * Sets the claimsMappingPolicies
    *
    * @param ClaimsMappingPolicy[] $val The claimsMappingPolicies
    *
    * @return PolicyRoot
    */
    public function setClaimsMappingPolicies($val)
    {
        $this->_propDict["claimsMappingPolicies"] = $val;
        return $this;
    }
    

     /** 
     * Gets the homeRealmDiscoveryPolicies
     *
     * @return HomeRealmDiscoveryPolicy[]|null The homeRealmDiscoveryPolicies
     */
    public function getHomeRealmDiscoveryPolicies()
    {
        if (array_key_exists('homeRealmDiscoveryPolicies', $this->_propDict) && !is_null($this->_propDict['homeRealmDiscoveryPolicies'])) {
           $homeRealmDiscoveryPolicies = [];
           if (count($this->_propDict['homeRealmDiscoveryPolicies']) > 0 && is_a($this->_propDict['homeRealmDiscoveryPolicies'][0], 'HomeRealmDiscoveryPolicy')) {
              return $this->_propDict['homeRealmDiscoveryPolicies'];
           }
           foreach ($this->_propDict['homeRealmDiscoveryPolicies'] as $singleValue) {
              $homeRealmDiscoveryPolicies []= new HomeRealmDiscoveryPolicy($singleValue);
           }
           $this->_propDict['homeRealmDiscoveryPolicies'] = $homeRealmDiscoveryPolicies;
           return $this->_propDict['homeRealmDiscoveryPolicies'];
        }
        return null;
    }
    
    /** 
    * Sets the homeRealmDiscoveryPolicies
    *
    * @param HomeRealmDiscoveryPolicy[] $val The homeRealmDiscoveryPolicies
    *
    * @return PolicyRoot
    */
    public function setHomeRealmDiscoveryPolicies($val)
    {
        $this->_propDict["homeRealmDiscoveryPolicies"] = $val;
        return $this;
    }
    

     /** 
     * Gets the permissionGrantPolicies
     *
     * @return PermissionGrantPolicy[]|null The permissionGrantPolicies
     */
    public function getPermissionGrantPolicies()
    {
        if (array_key_exists('permissionGrantPolicies', $this->_propDict) && !is_null($this->_propDict['permissionGrantPolicies'])) {
           $permissionGrantPolicies = [];
           if (count($this->_propDict['permissionGrantPolicies']) > 0 && is_a($this->_propDict['permissionGrantPolicies'][0], 'PermissionGrantPolicy')) {
              return $this->_propDict['permissionGrantPolicies'];
           }
           foreach ($this->_propDict['permissionGrantPolicies'] as $singleValue) {
              $permissionGrantPolicies []= new PermissionGrantPolicy($singleValue);
           }
           $this->_propDict['permissionGrantPolicies'] = $permissionGrantPolicies;
           return $this->_propDict['permissionGrantPolicies'];
        }
        return null;
    }
    
    /** 
    * Sets the permissionGrantPolicies
    *
    * @param PermissionGrantPolicy[] $val The permissionGrantPolicies
    *
    * @return PolicyRoot
    */
    public function setPermissionGrantPolicies($val)
    {
        $this->_propDict["permissionGrantPolicies"] = $val;
        return $this;
    }
    

     /** 
     * Gets the tokenIssuancePolicies
     *
     * @return TokenIssuancePolicy[]|null The tokenIssuancePolicies
     */
    public function getTokenIssuancePolicies()
    {
        if (array_key_exists('tokenIssuancePolicies', $this->_propDict) && !is_null($this->_propDict['tokenIssuancePolicies'])) {
           $tokenIssuancePolicies = [];
           if (count($this->_propDict['tokenIssuancePolicies']) > 0 && is_a($this->_propDict['tokenIssuancePolicies'][0], 'TokenIssuancePolicy')) {
              return $this->_propDict['tokenIssuancePolicies'];
           }
           foreach ($this->_propDict['tokenIssuancePolicies'] as $singleValue) {
              $tokenIssuancePolicies []= new TokenIssuancePolicy($singleValue);
           }
           $this->_propDict['tokenIssuancePolicies'] = $tokenIssuancePolicies;
           return $this->_propDict['tokenIssuancePolicies'];
        }
        return null;
    }
    
    /** 
    * Sets the tokenIssuancePolicies
    *
    * @param TokenIssuancePolicy[] $val The tokenIssuancePolicies
    *
    * @return PolicyRoot
    */
    public function setTokenIssuancePolicies($val)
    {
        $this->_propDict["tokenIssuancePolicies"] = $val;
        return $this;
    }
    

     /** 
     * Gets the tokenLifetimePolicies
     *
     * @return TokenLifetimePolicy[]|null The tokenLifetimePolicies
     */
    public function getTokenLifetimePolicies()
    {
        if (array_key_exists('tokenLifetimePolicies', $this->_propDict) && !is_null($this->_propDict['tokenLifetimePolicies'])) {
           $tokenLifetimePolicies = [];
           if (count($this->_propDict['tokenLifetimePolicies']) > 0 && is_a($this->_propDict['tokenLifetimePolicies'][0], 'TokenLifetimePolicy')) {
              return $this->_propDict['tokenLifetimePolicies'];
           }
           foreach ($this->_propDict['tokenLifetimePolicies'] as $singleValue) {
              $tokenLifetimePolicies []= new TokenLifetimePolicy($singleValue);
           }
           $this->_propDict['tokenLifetimePolicies'] = $tokenLifetimePolicies;
           return $this->_propDict['tokenLifetimePolicies'];
        }
        return null;
    }
    
    /** 
    * Sets the tokenLifetimePolicies
    *
    * @param TokenLifetimePolicy[] $val The tokenLifetimePolicies
    *
    * @return PolicyRoot
    */
    public function setTokenLifetimePolicies($val)
    {
        $this->_propDict["tokenLifetimePolicies"] = $val;
        return $this;
    }
    

     /** 
     * Gets the featureRolloutPolicies
     *
     * @return FeatureRolloutPolicy[]|null The featureRolloutPolicies
     */
    public function getFeatureRolloutPolicies()
    {
        if (array_key_exists('featureRolloutPolicies', $this->_propDict) && !is_null($this->_propDict['featureRolloutPolicies'])) {
           $featureRolloutPolicies = [];
           if (count($this->_propDict['featureRolloutPolicies']) > 0 && is_a($this->_propDict['featureRolloutPolicies'][0], 'FeatureRolloutPolicy')) {
              return $this->_propDict['featureRolloutPolicies'];
           }
           foreach ($this->_propDict['featureRolloutPolicies'] as $singleValue) {
              $featureRolloutPolicies []= new FeatureRolloutPolicy($singleValue);
           }
           $this->_propDict['featureRolloutPolicies'] = $featureRolloutPolicies;
           return $this->_propDict['featureRolloutPolicies'];
        }
        return null;
    }
    
    /** 
    * Sets the featureRolloutPolicies
    *
    * @param FeatureRolloutPolicy[] $val The featureRolloutPolicies
    *
    * @return PolicyRoot
    */
    public function setFeatureRolloutPolicies($val)
    {
        $this->_propDict["featureRolloutPolicies"] = $val;
        return $this;
    }
    
    /**
    * Gets the accessReviewPolicy
    *
    * @return AccessReviewPolicy|null The accessReviewPolicy
    */
    public function getAccessReviewPolicy()
    {
        if (array_key_exists("accessReviewPolicy", $this->_propDict) && !is_null($this->_propDict["accessReviewPolicy"])) {
            if (is_a($this->_propDict["accessReviewPolicy"], "\Beta\Microsoft\Graph\Model\AccessReviewPolicy")) {
                return $this->_propDict["accessReviewPolicy"];
            } else {
                $this->_propDict["accessReviewPolicy"] = new AccessReviewPolicy($this->_propDict["accessReviewPolicy"]);
                return $this->_propDict["accessReviewPolicy"];
            }
        }
        return null;
    }
    
    /**
    * Sets the accessReviewPolicy
    *
    * @param AccessReviewPolicy $val The accessReviewPolicy
    *
    * @return PolicyRoot
    */
    public function setAccessReviewPolicy($val)
    {
        $this->_propDict["accessReviewPolicy"] = $val;
        return $this;
    }
    
    /**
    * Gets the adminConsentRequestPolicy
    *
    * @return AdminConsentRequestPolicy|null The adminConsentRequestPolicy
    */
    public function getAdminConsentRequestPolicy()
    {
        if (array_key_exists("adminConsentRequestPolicy", $this->_propDict) && !is_null($this->_propDict["adminConsentRequestPolicy"])) {
            if (is_a($this->_propDict["adminConsentRequestPolicy"], "\Beta\Microsoft\Graph\Model\AdminConsentRequestPolicy")) {
                return $this->_propDict["adminConsentRequestPolicy"];
            } else {
                $this->_propDict["adminConsentRequestPolicy"] = new AdminConsentRequestPolicy($this->_propDict["adminConsentRequestPolicy"]);
                return $this->_propDict["adminConsentRequestPolicy"];
            }
        }
        return null;
    }
    
    /**
    * Sets the adminConsentRequestPolicy
    *
    * @param AdminConsentRequestPolicy $val The adminConsentRequestPolicy
    *
    * @return PolicyRoot
    */
    public function setAdminConsentRequestPolicy($val)
    {
        $this->_propDict["adminConsentRequestPolicy"] = $val;
        return $this;
    }
    
    /**
    * Gets the directoryRoleAccessReviewPolicy
    *
    * @return DirectoryRoleAccessReviewPolicy|null The directoryRoleAccessReviewPolicy
    */
    public function getDirectoryRoleAccessReviewPolicy()
    {
        if (array_key_exists("directoryRoleAccessReviewPolicy", $this->_propDict) && !is_null($this->_propDict["directoryRoleAccessReviewPolicy"])) {
            if (is_a($this->_propDict["directoryRoleAccessReviewPolicy"], "\Beta\Microsoft\Graph\Model\DirectoryRoleAccessReviewPolicy")) {
                return $this->_propDict["directoryRoleAccessReviewPolicy"];
            } else {
                $this->_propDict["directoryRoleAccessReviewPolicy"] = new DirectoryRoleAccessReviewPolicy($this->_propDict["directoryRoleAccessReviewPolicy"]);
                return $this->_propDict["directoryRoleAccessReviewPolicy"];
            }
        }
        return null;
    }
    
    /**
    * Sets the directoryRoleAccessReviewPolicy
    *
    * @param DirectoryRoleAccessReviewPolicy $val The directoryRoleAccessReviewPolicy
    *
    * @return PolicyRoot
    */
    public function setDirectoryRoleAccessReviewPolicy($val)
    {
        $this->_propDict["directoryRoleAccessReviewPolicy"] = $val;
        return $this;
    }
    

     /** 
     * Gets the conditionalAccessPolicies
     *
     * @return ConditionalAccessPolicy[]|null The conditionalAccessPolicies
     */
    public function getConditionalAccessPolicies()
    {
        if (array_key_exists('conditionalAccessPolicies', $this->_propDict) && !is_null($this->_propDict['conditionalAccessPolicies'])) {
           $conditionalAccessPolicies = [];
           if (count($this->_propDict['conditionalAccessPolicies']) > 0 && is_a($this->_propDict['conditionalAccessPolicies'][0], 'ConditionalAccessPolicy')) {
              return $this->_propDict['conditionalAccessPolicies'];
           }
           foreach ($this->_propDict['conditionalAccessPolicies'] as $singleValue) {
              $conditionalAccessPolicies []= new ConditionalAccessPolicy($singleValue);
           }
           $this->_propDict['conditionalAccessPolicies'] = $conditionalAccessPolicies;
           return $this->_propDict['conditionalAccessPolicies'];
        }
        return null;
    }
    
    /** 
    * Sets the conditionalAccessPolicies
    *
    * @param ConditionalAccessPolicy[] $val The conditionalAccessPolicies
    *
    * @return PolicyRoot
    */
    public function setConditionalAccessPolicies($val)
    {
        $this->_propDict["conditionalAccessPolicies"] = $val;
        return $this;
    }
    
    /**
    * Gets the identitySecurityDefaultsEnforcementPolicy
    *
    * @return IdentitySecurityDefaultsEnforcementPolicy|null The identitySecurityDefaultsEnforcementPolicy
    */
    public function getIdentitySecurityDefaultsEnforcementPolicy()
    {
        if (array_key_exists("identitySecurityDefaultsEnforcementPolicy", $this->_propDict) && !is_null($this->_propDict["identitySecurityDefaultsEnforcementPolicy"])) {
            if (is_a($this->_propDict["identitySecurityDefaultsEnforcementPolicy"], "\Beta\Microsoft\Graph\Model\IdentitySecurityDefaultsEnforcementPolicy")) {
                return $this->_propDict["identitySecurityDefaultsEnforcementPolicy"];
            } else {
                $this->_propDict["identitySecurityDefaultsEnforcementPolicy"] = new IdentitySecurityDefaultsEnforcementPolicy($this->_propDict["identitySecurityDefaultsEnforcementPolicy"]);
                return $this->_propDict["identitySecurityDefaultsEnforcementPolicy"];
            }
        }
        return null;
    }
    
    /**
    * Sets the identitySecurityDefaultsEnforcementPolicy
    *
    * @param IdentitySecurityDefaultsEnforcementPolicy $val The identitySecurityDefaultsEnforcementPolicy
    *
    * @return PolicyRoot
    */
    public function setIdentitySecurityDefaultsEnforcementPolicy($val)
    {
        $this->_propDict["identitySecurityDefaultsEnforcementPolicy"] = $val;
        return $this;
    }
    

     /** 
     * Gets the roleManagementPolicies
     *
     * @return UnifiedRoleManagementPolicy[]|null The roleManagementPolicies
     */
    public function getRoleManagementPolicies()
    {
        if (array_key_exists('roleManagementPolicies', $this->_propDict) && !is_null($this->_propDict['roleManagementPolicies'])) {
           $roleManagementPolicies = [];
           if (count($this->_propDict['roleManagementPolicies']) > 0 && is_a($this->_propDict['roleManagementPolicies'][0], 'UnifiedRoleManagementPolicy')) {
              return $this->_propDict['roleManagementPolicies'];
           }
           foreach ($this->_propDict['roleManagementPolicies'] as $singleValue) {
              $roleManagementPolicies []= new UnifiedRoleManagementPolicy($singleValue);
           }
           $this->_propDict['roleManagementPolicies'] = $roleManagementPolicies;
           return $this->_propDict['roleManagementPolicies'];
        }
        return null;
    }
    
    /** 
    * Sets the roleManagementPolicies
    *
    * @param UnifiedRoleManagementPolicy[] $val The roleManagementPolicies
    *
    * @return PolicyRoot
    */
    public function setRoleManagementPolicies($val)
    {
        $this->_propDict["roleManagementPolicies"] = $val;
        return $this;
    }
    

     /** 
     * Gets the roleManagementPolicyAssignments
     *
     * @return UnifiedRoleManagementPolicyAssignment[]|null The roleManagementPolicyAssignments
     */
    public function getRoleManagementPolicyAssignments()
    {
        if (array_key_exists('roleManagementPolicyAssignments', $this->_propDict) && !is_null($this->_propDict['roleManagementPolicyAssignments'])) {
           $roleManagementPolicyAssignments = [];
           if (count($this->_propDict['roleManagementPolicyAssignments']) > 0 && is_a($this->_propDict['roleManagementPolicyAssignments'][0], 'UnifiedRoleManagementPolicyAssignment')) {
              return $this->_propDict['roleManagementPolicyAssignments'];
           }
           foreach ($this->_propDict['roleManagementPolicyAssignments'] as $singleValue) {
              $roleManagementPolicyAssignments []= new UnifiedRoleManagementPolicyAssignment($singleValue);
           }
           $this->_propDict['roleManagementPolicyAssignments'] = $roleManagementPolicyAssignments;
           return $this->_propDict['roleManagementPolicyAssignments'];
        }
        return null;
    }
    
    /** 
    * Sets the roleManagementPolicyAssignments
    *
    * @param UnifiedRoleManagementPolicyAssignment[] $val The roleManagementPolicyAssignments
    *
    * @return PolicyRoot
    */
    public function setRoleManagementPolicyAssignments($val)
    {
        $this->_propDict["roleManagementPolicyAssignments"] = $val;
        return $this;
    }
    
    /**
    * Gets the ODataType
    *
    * @return string The ODataType
    */
    public function getODataType()
    {
        return $this->_propDict["@odata.type"];
    }
    
    /**
    * Sets the ODataType
    *
    * @param string $val The ODataType
    *
    * @return PolicyRoot
    */
    public function setODataType($val)
    {
        $this->_propDict["@odata.type"] = $val;
        return $this;
    }
    
    /**
    * Serializes the object by property array
    * Manually serialize DateTime into RFC3339 format
    *
    * @return array The list of properties
    */
    public function jsonSerialize()
    {
        $serializableProperties = $this->getProperties();
        foreach ($serializableProperties as $property => $val) {
            if (is_a($val, '\DateTime')) {
                $serializableProperties[$property] = $val->format(\DateTimeInterface::RFC3339);
            } else if (is_a($val, '\Microsoft\Graph\Core\Enum')) {
                $serializableProperties[$property] = $val->value();
            } else if (is_array($val)) {
                $values = [];
                if (count($val) > 0 && is_a($val[0], '\DateTime')) {
                   foreach ($values as $propertyValue) {
                       $values []= $propertyValue->format(\DateTimeInterface::RFC3339);
                   }
                } else if(count > 0 && is_a($val[0], '\Microsoft\Graph\Core\Enum')) {
                    foreach ($values as $propertyValue) {
                       $values []= $propertyValue->value();
                   }
                }
                $serializableProperties[$property] = $values;
            }
        }
        return $serializableProperties;
    }
}
