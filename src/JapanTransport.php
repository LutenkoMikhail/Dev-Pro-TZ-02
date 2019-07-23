<?php


namespace src;


class JapanTransport implements IFactoryTransport
{

    public function getCar(): AbstractTransport
    {
        return new JapanCar();
    }

    public function getTruck(): AbstractTransport
    {
        return new JapanTruck();
    }

    public function getMotorCycle(): AbstractTransport
    {
        return new JapanMotorCycle();
    }

    public function getBicycle(): AbstractTransport
    {
        return new JapanBicycle();
    }
}