<?php

namespace App;

class TimeTravel
{
    /**
     * start of time travel
     *
     * @var
     */
    private $start;

    /**
     * end of time travel
     *
     * @var
     */
    public $end;

    /**
     * @param mixed $start
     */
    public function setStart($start): void
    {
        $this->start = $start;
    }

    /**
     * @return mixed
     */
    public function getStart()
    {
        return $this->start;
    }

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
        return $dateDiff->format('Il y a %Y années %m mois %d jours %H heures %i minutes %s seconds');;
    }

    /**
     * @param \DateInterval $interval
     * @param string $type
     * @return \DateTime
     */
    public function findDate(\DateInterval $interval, string $type)
    {
        $end = clone $this->getStart();
        if ($type === '-') {
            $end->sub($interval);
        } else {
            $end->add($interval);
        }
        return $end;
    }

    /**
     * @param \DatePeriod $step
     * @return array
     */
    public function backToFutureStepByStep(\DatePeriod $step): array
    {
        $dates = [];
        foreach ($step as $date){
            $dates[] = $date->format('M d Y A g:i');
        }
        return $dates;
    }

}
