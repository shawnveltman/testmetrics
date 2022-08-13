<?php

namespace Shawnveltman\Testmetrics;

class Testmetrics
{
    public array $results = [];

    public string $lines = '';

    public function test_results_parser(string $contents = '',string $path = ''): Testmetrics
    {
        $contents = $this->get_contents($contents, $path);
        $xmlResponse = simplexml_load_string($contents);

        // JSON encode the XML, and then JSON decode to an array.
        $responseArray = json_decode(json_encode($xmlResponse), true);

        foreach ($responseArray['testsuite']['testsuite'] as $values) {
            $testclass = $values['@attributes']['name'];
            $total_time = (float) $values['@attributes']['time'];
            $setup_time = $this->get_setup_time($values);
            $time_less_setup = $total_time - $setup_time;
            $avearge_time = $time_less_setup / (int) $values['@attributes']['tests'];
            $test_count = $values['@attributes']['tests'];

            $this->results[$testclass]['setup_time'] = round($setup_time, 3);
            $this->results[$testclass]['average_time'] = round($avearge_time, 3);
            $this->results[$testclass]['run_time'] = round($time_less_setup, 3);
            $this->results[$testclass]['test_count'] = $test_count;
        }

        return $this;
    }

    public function get_results_count()
    {
        return count($this->results);
    }

    public function print_results(bool $print = true)
    {
        $results = collect($this->results)->sortByDesc('run_time');
        $this->lines = "Test Class, Setup Time, Average Test Time, Run Time, Number Of Tests\n";
        foreach ($results as $testclass => $result) {
            $line = implode(',', [$testclass, $result['setup_time'], $result['average_time'], $result['run_time'], $result['test_count']]);
            $this->lines .= $line . "\n";
        }
        if ($print) {
            echo $this->lines;
        }

        return $this;
    }

    private function get_setup_time($values): int|float
    {
        if (isset($values['testcase'][0]['@attributes']['time'])) {
            return (float) $values['testcase'][0]['@attributes']['time'];
        }

        return (float) $values['@attributes']['time'];
    }

    public function get_contents_from_path(string $path)
    {
        return file_get_contents($path);
    }

    private function get_contents(string $contents = '', string $path = ''): string
    {
        if($path !== '') {
            return $this->get_contents_from_path($path);
        }

         return $contents;
    }
}
