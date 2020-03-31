<?php

require_once __DIR__ . '/User.php';
require_once __DIR__ . '/CityBuilding.php';

class City {

    private int $id;
    private string $name;
    private float $gold;
    private User $user;
    private array $buildings; // Array CityBuilding

    /**
     * City constructor.
     * @param int $id
     * @param string $name
     * @param float $gold
     * @param User $user
     * @param array $buildings
     */
    public function __construct(int $id, string $name, float $gold, User $user, array $buildings)
    {
        $this->id = $id;
        $this->name = $name;
        $this->gold = $gold;
        $this->user = $user;
        $this->buildings = $buildings;
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
     * @return float
     */
    public function getGold(): float
    {
        return $this->gold;
    }

    /**
     * @param float $gold
     */
    public function setGold(float $gold): void
    {
        $this->gold = $gold;
    }

    /**
     * @return User
     */
    public function getUser(): User
    {
        return $this->user;
    }

    /**
     * @param User $user
     */
    public function setUser(User $user): void
    {
        $this->user = $user;
    }

    /**
     * @return array
     */
    public function getBuildings(): array
    {
        return $this->buildings;
    }

    /**
     * @param array $buildings
     */
    public function setBuildings(array $buildings): void
    {
        $this->buildings = $buildings;
    }




}
