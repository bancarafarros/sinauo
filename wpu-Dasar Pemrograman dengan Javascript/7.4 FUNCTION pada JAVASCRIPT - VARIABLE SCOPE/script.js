// // js make mazhab function scope, bykan block scope

// // global scope / window scope
// var a = 1;

// function tes() {
//     // name conflict
//     a = 2;
//     // kalo mau buat variabel lokal dikasih "var"
//     // kalo gk dikasih "var" nanti dianggep variabel global
//     // "use strict" buat strict mode di js
// }

// tes();
// console.log(a);

var a = 1;

// argumen / parameter akan selalu jadi variabel lokal
function tes(a) {
    console.log(a);
}

tes(2); // outputnya 2 karena yg kepake parameter a di function
console.log(a); // outputnya 1 karena yg kepake var a variabel global
tes(a); // outputnya 1 karena yg kepake var a variabel global