<?php
/**
 * PostTransactionRequestModel
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
/**
 *  Copyright 2016 SmartBear Software
 *
 *  Licensed under the Apache License, Version 2.0 (the "License");
 *  you may not use this file except in compliance with the License.
 *  You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 *  Unless required by applicable law or agreed to in writing, software
 *  distributed under the License is distributed on an "AS IS" BASIS,
 *  WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 *  See the License for the specific language governing permissions and
 *  limitations under the License.
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
/**
 * PostTransactionRequestModel Class Doc Comment
 *
 * @category    Class
 * @description Represents a financial transaction.
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class PostTransactionRequestModel implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'payer' => 'string',       
        'amount' => 'double',
        'payer_fee' => 'double',
        'attribute_values' => 'map[string,string]',
        'comments' => 'string',
        'email_address' => 'string',
        'token_id' => 'string',
        'credit_card_information' => '\Swagger\Client\Model\CreditCardInformationModel',
        'bank_account_information' => '\Swagger\Client\Model\BankAccountInformationModel',
        'pre_authorization' => '\Swagger\Client\Model\PreAuthorizationModel',
        'authorization_id' => 'string',
        'send_receipt' => 'bool',
        'initiating_party_fee' => 'double',
        'ip_address' => 'string'
    );
  
    static function swaggerTypes() {
        return self::$swaggerTypes;
    }

    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'payer' => 'payer',       
        'amount' => 'amount',
        'payer_fee' => 'payerFee',
        'attribute_values' => 'attributeValues',
        'comments' => 'comments',
        'email_address' => 'emailAddress',
        'token_id' => 'tokenId',
        'credit_card_information' => 'creditCardInformation',
        'bank_account_information' => 'bankAccountInformation',
        'pre_authorization' => 'preAuthorization',
        'authorization_id' => 'authorizationId',
        'send_receipt' => 'sendReceipt',
        'initiating_party_fee' => 'initiatingPartyFee',
        'ip_address' => 'ipAddress'
    );
  
    static function attributeMap() {
        return self::$attributeMap;
    }

    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'payer' => 'setPayer',        
        'amount' => 'setAmount',
        'payer_fee' => 'setPayerFee',
        'attribute_values' => 'setAttributeValues',
        'comments' => 'setComments',
        'email_address' => 'setEmailAddress',
        'token_id' => 'setTokenId',
        'credit_card_information' => 'setCreditCardInformation',
        'bank_account_information' => 'setBankAccountInformation',
        'pre_authorization' => 'setPreAuthorization',
        'authorization_id' => 'setAuthorizationId',
        'send_receipt' => 'setSendReceipt',
        'initiating_party_fee' => 'setInitiatingPartyFee',
        'ip_address' => 'setIpAddress'
    );
  
    static function setters() {
        return self::$setters;
    }

    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'payer' => 'getPayer',        
        'amount' => 'getAmount',
        'payer_fee' => 'getPayerFee',
        'attribute_values' => 'getAttributeValues',
        'comments' => 'getComments',
        'email_address' => 'getEmailAddress',
        'token_id' => 'getTokenId',
        'credit_card_information' => 'getCreditCardInformation',
        'bank_account_information' => 'getBankAccountInformation',
        'pre_authorization' => 'getPreAuthorization',
        'authorization_id' => 'getAuthorizationId',
        'send_receipt' => 'getSendReceipt',
        'initiating_party_fee' => 'getInitiatingPartyFee',
        'ip_address' => 'getIpAddress'
    );
  
    static function getters() {
        return self::$getters;
    }

    
    /**
      * $payer Name of the payer that is shown on the receipt.
      * @var string
      */
    protected $payer;
        
    /**
      * $amount Total amount to charge not including any payer fees.
      * @var double
      */
    protected $amount;
    
    /**
      * $payer_fee Used if the calling application has pre-calculated a payer fee. In that case, the fee will not be re-calculated. This amount, if set, will not be added to the amount field prior to processing.
      * @var double
      */
    protected $payer_fee;
    
    /**
      * $attribute_values Dictionary of custom attribute values. The key in the dictionary is the identifier of the custom attribute.
      * @var map[string,string]
      */
    protected $attribute_values;
    
    /**
      * $comments Comments that are shown on the receipt.
      * @var string
      */
    protected $comments;
    
    /**
      * $email_address The recipient of the emailed receipt.
      * @var string
      */
    protected $email_address;
    
    /**
      * $token_id Used to reference a previously stored payment token.
      * @var string
      */
    protected $token_id;
    
    /**
      * $credit_card_information Used for credit card transactions.
      * @var \Swagger\Client\Model\CreditCardInformationModel
      */
    protected $credit_card_information;
    
    /**
      * $bank_account_information Used for eCheck\\ACH transactions.
      * @var \Swagger\Client\Model\BankAccountInformationModel
      */
    protected $bank_account_information;
    
    /**
      * $pre_authorization This is used in the event of an offline pre-authorization.
      * @var \Swagger\Client\Model\PreAuthorizationModel
      */
    protected $pre_authorization;
    
    /**
      * $authorization_id Used when executing a capture on authorizations that were obtained via this service.
      * @var string
      */
    protected $authorization_id;
    
    /**
      * $send_receipt Set to true if the payer and account holder(s) should receive an e-receipt.
      * @var bool
      */
    protected $send_receipt;
    
    /**
      * $initiating_party_fee The fee being charged by the initiating party of this transaction. This does not include the standard transaction fees.
      * @var double
      */
    protected $initiating_party_fee;
    
    /**
      * $ip_address The IP Address of the payer.
      * @var string
      */
    protected $ip_address;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        
        if ($data != null) {
            $this->payer = $data["payer"];            
            $this->amount = $data["amount"];
            $this->payer_fee = $data["payer_fee"];
            $this->attribute_values = $data["attribute_values"];
            $this->comments = $data["comments"];
            $this->email_address = $data["email_address"];
            $this->token_id = $data["token_id"];
            $this->credit_card_information = $data["credit_card_information"];
            $this->bank_account_information = $data["bank_account_information"];
            $this->pre_authorization = $data["pre_authorization"];
            $this->authorization_id = $data["authorization_id"];
            $this->send_receipt = $data["send_receipt"];
            $this->initiating_party_fee = $data["initiating_party_fee"];
            $this->ip_address = $data["ip_address"];
        }
    }
    
    /**
     * Gets payer
     * @return string
     */
    public function getPayer()
    {
        return $this->payer;
    }
  
    /**
     * Sets payer
     * @param string $payer Name of the payer that is shown on the receipt.
     * @return $this
     */
    public function setPayer($payer)
    {
        
        $this->payer = $payer;
        return $this;
    }  
    
    /**
     * Gets amount
     * @return double
     */
    public function getAmount()
    {
        return $this->amount;
    }
  
    /**
     * Sets amount
     * @param double $amount Total amount to charge not including any payer fees.
     * @return $this
     */
    public function setAmount($amount)
    {
        
        $this->amount = $amount;
        return $this;
    }
    
    /**
     * Gets payer_fee
     * @return double
     */
    public function getPayerFee()
    {
        return $this->payer_fee;
    }
  
    /**
     * Sets payer_fee
     * @param double $payer_fee Used if the calling application has pre-calculated a payer fee. In that case, the fee will not be re-calculated. This amount, if set, will not be added to the amount field prior to processing.
     * @return $this
     */
    public function setPayerFee($payer_fee)
    {
        
        $this->payer_fee = $payer_fee;
        return $this;
    }
    
    /**
     * Gets attribute_values
     * @return map[string,string]
     */
    public function getAttributeValues()
    {
        return $this->attribute_values;
    }
  
    /**
     * Sets attribute_values
     * @param map[string,string] $attribute_values Dictionary of custom attribute values. The key in the dictionary is the identifier of the custom attribute.
     * @return $this
     */
    public function setAttributeValues($attribute_values)
    {
        
        $this->attribute_values = $attribute_values;
        return $this;
    }
    
    /**
     * Gets comments
     * @return string
     */
    public function getComments()
    {
        return $this->comments;
    }
  
    /**
     * Sets comments
     * @param string $comments Comments that are shown on the receipt.
     * @return $this
     */
    public function setComments($comments)
    {
        
        $this->comments = $comments;
        return $this;
    }
    
    /**
     * Gets email_address
     * @return string
     */
    public function getEmailAddress()
    {
        return $this->email_address;
    }
  
    /**
     * Sets email_address
     * @param string $email_address The recipient of the emailed receipt.
     * @return $this
     */
    public function setEmailAddress($email_address)
    {
        
        $this->email_address = $email_address;
        return $this;
    }
    
    /**
     * Gets token_id
     * @return string
     */
    public function getTokenId()
    {
        return $this->token_id;
    }
  
    /**
     * Sets token_id
     * @param string $token_id Used to reference a previously stored payment token.
     * @return $this
     */
    public function setTokenId($token_id)
    {
        
        $this->token_id = $token_id;
        return $this;
    }
    
    /**
     * Gets credit_card_information
     * @return \Swagger\Client\Model\CreditCardInformationModel
     */
    public function getCreditCardInformation()
    {
        return $this->credit_card_information;
    }
  
    /**
     * Sets credit_card_information
     * @param \Swagger\Client\Model\CreditCardInformationModel $credit_card_information Used for credit card transactions.
     * @return $this
     */
    public function setCreditCardInformation($credit_card_information)
    {
        
        $this->credit_card_information = $credit_card_information;
        return $this;
    }
    
    /**
     * Gets bank_account_information
     * @return \Swagger\Client\Model\BankAccountInformationModel
     */
    public function getBankAccountInformation()
    {
        return $this->bank_account_information;
    }
  
    /**
     * Sets bank_account_information
     * @param \Swagger\Client\Model\BankAccountInformationModel $bank_account_information Used for eCheck\\ACH transactions.
     * @return $this
     */
    public function setBankAccountInformation($bank_account_information)
    {
        
        $this->bank_account_information = $bank_account_information;
        return $this;
    }
    
    /**
     * Gets pre_authorization
     * @return \Swagger\Client\Model\PreAuthorizationModel
     */
    public function getPreAuthorization()
    {
        return $this->pre_authorization;
    }
  
    /**
     * Sets pre_authorization
     * @param \Swagger\Client\Model\PreAuthorizationModel $pre_authorization This is used in the event of an offline pre-authorization.
     * @return $this
     */
    public function setPreAuthorization($pre_authorization)
    {
        
        $this->pre_authorization = $pre_authorization;
        return $this;
    }
    
    /**
     * Gets authorization_id
     * @return string
     */
    public function getAuthorizationId()
    {
        return $this->authorization_id;
    }
  
    /**
     * Sets authorization_id
     * @param string $authorization_id Used when executing a capture on authorizations that were obtained via this service.
     * @return $this
     */
    public function setAuthorizationId($authorization_id)
    {
        
        $this->authorization_id = $authorization_id;
        return $this;
    }
    
    /**
     * Gets send_receipt
     * @return bool
     */
    public function getSendReceipt()
    {
        return $this->send_receipt;
    }
  
    /**
     * Sets send_receipt
     * @param bool $send_receipt Set to true if the payer and account holder(s) should receive an e-receipt.
     * @return $this
     */
    public function setSendReceipt($send_receipt)
    {
        
        $this->send_receipt = $send_receipt;
        return $this;
    }
    
    /**
     * Gets initiating_party_fee
     * @return double
     */
    public function getInitiatingPartyFee()
    {
        return $this->initiating_party_fee;
    }
  
    /**
     * Sets initiating_party_fee
     * @param double $initiating_party_fee The fee being charged by the initiating party of this transaction. This does not include the standard transaction fees.
     * @return $this
     */
    public function setInitiatingPartyFee($initiating_party_fee)
    {
        
        $this->initiating_party_fee = $initiating_party_fee;
        return $this;
    }
    
    /**
     * Gets ip_address
     * @return string
     */
    public function getIpAddress()
    {
        return $this->ip_address;
    }
  
    /**
     * Sets ip_address
     * @param string $ip_address The IP Address of the payer.
     * @return $this
     */
    public function setIpAddress($ip_address)
    {
        
        $this->ip_address = $ip_address;
        return $this;
    }
    
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset 
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->$offset);
    }
  
    /**
     * Gets offset.
     * @param  integer $offset Offset 
     * @return mixed 
     */
    public function offsetGet($offset)
    {
        return $this->$offset;
    }
  
    /**
     * Sets value based on offset.
     * @param  integer $offset Offset 
     * @param  mixed   $value  Value to be set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        $this->$offset = $value;
    }
  
    /**
     * Unsets offset.
     * @param  integer $offset Offset 
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->$offset);
    }
  
    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) {
            return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        } else {
            return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this));
        }
    }
}
