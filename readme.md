# 🧮 PHP Array Functions Cheat Sheet

Arrays in PHP can be **indexed**, **associative**, or **multidimensional**.
Below is a quick guide to the most useful array functions — grouped by purpose.

---

## 🔹 Creation & Basic Info

| Function | Description | Example |
|-----------|--------------|----------|
| `array()` | Create an array | `$arr = array(1,2,3);` |
| `count($arr)` | Count elements | `count(["a","b"]) → 2` |
| `is_array($var)` | Check if variable is array | `is_array($x)` |

---

## 🔹 Adding & Removing Elements

| Function | Description | Example |
|-----------|--------------|----------|
| `array_push($arr, $val)` | Add at end | `array_push($arr, "PHP")` |
| `array_pop($arr)` | Remove last element | `array_pop($arr)` |
| `array_unshift($arr, $val)` | Add at start | `array_unshift($arr, "First")` |
| `array_shift($arr)` | Remove first element | `array_shift($arr)` |

---

## 🔹 Searching & Checking

| Function | Description | Example |
|-----------|--------------|----------|
| `in_array($val, $arr)` | Check if value exists | `in_array("PHP", $langs)` |
| `array_key_exists($key, $arr)` | Check if key exists | `array_key_exists("name", $user)` |
| `array_search($val, $arr)` | Find index/key of value | `array_search("Mango", $fruits)` |

---

## 🔹 Sorting

| Function | Description | Note |
|-----------|--------------|------|
| `sort($arr)` | Sort ascending | Resets keys |
| `rsort($arr)` | Sort descending | Resets keys |
| `asort($arr)` | Sort by value (keep keys) | For associative arrays |
| `ksort($arr)` | Sort by keys | |
| `arsort($arr)` | Reverse sort by value | |
| `krsort($arr)` | Reverse sort by key | |

---

## 🔹 Combining & Splitting

| Function | Description | Example |
|-----------|--------------|----------|
| `array_merge($a, $b)` | Combine arrays | |
| `array_combine($keys, $values)` | Combine two arrays into key-value | |
| `array_slice($arr, $start, $len)` | Extract portion | |
| `array_splice($arr, $start, $len)` | Remove & replace | |
| `explode($delimiter, $string)` | Split string into array | `explode(",", "a,b,c")` |
| `implode($delimiter, $arr)` | Join array into string | `implode("-", ["a","b"]) → "a-b"` |

---

## 🔹 Keys & Values

| Function | Description |
|-----------|--------------|
| `array_keys($arr)` | Get all keys |
| `array_values($arr)` | Get all values |
| `array_flip($arr)` | Swap keys & values |

---

## 🔹 Filtering & Mapping

| Function | Description |
|-----------|--------------|
| `array_map('func', $arr)` | Apply function to each element |
| `array_filter($arr, 'func')` | Keep elements where callback returns true |
| `array_reduce($arr, 'func')` | Reduce array to single value |

Example:
```php
$nums = [1, 2, 3, 4];
$squares = array_map(fn($n) => $n ** 2, $nums);
$even = array_filter($nums, fn($n) => $n % 2 == 0);
$sum = array_reduce($nums, fn($a, $b) => $a + $b);
