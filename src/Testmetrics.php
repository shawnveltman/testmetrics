<?php

namespace Shawnveltman\Testmetrics;

class Testmetrics
{
    public array $results = [];

    public function test_results_parser(string $contents)
    {
        $xmlResponse = simplexml_load_string($contents);

        // JSON encode the XML, and then JSON decode to an array.
        $responseArray = json_decode(json_encode($xmlResponse), true);

        foreach($responseArray['testsuite']['testsuite'] as $values)
        {
            $testclass = $values['@attributes']['name'];
            $total_time = (float)$values['@attributes']['time'];
            $setup_time = (float)$values['testcase'][0]['@attributes']['time'];
            $time_less_setup = $total_time - $setup_time;
            $avearge_time = $time_less_setup / (int)$values['@attributes']['tests'];

            $this->results[$testclass]['setup_time'] = round($setup_time,3);
            $this->results[$testclass]['average_time'] = round($avearge_time,3);
        }

        return $this;
    }

    public function get_results_count()
    {
        return count($this->results);
    }

    public function print_results()
    {
        $results = collect($this->results)->sortByDesc('average_time');

        foreach ($results as $testclass => $result)
        {
            echo $testclass . " setup:  {$result['setup_time']}, average_test_time: {$result['average_time']} \n";
        }

        return $this;
    }


}
