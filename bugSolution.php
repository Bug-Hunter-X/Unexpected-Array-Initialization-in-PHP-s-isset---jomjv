```php
function incrementArrayValue(array &$arr, int $index): void {
  if (!array_key_exists($index, $arr)) {
    throw new InvalidArgumentException("Index does not exist in the array.");
  }
  $arr[$index]++;
}

$myArray = [1, 2, 3];

try {
  incrementArrayValue($myArray, 5);
} catch (InvalidArgumentException $e) {
  echo "Error: " . $e->getMessage();
}
echo json_encode($myArray);
```