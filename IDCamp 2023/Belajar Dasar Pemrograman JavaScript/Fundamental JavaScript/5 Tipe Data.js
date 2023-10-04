// tipe data di js ada
// undefined
// Number
// BigInt
// String
// Boolean
// null
// Symbol

let x;
console.log(typeof(x));

/* output: undefined */

// penggunaan escape string
const answer = '"I think it\'s awesome!" he answered confidently';
console.log("Windows path: C:\\Program Files\\MyProject");

// string concatenation
let greet = "Hello";
let moreGreet = greet + greet;
console.log(moreGreet);

// string interpolation
const myName = "Luke";
console.log(`Hello, my name is ${myName}.`);

// penggunaan tipe data null untuk nilai sementara
let someLaterData = null;
console.log(someLaterData);

// penggunaan tipe data symbol
// Symbol ini umumnya digunakan sebagai nama property dari Object.
const id = Symbol("id");
console.log(id);

