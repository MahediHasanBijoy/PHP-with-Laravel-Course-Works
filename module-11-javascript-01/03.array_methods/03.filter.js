let numbers = [1,2,3,4,5,6,7,8,9];

// filter numbers greater than 5
// let output = numbers.filter(number => number > 5);   // shorthand using arrow function

let output = numbers.filter(findNumbers);

function findNumbers(num){
    return num < 5;
}
console.log(output);