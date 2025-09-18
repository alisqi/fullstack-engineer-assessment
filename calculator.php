<?php
declare(strict_types=1);

require 'vendor/autoload.php';

$test = static function (string $expression, array $values): void {
    $loader = new Twig\Loader\ArrayLoader();
    $loader->setTemplate($expression, "{{ $expression }}");
    $twig = new Twig\Environment(
        $loader,
        ['autoescape' => false]
    );

    $result = $twig->render($expression, $values);

    echo sprintf('
Expression: %s,
Values: 
%s,
Result: %s', $expression, implode(PHP_EOL, array_map(
        static fn($k, $v) => "  $k => $v",
        array_keys($values),
        $values
    )), $result).PHP_EOL;
};

$test('a', ['a' => 1000]);
$test('+a', ['a' => 1000]);
$test('a + b', ['a' => 1000, 'b' => 337]);
$test('c', ['c' => 0]);
$test('b + a - d', ['a' => 1000, 'b' => 337, 'd' => 100]);
