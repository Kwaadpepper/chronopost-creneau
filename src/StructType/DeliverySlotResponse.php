<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for deliverySlotResponse StructType
 * @subpackage Structs
 */
class DeliverySlotResponse extends WsResponse
{
    /**
     * The meshCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $meshCode = null;
    /**
     * The slotList
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Slot[]
     */
    protected ?array $slotList = null;
    /**
     * The transactionID
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $transactionID = null;
    /**
     * Constructor method for deliverySlotResponse
     * @uses DeliverySlotResponse::setMeshCode()
     * @uses DeliverySlotResponse::setSlotList()
     * @uses DeliverySlotResponse::setTransactionID()
     * @param string $meshCode
     * @param \StructType\Slot[] $slotList
     * @param string $transactionID
     */
    public function __construct(?string $meshCode = null, ?array $slotList = null, ?string $transactionID = null)
    {
        $this
            ->setMeshCode($meshCode)
            ->setSlotList($slotList)
            ->setTransactionID($transactionID);
    }
    /**
     * Get meshCode value
     * @return string|null
     */
    public function getMeshCode(): ?string
    {
        return $this->meshCode;
    }
    /**
     * Set meshCode value
     * @param string $meshCode
     * @return \StructType\DeliverySlotResponse
     */
    public function setMeshCode(?string $meshCode = null): self
    {
        // validation for constraint: string
        if (!is_null($meshCode) && !is_string($meshCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($meshCode, true), gettype($meshCode)), __LINE__);
        }
        $this->meshCode = $meshCode;
        
        return $this;
    }
    /**
     * Get slotList value
     * @return \StructType\Slot[]
     */
    public function getSlotList(): ?array
    {
        return $this->slotList;
    }
    /**
     * This method is responsible for validating the values passed to the setSlotList method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSlotList method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSlotListForArrayConstraintsFromSetSlotList(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $deliverySlotResponseSlotListItem) {
            // validation for constraint: itemType
            if (!$deliverySlotResponseSlotListItem instanceof \StructType\Slot) {
                $invalidValues[] = is_object($deliverySlotResponseSlotListItem) ? get_class($deliverySlotResponseSlotListItem) : sprintf('%s(%s)', gettype($deliverySlotResponseSlotListItem), var_export($deliverySlotResponseSlotListItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The slotList property can only contain items of type \StructType\Slot, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set slotList value
     * @throws InvalidArgumentException
     * @param \StructType\Slot[] $slotList
     * @return \StructType\DeliverySlotResponse
     */
    public function setSlotList(?array $slotList = null): self
    {
        // validation for constraint: array
        if ('' !== ($slotListArrayErrorMessage = self::validateSlotListForArrayConstraintsFromSetSlotList($slotList))) {
            throw new InvalidArgumentException($slotListArrayErrorMessage, __LINE__);
        }
        $this->slotList = $slotList;
        
        return $this;
    }
    /**
     * Add item to slotList value
     * @throws InvalidArgumentException
     * @param \StructType\Slot $item
     * @return \StructType\DeliverySlotResponse
     */
    public function addToSlotList(\StructType\Slot $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Slot) {
            throw new InvalidArgumentException(sprintf('The slotList property can only contain items of type \StructType\Slot, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->slotList[] = $item;
        
        return $this;
    }
    /**
     * Get transactionID value
     * @return string|null
     */
    public function getTransactionID(): ?string
    {
        return $this->transactionID;
    }
    /**
     * Set transactionID value
     * @param string $transactionID
     * @return \StructType\DeliverySlotResponse
     */
    public function setTransactionID(?string $transactionID = null): self
    {
        // validation for constraint: string
        if (!is_null($transactionID) && !is_string($transactionID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($transactionID, true), gettype($transactionID)), __LINE__);
        }
        $this->transactionID = $transactionID;
        
        return $this;
    }
}
