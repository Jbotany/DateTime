<?php

namespace App;

class TimeTravel
{
    /**
     * start of time travel
     *
     * @var
     */
    public $start;

    /**
     * end of time travel
     *
     * @var
     */
    public $end;

    /**
     * TimeTravel constructor.
     * @param $start
     * @param $end
     * @throws \Exception
     */
    public function __construct($start)
    {
        $this->start= new \DateTime($start);
    }

    /**
     * Calculate difference between 2 dates
     *
     * @return bool|\DateInterval
     */
    public function getTravelInfo()
    {
        $dateDiff = $this->start->diff($this->end);

        return $dateDiff;
    }

    public function findDate(\DateInterval $interval)
    {
        $date = $this->start->sub($interval);

        return $date;
    }

}
