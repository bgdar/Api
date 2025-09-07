const express = require("express")
const route = express.Router();


route.get("/all",(req,res)=>{
  res.json({"gett":"all data"});
})

/**
 * POST data yang di buat 
 */ 
route.post("/create",(req,res)=>{
   const {amount ,currecy,method,card_number,expiry,cvv } = req.body
  console.info("data :",req.body);

});


route.get("/payments/:id/status",(req,res)=>{
 const id  = req.params.id;
  console.info("id yg di dapat",id);
})

module.exports = route;
