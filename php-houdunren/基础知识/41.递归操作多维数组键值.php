<?php
$users = [
  'name'=>'ame',
  'age'=>21,
  'sex'=>'male',
  'grade'=>[
    'chinese'=>121,
    'engish'=>125,
    'math'=>110
  ]
];
function my_array_change_value_case(array $data, $case='CASE_UPPER') :array {
  $action = $case == 'CASE_UPPER' ? 'strtoupper' : 'strtolower';
  foreach($data as $key=>$value) {
    $data[$key] = is_array($value) ? my_array_change_value_case($value) : $action($value);
  }
  return $data;
}
print_r(my_array_change_value_case($users));