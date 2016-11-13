<?php

namespace Mmaydin\Shopfinder\Api\Data;

interface ShopInterface
{
    /**
     * Constants for keys of data array. Identical to the name of the getter in snake case.
     */
    const SHOP_ID = 'shop_id';
    const NAME = 'name';
    const IDENTIFIER = 'identifier';
    const IMAGE = 'image';
    const IS_ACTIVE = 'is_active';
    const MODIFIED_AT = 'modified_at';
    const CREATED_AT = 'created_at';

    /**
     * Get ShopId.
     *
     * @return int
     */
    public function getShopId();

    /**
     * Set ShopId.
     */
    public function setShopId($shopId);

    /**
     * Get Name.
     *
     * @return varchar
     */
    public function getName();

    /**
     * Set Name.
     */
    public function setName($name);

    /**
     * Get Identifier.
     *
     * @return varchar
     */
    public function getIdentifier();

    /**
     * Set Identifier.
     */
    public function setIdentifier($identifier);

    /**
     * Get Image.
     *
     * @return varchar
     */
    public function getImage();

    /**
     * Set Image.
     */
    public function setImage($image);

    /**
     * Get IsActive.
     *
     * @return varchar
     */
    public function getIsActive();

    /**
     * Set StartingPrice.
     */
    public function setIsActive($isActive);

    /**
     * Get ModifiedAt.
     *
     * @return varchar
     */
    public function getModifiedAt();

    /**
     * Set ModifiedAt.
     */
    public function setModifiedAt($modifiedAt);

    /**
     * Get CreatedAt.
     *
     * @return varchar
     */
    public function getCreatedAt();

    /**
     * Set CreatedAt.
     */
    public function setCreatedAt($createdAt);
}