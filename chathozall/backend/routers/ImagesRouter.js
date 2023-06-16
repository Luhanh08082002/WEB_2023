const {addImage} = require('../controllers/ImageController');
const router = require('express').Router();
const multer = require('multer');
const path = require('path');
var appRoot = require('app-root-path')


var storage = multer.diskStorage({
    destination:function(req,file,cb){
        if(file.mimetype === "image/jpg" ||
        file.mimetype === "image/jpeg" ||
        file.mimetype === "image/png" ){
            cb(null, appRoot + '/public/uploads')
        }else{
            cb(new Error('not Image'),false);
        }
        
    },
    filename:function(req,file,cb){
        cb(null, file.fieldname + '-' + Date.now() + path.extname(file.originalname));
    }
    })
    
    var upload = multer({storage:storage});

router.post("/addimage",upload.single("file"),addImage );


module.exports = router