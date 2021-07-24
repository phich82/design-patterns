<?php
namespace Factory;

use Exception;
use Factory\RoadLogistics;

/**
 * Wrapper (Facade)
 */
class Transporter
{
    const ROAD = 'road';
    const SEA  = 'sea';
    const SHIP = 'ship';

    /**
     * Get logistics by type
     *
     * @param  string $type
     * @return \Logistics
     * @throws \Exception
     */
    public static function get($type)
    {
        switch ($type) {
            case self::ROAD:
                return new RoadLogistics();
            case self::SEA:
            case self::SHIP:
                return new SeaLogistics();
            default:
                Throw new Exception("Type: [{$type}] not found.");
        }
    }

    /**
     * __callStatic
     *
     * @param  string $method (road, sea, ship, getRoad, getSea, getShip)
     * @param  array $args
     * @return \Logistics
     * @throws \Exception
     */
    public static function __callStatic($method, $args)
    {
        $method = strtolower(str_replace('get', '', $method));
        return self::get($method);
    }
}