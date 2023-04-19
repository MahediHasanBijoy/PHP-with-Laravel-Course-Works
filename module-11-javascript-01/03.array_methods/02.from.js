var arr1 = [1,2,3,4];

// shallow copy an array using from 
var arr2 = Array.from(arr1);
arr2.push(2);

console.log(arr2);
console.log(arr1);


// string to array
var name = "mahedi hasan";
var letters = Array.from(name);
console.log(letters);
