// The find() method returns the value of the first element that passes a test.

let numbers = [22,33,11,55,30,20];

let result = numbers.find(function(num){
    return num > 30;
});
console.log(result);

// finding the first index that matches a condition
let index = numbers.findIndex(function(num){
    return num > 30;
});
console.log(index)