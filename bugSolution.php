```php
<?php
$arr = [];
$arr['1'] = 'one';
$arr['1.0'] = 'one point zero';
$arr['1.5'] = 'one point five';

echo count($arr); //Outputs 3
print_r($arr); // Shows all three entries
?>
```