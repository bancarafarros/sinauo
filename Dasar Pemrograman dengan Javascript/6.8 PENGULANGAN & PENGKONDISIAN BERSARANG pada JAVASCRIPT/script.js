// console.log("*****");

// for (var i = 0; i < 5; i++) {
//     console.log("*");
// }

// var s = "";
// for (var i = 0; i < 10; i++) {
//     s += "*";
// }
// console.log(s);

// var s = "";
// for (var i = 0; i < 10; i++) {
//     s += "*";
//     s += "\n";
// }
// console.log(s);

// var s = "";
// for (var i = 0; i < 7; i++) {
//     for (var j = 0; j < 10; j++) {
//         s += "*";
//     }
//     s += "\n";
// }
// console.log(s);

// var s = "";
// for (var i = 0; i < 15; i++) { // baris
//     for (var j = 0; j <= i; j++) { // bintang
//         s += "*";
//     }
//     s += "\n";
// }
// console.log(s);

var s = "";
for (var i = 10; i > 0; i--) { // baris
    for (var j = 0; j < i; j++) { // bintang
        s += "*";
    }
    s += "\n";
}
console.log(s);