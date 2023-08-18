function sumOfN(n) {
  const result = [];
  let sum = 0;

  if (n >= 0) {
    for (let i = 0; i <= n; i++) {
      sum += i;
      result.push(sum);
    }
  } else {
    for (let i = 0; i >= n; i--) {
      sum += i;
      result.push(sum);
    }
  }

  return result;
}

console.log(sumOfN(5));
console.log(sumOfN(-5));
console.log(sumOfN(7));
