<?php


namespace src;


class AbstractTransportWithPassenger extends AbstractTransport
{
    protected $passenger = false;

    public function getPassenger(): Human
    {
        return $this->passenger;
    }

    public function setPassenger(Human $passenger): void
    {
        if ($this->passenger !== false) {
            echo "ADD Passenger" . "<br>";
            $this->passenger = $passenger;
        }

    }
}