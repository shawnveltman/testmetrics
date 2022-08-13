<?php

namespace Shawnveltman\Testmetrics\Tests;

trait FileGeneratorTrait
{
    public function get_contents_with_n_test_comments($number_of_comments = 2)
    {
        $comments = ["Woah this is the start!"];
        if ($number_of_comments > 0)
        {
            foreach (range(1, $number_of_comments) as $i)
            {
                $comments[] = "/** @test */ \nHello World\n";
            }
        }

        return implode("\n", $comments);
    }

    public function get_junit_example_file()
    {
        return <<<EOD
<?xml version="1.0" encoding="UTF-8"?>
<testsuites>
  <testsuite name="" tests="38" assertions="197" errors="0" warnings="0" failures="0" skipped="0" time="65.667367">
    <testsuite name="Tests\Feature\AdvancedFilters\FiltersComponentTest" tests="5" assertions="22" failures="0" errors="0" warnings="0" skipped="0" time="22.919239" file="/Users/shawnveltman/code/kerry/tests/Feature/AdvancedFilters/FiltersComponentTest.php">
      <testcase name="can_create_named_filters" class="Tests\Feature\AdvancedFilters\FiltersComponentTest" classname="Tests.Feature.AdvancedFilters.FiltersComponentTest" file="/Users/shawnveltman/code/kerry/tests/Feature/AdvancedFilters/FiltersComponentTest.php" line="35" assertions="1" time="20.819109"/>
      <testcase name="can_add_new_filter" class="Tests\Feature\AdvancedFilters\FiltersComponentTest" classname="Tests.Feature.AdvancedFilters.FiltersComponentTest" file="/Users/shawnveltman/code/kerry/tests/Feature/AdvancedFilters/FiltersComponentTest.php" line="42" assertions="8" time="0.519167"/>
      <testcase name="it_will_not_create_a_new_filter_if_there_are_errors" class="Tests\Feature\AdvancedFilters\FiltersComponentTest" classname="Tests.Feature.AdvancedFilters.FiltersComponentTest" file="/Users/shawnveltman/code/kerry/tests/Feature/AdvancedFilters/FiltersComponentTest.php" line="62" assertions="6" time="0.485004"/>
      <testcase name="it_only_display_top_level_filters" class="Tests\Feature\AdvancedFilters\FiltersComponentTest" classname="Tests.Feature.AdvancedFilters.FiltersComponentTest" file="/Users/shawnveltman/code/kerry/tests/Feature/AdvancedFilters/FiltersComponentTest.php" line="79" assertions="3" time="0.557476"/>
      <testcase name="it_can_delete_filter" class="Tests\Feature\AdvancedFilters\FiltersComponentTest" classname="Tests.Feature.AdvancedFilters.FiltersComponentTest" file="/Users/shawnveltman/code/kerry/tests/Feature/AdvancedFilters/FiltersComponentTest.php" line="93" assertions="4" time="0.538483"/>
    </testsuite>
    <testsuite name="Tests\Feature\AdvancedFilters\AdvancedFilterTest" tests="33" assertions="175" failures="0" errors="0" warnings="0" skipped="0" time="42.748128" file="/Users/shawnveltman/code/kerry/tests/Feature/AdvancedFilters/AdvancedFilterTest.php">
      <testcase name="it_loads_component_for_auth_user_with_permissions" class="Tests\Feature\AdvancedFilters\AdvancedFilterTest" classname="Tests.Feature.AdvancedFilters.AdvancedFilterTest" file="/Users/shawnveltman/code/kerry/tests/Feature/AdvancedFilters/AdvancedFilterTest.php" line="38" assertions="1" time="20.812220"/>
      <testcase name="it_does_not_load_if_auth_user_does_not_have_permission" class="Tests\Feature\AdvancedFilters\AdvancedFilterTest" classname="Tests.Feature.AdvancedFilters.AdvancedFilterTest" file="/Users/shawnveltman/code/kerry/tests/Feature/AdvancedFilters/AdvancedFilterTest.php" line="50" assertions="2" time="0.517053"/>
      <testcase name="it_does_not_load_for_unauthenticated_user" class="Tests\Feature\AdvancedFilters\AdvancedFilterTest" classname="Tests.Feature.AdvancedFilters.AdvancedFilterTest" file="/Users/shawnveltman/code/kerry/tests/Feature/AdvancedFilters/AdvancedFilterTest.php" line="62" assertions="2" time="0.502448"/>
      <testcase name="it_does_not_update_a_different_clients_filters" class="Tests\Feature\AdvancedFilters\AdvancedFilterTest" classname="Tests.Feature.AdvancedFilters.AdvancedFilterTest" file="/Users/shawnveltman/code/kerry/tests/Feature/AdvancedFilters/AdvancedFilterTest.php" line="71" assertions="9" time="0.851431"/>
      <testcase name="it_will_not_update_filter_if_there_are_errors" class="Tests\Feature\AdvancedFilters\AdvancedFilterTest" classname="Tests.Feature.AdvancedFilters.AdvancedFilterTest" file="/Users/shawnveltman/code/kerry/tests/Feature/AdvancedFilters/AdvancedFilterTest.php" line="115" assertions="5" time="0.476261"/>
      <testcase name="it_will_update_filter_if_there_are_no_errors" class="Tests\Feature\AdvancedFilters\AdvancedFilterTest" classname="Tests.Feature.AdvancedFilters.AdvancedFilterTest" file="/Users/shawnveltman/code/kerry/tests/Feature/AdvancedFilters/AdvancedFilterTest.php" line="135" assertions="4" time="0.643268"/>
      <testcase name="it_will_not_create_a_condition_if_the_value_is_blank" class="Tests\Feature\AdvancedFilters\AdvancedFilterTest" classname="Tests.Feature.AdvancedFilters.AdvancedFilterTest" file="/Users/shawnveltman/code/kerry/tests/Feature/AdvancedFilters/AdvancedFilterTest.php" line="155" assertions="3" time="0.628220"/>
      <testcase name="it_will_not_break_on_create_if_the_value_is_blank_and_it_is_a_boolean_field_type" class="Tests\Feature\AdvancedFilters\AdvancedFilterTest" classname="Tests.Feature.AdvancedFilters.AdvancedFilterTest" file="/Users/shawnveltman/code/kerry/tests/Feature/AdvancedFilters/AdvancedFilterTest.php" line="169" assertions="2" time="0.615640"/>
      <testcase name="it_can_update_the_prospect_count" class="Tests\Feature\AdvancedFilters\AdvancedFilterTest" classname="Tests.Feature.AdvancedFilters.AdvancedFilterTest" file="/Users/shawnveltman/code/kerry/tests/Feature/AdvancedFilters/AdvancedFilterTest.php" line="187" assertions="3" time="0.827464"/>
      <testcase name="new_condition_options_are_shown_on_page_load" class="Tests\Feature\AdvancedFilters\AdvancedFilterTest" classname="Tests.Feature.AdvancedFilters.AdvancedFilterTest" file="/Users/shawnveltman/code/kerry/tests/Feature/AdvancedFilters/AdvancedFilterTest.php" line="215" assertions="4" time="0.742356"/>
      <testcase name="can_create_simple_one_condition_filter" class="Tests\Feature\AdvancedFilters\AdvancedFilterTest" classname="Tests.Feature.AdvancedFilters.AdvancedFilterTest" file="/Users/shawnveltman/code/kerry/tests/Feature/AdvancedFilters/AdvancedFilterTest.php" line="226" assertions="10" time="0.780430"/>
      <testcase name="can_group_multiple_conditions_into_single_filter" class="Tests\Feature\AdvancedFilters\AdvancedFilterTest" classname="Tests.Feature.AdvancedFilters.AdvancedFilterTest" file="/Users/shawnveltman/code/kerry/tests/Feature/AdvancedFilters/AdvancedFilterTest.php" line="272" assertions="9" time="0.898006"/>
      <testcase name="it_does_not_combine_conditions_into_one_if_less_than_conditions_2_are_created" class="Tests\Feature\AdvancedFilters\AdvancedFilterTest" classname="Tests.Feature.AdvancedFilters.AdvancedFilterTest" file="/Users/shawnveltman/code/kerry/tests/Feature/AdvancedFilters/AdvancedFilterTest.php" line="350" assertions="6" time="0.661005"/>
      <testcase name="it_does_not_break_when_combining_two_out_of_more_than_two_conditions_of_same_field_id" class="Tests\Feature\AdvancedFilters\AdvancedFilterTest" classname="Tests.Feature.AdvancedFilters.AdvancedFilterTest" file="/Users/shawnveltman/code/kerry/tests/Feature/AdvancedFilters/AdvancedFilterTest.php" line="381" assertions="4" time="0.631772"/>
      <testcase name="it_does_not_break_when_combining_nodes_after_deleting_sub_filter" class="Tests\Feature\AdvancedFilters\AdvancedFilterTest" classname="Tests.Feature.AdvancedFilters.AdvancedFilterTest" file="/Users/shawnveltman/code/kerry/tests/Feature/AdvancedFilters/AdvancedFilterTest.php" line="422" assertions="8" time="0.793919"/>
      <testcase name="it_gets_the_correct_defaults_for_text_fields" class="Tests\Feature\AdvancedFilters\AdvancedFilterTest" classname="Tests.Feature.AdvancedFilters.AdvancedFilterTest" file="/Users/shawnveltman/code/kerry/tests/Feature/AdvancedFilters/AdvancedFilterTest.php" line="484" assertions="5" time="0.593834"/>
      <testcase name="it_defaults_node_link_to_and_if_there_is_none_set" class="Tests\Feature\AdvancedFilters\AdvancedFilterTest" classname="Tests.Feature.AdvancedFilters.AdvancedFilterTest" file="/Users/shawnveltman/code/kerry/tests/Feature/AdvancedFilters/AdvancedFilterTest.php" line="500" assertions="3" time="0.647842"/>
      <testcase name="it_creates_condition_when_boolean_field_has_true_operator" class="Tests\Feature\AdvancedFilters\AdvancedFilterTest" classname="Tests.Feature.AdvancedFilters.AdvancedFilterTest" file="/Users/shawnveltman/code/kerry/tests/Feature/AdvancedFilters/AdvancedFilterTest.php" line="523" assertions="5" time="0.758083"/>
      <testcase name="it_creates_condition_when_boolean_field_has_false_operator" class="Tests\Feature\AdvancedFilters\AdvancedFilterTest" classname="Tests.Feature.AdvancedFilters.AdvancedFilterTest" file="/Users/shawnveltman/code/kerry/tests/Feature/AdvancedFilters/AdvancedFilterTest.php" line="545" assertions="5" time="0.825057"/>
      <testcase name="it_creates_conditions_when_boolean_fields_have_true_and_false_operator" class="Tests\Feature\AdvancedFilters\AdvancedFilterTest" classname="Tests.Feature.AdvancedFilters.AdvancedFilterTest" file="/Users/shawnveltman/code/kerry/tests/Feature/AdvancedFilters/AdvancedFilterTest.php" line="567" assertions="9" time="0.629745"/>
      <testcase name="it_does_not_break_when_setting_boolean_fields_back_and_forth_from_text_to_bool_fields" class="Tests\Feature\AdvancedFilters\AdvancedFilterTest" classname="Tests.Feature.AdvancedFilters.AdvancedFilterTest" file="/Users/shawnveltman/code/kerry/tests/Feature/AdvancedFilters/AdvancedFilterTest.php" line="604" assertions="8" time="0.682787"/>
      <testcase name="it_always_resets_bool_operator_to_true_if_not_selected_as_false_for_boolean_fields" class="Tests\Feature\AdvancedFilters\AdvancedFilterTest" classname="Tests.Feature.AdvancedFilters.AdvancedFilterTest" file="/Users/shawnveltman/code/kerry/tests/Feature/AdvancedFilters/AdvancedFilterTest.php" line="645" assertions="5" time="0.608199"/>
      <testcase name="can_edit_filter_name" class="Tests\Feature\AdvancedFilters\AdvancedFilterTest" classname="Tests.Feature.AdvancedFilters.AdvancedFilterTest" file="/Users/shawnveltman/code/kerry/tests/Feature/AdvancedFilters/AdvancedFilterTest.php" line="670" assertions="7" time="0.579631"/>
      <testcase name="can_edit_filter_description" class="Tests\Feature\AdvancedFilters\AdvancedFilterTest" classname="Tests.Feature.AdvancedFilters.AdvancedFilterTest" file="/Users/shawnveltman/code/kerry/tests/Feature/AdvancedFilters/AdvancedFilterTest.php" line="703" assertions="9" time="0.725742"/>
      <testcase name="it_can_delete_node" class="Tests\Feature\AdvancedFilters\AdvancedFilterTest" classname="Tests.Feature.AdvancedFilters.AdvancedFilterTest" file="/Users/shawnveltman/code/kerry/tests/Feature/AdvancedFilters/AdvancedFilterTest.php" line="738" assertions="4" time="0.681359"/>
      <testcase name="it_can_edit_a_text_field" class="Tests\Feature\AdvancedFilters\AdvancedFilterTest" classname="Tests.Feature.AdvancedFilters.AdvancedFilterTest" file="/Users/shawnveltman/code/kerry/tests/Feature/AdvancedFilters/AdvancedFilterTest.php" line="775" assertions="5" time="0.759281"/>
      <testcase name="it_can_edit_multiple_fields" class="Tests\Feature\AdvancedFilters\AdvancedFilterTest" classname="Tests.Feature.AdvancedFilters.AdvancedFilterTest" file="/Users/shawnveltman/code/kerry/tests/Feature/AdvancedFilters/AdvancedFilterTest.php" line="797" assertions="13" time="0.919839"/>
      <testcase name="it_does_not_edit_the_field_if_the_value_is_blank" class="Tests\Feature\AdvancedFilters\AdvancedFilterTest" classname="Tests.Feature.AdvancedFilters.AdvancedFilterTest" file="/Users/shawnveltman/code/kerry/tests/Feature/AdvancedFilters/AdvancedFilterTest.php" line="851" assertions="3" time="0.664113"/>
      <testcase name="it_can_edit_a_boolean_field" class="Tests\Feature\AdvancedFilters\AdvancedFilterTest" classname="Tests.Feature.AdvancedFilters.AdvancedFilterTest" file="/Users/shawnveltman/code/kerry/tests/Feature/AdvancedFilters/AdvancedFilterTest.php" line="872" assertions="5" time="0.635307"/>
      <testcase name="it_can_edit_a_number_field" class="Tests\Feature\AdvancedFilters\AdvancedFilterTest" classname="Tests.Feature.AdvancedFilters.AdvancedFilterTest" file="/Users/shawnveltman/code/kerry/tests/Feature/AdvancedFilters/AdvancedFilterTest.php" line="899" assertions="5" time="0.626440"/>
      <testcase name="it_can_filter_by_starts_with_operator" class="Tests\Feature\AdvancedFilters\AdvancedFilterTest" classname="Tests.Feature.AdvancedFilters.AdvancedFilterTest" file="/Users/shawnveltman/code/kerry/tests/Feature/AdvancedFilters/AdvancedFilterTest.php" line="927" assertions="4" time="0.678845"/>
      <testcase name="it_can_filter_by_does_not_start_with_operator" class="Tests\Feature\AdvancedFilters\AdvancedFilterTest" classname="Tests.Feature.AdvancedFilters.AdvancedFilterTest" file="/Users/shawnveltman/code/kerry/tests/Feature/AdvancedFilters/AdvancedFilterTest.php" line="965" assertions="4" time="0.642308"/>
      <testcase name="it_can_filter_correctly_by_starts_with_and_ends_with_operator" class="Tests\Feature\AdvancedFilters\AdvancedFilterTest" classname="Tests.Feature.AdvancedFilters.AdvancedFilterTest" file="/Users/shawnveltman/code/kerry/tests/Feature/AdvancedFilters/AdvancedFilterTest.php" line="1004" assertions="4" time="0.708223"/>
    </testsuite>
  </testsuite>
</testsuites>


EOD;

    }
}
