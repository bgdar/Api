// import {express }from "express"
const express = require("express")
const morgan =  require("morgan")
const jwt = require("jsonwebtoken");
// route
const paymentRoute = require("./routes/payment.route");
const userRoute = require("./routes/user.route");
const transactionsRoute =  require("./routes/transactions.route");
//middleware 
const authMiddleware = require("./midleware/autentikasi")

const port =  3050
const app  = express();

app.use(express.json());
app.use(morgan('tiny'))//atau dev

// data dummy sementara 
const data_dummy = [
  {id :1 , user : "dar",token :"12kjsb3b"}
]


// gabungan route 
app.use("/payment",paymentRoute);
app.use("/auth",userRoute);
app.use("/transactions",transactionsRoute);

// main route 
app.get("/",(req,res)=>{
  const info = `
  \x1b[1m token \x1b[0m = \x1b[34m ${"token"}\x1b[0m 
  page: 
  `;
  res.send(info);
});

// route di bawah untuk error handling 
app.use((req,res,next)=>{
  res.status(404).json({
    success : false ,
    message : "page not found"
  });
});

app.listen(port,()=>{
  console.log("server start at : http://127.0.0.1:",port);
})

