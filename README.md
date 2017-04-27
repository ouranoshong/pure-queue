# pure-queue
A example of pure array queue


## Usage

```php

$OHQueue = new OHQueue();


foreach(range(1, 3) as $key) {
    $OHQueue->add($key);
}

while($OHQueue->hasNext()) {
   var_dump($OHQueue->get());
}

```
