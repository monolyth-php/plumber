<?php

/** Test normalizations */
return function () : Generator {
    /** Empty strings in GET/POST are set to null, but other values remain untouched */
    yield function () {
        $_GET = $_POST = ['a1' => '', 'a2' => '0', 'a3' => '1'];
        Monolyth\Plumber\Normalize::requestVariables();
        assert($_GET['a1'] === null);
        assert($_GET['a2'] === '0');
        assert($_GET['a3'] === '1');
        assert($_POST['a1'] === null);
        assert($_POST['a2'] === '0');
        assert($_POST['a3'] === '1');
    };
};

