<?php

class Building {

    private int $id;
    private string $name;
    private int $capacity;
    private int $price;
    private float $productivity;
    private float $area;

    /**
     * Building constructor.
     * @param int $id
     * @param string $name
     * @param int $capacity
     * @param int $price
     * @param float $productivity
     * @param float $area
     */
    public function __construct(int $id, string $name, int $capacity, int $price, float $productivity, float $area)
    {
        $this->id = $id;
        $this->name = $name;
        $this->capacity = $capacity;
        $this->price = $price;
        $this->productivity = $productivity;
        $this->area = $area;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return int
     */
    public function getCapacity(): int
    {
        return $this->capacity;
    }

    /**
     * @param int $capacity
     */
    public function setCapacity(int $capacity): void
    {
        $this->capacity = $capacity;
    }

    /**
     * @return int
     */
    public function getPrice(): int
    {
        return $this->price;
    }

    /**
     * @param int $price
     */
    public function setPrice(int $price): void
    {
        $this->price = $price;
    }

    /**
     * @return float
     */
    public function getProductivity(): float
    {
        return $this->productivity;
    }

    /**
     * @param float $productivity
     */
    public function setProductivity(float $productivity): void
    {
        $this->productivity = $productivity;
    }

    /**
     * @return float
     */
    public function getArea(): float
    {
        return $this->area;
    }

    /**
     * @param float $area
     */
    public function setArea(float $area): void
    {
        $this->area = $area;
    }
}