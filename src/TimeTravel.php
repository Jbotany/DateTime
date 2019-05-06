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
     * interval of jump in time
     *
     * @var
     */
    public $interval;


    /**
     * TimeTravel constructor.
     * @param $start
     * @param $end
     * @throws \Exception
     */
    public function __construct($start, $end)
    {
        $this->start= new \DateTime($start);
        $this->end = new \DateTime($end);
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


}
