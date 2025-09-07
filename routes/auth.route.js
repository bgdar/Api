const express = require("express");
const route = express.Router();

route.post("/login",(req,res)=>{
  res.send("login user");
  // req.host
})

route.post("/token",(req,res)=>{
  res.send("token");
})

// export default route;
module.exports = route;
