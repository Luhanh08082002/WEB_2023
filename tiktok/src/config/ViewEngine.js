import express from 'express';

let ConfigViewEngine = (app) =>{
    app.use(express.static("../../public"))
}

module.exports = ConfigViewEngine;