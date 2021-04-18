<?php


namespace App\Entity;

use Symfony\Component\Validator\Constraints as Assert;


class PropertySearch
{
    /**
     * @var int|null
     */
    private $maxPrice;

    /**
     * @Assert\Range(min=10, max="400")
     * @var int|null
     */
    private $minSuperficie;

    /**
     * @return int|null
     */
    public function getMaxPrice(): ?int
    {
        return $this->maxPrice;
    }

    /**
     * @param int|null $maxPrice
     * @return PropertySearch
     */
    public function setMaxPrice(int $maxPrice): PropertySearch
    {
        $this->maxPrice = $maxPrice;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getMinSuperficie(): ?int
    {
        return $this->minSuperficie;
    }

    /**
     * @param int|null $minSuperficie
     * @return PropertySearch
     */
    public function setMinSuperficie(int $minSuperficie): PropertySearch
    {
        $this->minSuperficie = $minSuperficie;
        return $this;
    }


}