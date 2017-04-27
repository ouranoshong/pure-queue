<?php
/**
 * Interface OHQueueInterface
 */
interface OHQueueInterface {

    /**
     * @param $item
     *
     *
     */
    public function add($item);

    /**
     * @return mixed
     */
    public function get();

    /**
     * @param $item
     *
     *
     */
    public function push($item);

    /**
     * @return mixed
     */
    public function hasNext();

}
