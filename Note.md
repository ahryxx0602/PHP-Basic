# NOTE.md

## 1. Set up

### Download XAMPP (LINUX-APACHE-MYSQL-PHP)

### Download Extension (Live Server, PHP Server, PHP Intelephense)

## 2. PHP Cơ bản đã học

- **Hằng số và biến**

  ```php
  define('GOODBYE', ' GOODBYE');
  define('HELLO', ' HELLO');
  const name = "Thanh";
  $age = 21;
  ```

  - `define()` dùng để khai báo hằng số (không đổi giá trị được).
  - `const` cũng để khai báo hằng số, khác ở phạm vi sử dụng.
  - `$age` là biến thông thường.

- **Cấu trúc điều kiện**

  ```php
  if(print name){
      echo HELLO, " Age = ", $age, '<br/>';
  } else {
      echo GOODBYE, '<br/>';
  }
  ```

- **Kiểu dữ liệu**

  ```php
  $name = 'Thanh';          // String
  $helloString = "Hi I'm $name"; // String có nội suy
  $plusNum = 6;             // Integer
  $minusNum = -5;           // Integer
  $floatNum = 3.1;          // Float
  $isThanhHandSome = true;  // Boolean
  $Arr = ["Thanh", "Ahryxx"]; // Array
  ```

- **In dữ liệu**

  - `echo`, `print`: in chuỗi, số.
  - `print_r()`: in mảng dạng dễ đọc.
  - `var_dump()`: in chi tiết kiểu dữ liệu + giá trị.

  Ví dụ:

  ```php
  echo $helloString;
  var_dump($helloString);
  print_r($Arr);
  echo $Arr[0]; // In phần tử đầu tiên
  ```

- **Kết quả mẫu**
  ```
  Hi I'm Thanh
  string(11) "Hi I'm Thanh"
  Array(
      [0] => Thanh
      [1] => Ahryxx
  )
  Thanh
  ```
