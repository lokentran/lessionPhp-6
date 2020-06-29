<?php
    include_once('CircleComparator.php');
    include_once('Circle.php');

    $circle1 = new Circle('Hinh tron 1', 50);
    $circle2 = new Circle('Hinh tron 2', 10);

    $circleCompare12 = new CircleComparator($circle1,$circle2);

    var_dump($circleCompare12->compareTo($circle1,$circle2));