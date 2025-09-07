// import { Router } from "express";
const express = require("express")
const route = express.Router()


route.get("/get",(_,res)=>{
  res.send("trassaction page")
})

module.exports = route;
