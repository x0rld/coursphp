<?php

require_once __DIR__ . '/Building.php';

class CityBuilding {

    private Building $building;
    private int $peoples;
    private float $latitude;
    private float $longitude;

    /**
     * CityBuilding constructor.
     * @param Building $building
     * @param int $peoples
     * @param float $latitude
     * @param float $longitude
     */
    public function __construct(Building $building, int $peoples, float $latitude, float $longitude)
    {
        $this->building = $building;
        $this->peoples = $peoples;
        $this->latitude = $latitude;
        $this->longitude = $longitude;
    }

    /**
     * @return Building
     */
    public function getBuilding(): Building
    {
        return $this->building;
    }

    /**
     * @param Building $building
     */
    public function setBuilding(Building $building): void
    {
        $this->building = $building;
    }

    /**
     * @return int
     */
    public function getPeoples(): int
    {
        return $this->peoples;
    }

    /**
     * @param int $peoples
     */
    public function setPeoples(int $peoples): void
    {
        $this->peoples = $peoples;
    }

    /**
     * @return float
     */
    public function getLatitude(): float
    {
        return $this->latitude;
    }

    /**
     * @param float $latitude
     */
    public function setLatitude(float $latitude): void
    {
        $this->latitude = $latitude;
    }

    /**
     * @return float
     */
    public function getLongitude(): float
    {
        return $this->longitude;
    }

    /**
     * @param float $longitude
     */
    public function setLongitude(float $longitude): void
    {
        $this->longitude = $longitude;
    }
}