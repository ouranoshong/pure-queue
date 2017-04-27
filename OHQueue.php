<?php


/**
 * Class OHQueue
 */
class OHQueue implements OHQueueInterface {

    /**
     * @var array
     */
    protected $_storage = [];

    /**
     * @param $item
     */
    public function add($item) {
        $this->_storage[] = $item;
    }

    /**
     * @return mixed
     */
    public function get() {
        return array_shift($this->_storage);
    }

    /**
     * @param $item
     *
     * @return int
     */
    public function push($item) {
        return array_unshift($this->_storage, $item);
    }

    /**
     * @return bool
     */
    public function hasNext() {
        return count($this->_storage) > 0;
    }
}
