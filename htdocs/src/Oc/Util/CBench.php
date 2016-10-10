<?php
/***************************************************************************
 *  For license information see doc/license.txt
 *
 *  Unicode Reminder メモ
 *
 *  Exact time mesurement
 ***************************************************************************/

namespace Oc\Util;

class CBench
{
    public $start;
    public $stop;

    /**
     * CBench constructor.
     */
    public function __construct()
    {
        $this->start = 0;
        $this->stop = 0;
    }

    /**
     * @return float
     */
    private function getMicroTime()
    {
        list($uSec, $sec) = explode(' ', microtime());

        return ((float)$uSec + (float)$sec);
    }

    /**
     * start Benchmark
     */
    public function start()
    {
        $this->start = $this->getMicroTime();
    }

    /**
     * stop Benchmark
     */
    public function stop()
    {
        $this->stop = $this->getMicroTime();
    }

    /**
     * diff between stop and start value
     *
     * @return int
     */
    public function diff()
    {
        return $this->stop - $this->start;
    }

    /**
     * @return float
     */
    public function runTime()
    {
        return $this->getMicroTime() - $this->start;
    }
}
