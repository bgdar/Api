

function middleware(){
console.info("middleware token ")
}

module.exports = middleware


// jika ada bebrapa fn yg di export 
// module.exports = {
//   fn1,
//   fn2,
//   ..
// }
// akses  sepeerti 
  // const auth = require("../asas")
  // auth.fn1()
  // auth.fn2


