<?php

require_once 'Vehicle.php';


class Camion extends Vehicle
{
    private int $stockage;
    private int $chargement = 0; 

    public function __construct(string $color, int $nbSeats, string $energy,  int $tockage)
    {
        $this->color = $color;
        $this->nbSeats = $nbSeats;
        $this->energy = $energy;
        $this->stockage = $stokage;
    }
    
    public function getstockage(): int
    {
        return $this->stokage;
    }
    
    public function setstockage(string $stockage): string
    {
        if ($stockage =100) {
            return 'full';
        }
        else {
            return 'is fulling';
        }
    }
    public function getchargement(): int
    {
        return $this->chargement;
    }
    public function setchargement(): int 
   {
        $this->chargement = $chargement;
       
   }

    

}