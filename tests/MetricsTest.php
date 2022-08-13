<?php

use Shawnveltman\Testmetrics\Testmetrics;
use Shawnveltman\Testmetrics\Tests\FileGeneratorTrait;

uses(FileGeneratorTrait::class);

it('can find the test setup time per suite', function () {
    $testmetrics = new Testmetrics();
    $testmetrics->test_results_parser($this->get_junit_example_file());
    expect($testmetrics->get_results_count())->toBe(2);

    expect($testmetrics->results["Tests\Feature\AdvancedFilters\FiltersComponentTest"]['setup_time'])->toBe(20.819);
    expect($testmetrics->results["Tests\Feature\AdvancedFilters\AdvancedFilterTest"]['setup_time'])->toBe(20.812);
});

it('can find the average setup time per suite', function () {
    $testmetrics = new Testmetrics();
    $testmetrics->test_results_parser($this->get_junit_example_file());

    expect($testmetrics->results["Tests\Feature\AdvancedFilters\FiltersComponentTest"]['average_time'])->toBe(0.420);
    expect($testmetrics->results["Tests\Feature\AdvancedFilters\AdvancedFilterTest"]['average_time'])->toBe(0.665);
});

it('can print results',function(){
    $testmetrics = new Testmetrics();
    $testmetrics->test_results_parser($this->get_junit_example_file());
    $testmetrics->print_results(false);

    expect($testmetrics->lines)->toContain("Test Class, Setup Time, Average Test Time, Run Time, Number Of Tests");
});
