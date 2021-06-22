<?php
declare(strict_types=1);

include __DIR__ . '/../vendor/autoload.php';

$pathOutput       = (string) realpath(__DIR__ . '/../test/HttpException');
$dbFilename       = (string) realpath(__DIR__ . '/../data/http-status.php');
$templateFilename = (string) realpath(__DIR__ . '/HttpExceptionTestTemplate.txt');

$template = (string) file_get_contents($templateFilename);

$db = include $dbFilename;

foreach ($db as $STATUSCODE => $array) {

    if (0 === strlen($array['exception'])) {
        continue;
    }

    $parts   = explode('\\', $array['exception']);
    $NAME    = array_pop($parts);
    $MESSAGE = sprintf('%d %s', $STATUSCODE, str_replace("'", "\'", $array['name']));

    $CUSTOMMESSAGE = 'Custom error message with a detailed description of the problem.';

    $buffer = $template;
    $buffer = str_replace('%%NAME%%', $NAME, $buffer);
    $buffer = str_replace('%%STATUSCODE%%', $STATUSCODE, $buffer);
    $buffer = str_replace('%%MESSAGE%%', $MESSAGE, $buffer);
    $buffer = str_replace('%%CUSTOMMESSAGE%%', $CUSTOMMESSAGE, $buffer);

    $filename = sprintf('%s/%sTest.php', $pathOutput, $NAME);
    file_put_contents($filename, $buffer);
    dump($filename);
}
