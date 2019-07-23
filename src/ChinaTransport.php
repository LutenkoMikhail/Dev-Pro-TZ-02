<?php


namespace src;


class ChinaTransport implements IFactoryTransport
{

    public function getCar(): AbstractTransport
    {
        return new ChinaCar();
    }

    public function getTruck(): AbstractTransport
    {
        return new ChinaTruck();
    }

    public function getMotorCycle(): AbstractTransport
    {
        return new ChinaMotorCycle();
    }

    public function getBicycle(): AbstractTransport
    {
        return new ChinaBicycle();
    }
}