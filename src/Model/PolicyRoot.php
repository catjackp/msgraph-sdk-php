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
namespace Microsoft\Graph\Model;

/**
* PolicyRoot class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class PolicyRoot extends Entity
{
    /**
    * Gets the authenticationMethodsPolicy
    *
    * @return AuthenticationMethodsPolicy|null The authenticationMethodsPolicy
    */
    public function getAuthenticationMethodsPolicy()
    {
        if (array_key_exists("authenticationMethodsPolicy", $this->_propDict) && !is_null($this->_propDict["authenticationMethodsPolicy"])) {
            if (is_a($this->_propDict["authenticationMethodsPolicy"], "\Microsoft\Graph\Model\AuthenticationMethodsPolicy")) {
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
            if (is_a($this->_propDict["authenticationFlowsPolicy"], "\Microsoft\Graph\Model\AuthenticationFlowsPolicy")) {
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
    * @return AuthorizationPolicy|null The authorizationPolicy
    */
    public function getAuthorizationPolicy()
    {
        if (array_key_exists("authorizationPolicy", $this->_propDict) && !is_null($this->_propDict["authorizationPolicy"])) {
            if (is_a($this->_propDict["authorizationPolicy"], "\Microsoft\Graph\Model\AuthorizationPolicy")) {
                return $this->_propDict["authorizationPolicy"];
            } else {
                $this->_propDict["authorizationPolicy"] = new AuthorizationPolicy($this->_propDict["authorizationPolicy"]);
                return $this->_propDict["authorizationPolicy"];
            }
        }
        return null;
    }
    
    /**
    * Sets the authorizationPolicy
    *
    * @param AuthorizationPolicy $val The authorizationPolicy
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
    * Gets the adminConsentRequestPolicy
    *
    * @return AdminConsentRequestPolicy|null The adminConsentRequestPolicy
    */
    public function getAdminConsentRequestPolicy()
    {
        if (array_key_exists("adminConsentRequestPolicy", $this->_propDict) && !is_null($this->_propDict["adminConsentRequestPolicy"])) {
            if (is_a($this->_propDict["adminConsentRequestPolicy"], "\Microsoft\Graph\Model\AdminConsentRequestPolicy")) {
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
            if (is_a($this->_propDict["identitySecurityDefaultsEnforcementPolicy"], "\Microsoft\Graph\Model\IdentitySecurityDefaultsEnforcementPolicy")) {
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
    
}
