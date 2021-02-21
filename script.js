var number1 = parseInt(prompt('Пожалуйста, введите число x: '));
var number2 = parseInt(prompt('Пожалуйста, введите второе n: '));

function pow(x, n) {
    return x ** n;
}

console.log(pow(number1, number2));