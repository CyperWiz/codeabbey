function incrementString(str) {
  // Separate the string and number parts
  const match = str.match(/(.*?)(\d*)$/);
  const prefix = match[1] || "";
  const numStr = match[2] || "0";

  // Convert number string to integer and increment
  const num = parseInt(numStr) + 1;

  // Pad the incremented number with zeroes
  const paddedNumStr = num.toString().padStart(numStr.length, "0");

  return prefix + paddedNumStr;
}

// Test cases
console.log(incrementString("foo")); // Output: foo1
console.log(incrementString("foobar23")); // Output: foobar24
console.log(incrementString("foo0042")); // Output: foo0043
console.log(incrementString("foo9")); // Output: foo10
console.log(incrementString("foo099")); // Output: foo100
