function stringIncrement(str: string): string {
  // Separate the string and number parts
  let prefix = "";
  let numStr = "";
  let numPos = str.length;

  for (let i = str.length; i > 0; --i) {
    if (/\d/.test(str[i - 1])) {
      numStr = str.substring(i - 1);
      numPos = i - 1;
    } else {
      break;
    }
  }

  prefix = str.substring(0, numPos);

  // Convert number string to integer and increment
  const num = parseInt(numStr) + 1;

  // Create a new number string
  const paddedNumStr = num.toString().padStart(numStr.length, "0");

  return prefix + paddedNumStr;
}

// Test cases
console.log(stringIncrement("foo")); // Output: foo1
console.log(stringIncrement("foobar23")); // Output: foobar24
console.log(stringIncrement("foo0042")); // Output: foo0043
console.log(stringIncrement("foo9")); // Output: foo10
console.log(stringIncrement("foo099")); // Output: foo100
