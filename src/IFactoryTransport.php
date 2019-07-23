<?php


namespace src;


interface IFactoryTransport
{
    public function getCar(): AbstractTransport;
    public function getTruck(): AbstractTransport;
    public function getMotorCycle(): AbstractTransport;
    public function getBicycle(): AbstractTransport;
}