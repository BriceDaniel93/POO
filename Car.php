<?php 


class Car{
    public int $nbWheels;
    private int $currentSpeed;
    private string $Color;
    private int $nbSeats;
    private string $energy;
    public int $enrgyLevel;



public function __construct(string $color)
{
    $this->color = $color;
}

public function __construct(int $nbSeats)
{
    $this->nbSeats = $nbSeats;
}



public function __construct(string $energy)
{
    $this->energy = $energy;
}

public function __construct(int $currentSpeed)
{
    $this->currentSpeed = $currentSpeed;
}

}

public function getColor(): string
{
    return $this->Color;
}
public function setColor(string $Color): void
{
    $this->Color = $Color;
}

public function getnbSeats(int $nbSeats): int
{
    return $this->nbSeats;
}
public function setnbSeats(int $nbSeats): int
{
    $this->nbSeats = $nbSeats;
}
public function getenergy(string $energy): string
{
    return $this->energy;
}
public function setenergy(string $energy): string
{
    $this->energy = $energy;
}

public function getcurrentSpeed(int $currentSpeed): int
{
    return $this->currentSpeed;
}

public function setCurrentSpeed(int $currentSpeed): void
{
    if($currentSpeed > 0) {
        $this->currentSpeed = $currentSpeed;
        return 'go';
    }
}




