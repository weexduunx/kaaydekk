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
     *
     * @var string|null
     */
    private $type;

    /**
     * @var string|null
     */
    private $ville;

    /**
     * @Assert\Range(min=1, max="125")
     * @var string|null
     */
    private $chambre;

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

    /**
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * @param string|null $type
     * @return PropertySearch
     */
    public function setType(?string $type): PropertySearch
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getVille(): ?string
    {
        return $this->ville;
    }

    /**
     * @param string|null $ville
     * @return PropertySearch
     */
    public function setVille(?string $ville): PropertySearch
    {
        $this->ville = $ville;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getChambre(): ?string
    {
        return $this->chambre;
    }

    /**
     * @param string|null $chambre
     * @return PropertySearch
     */
    public function setChambre(?string $chambre): PropertySearch
    {
        $this->chambre = $chambre;
        return $this;
    }


}