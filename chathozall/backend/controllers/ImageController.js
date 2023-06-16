const imageModel = require("../models/ImageModel");
const brcypt = require("bcrypt");
const multer = require("multer");


const upload = multer().single('file');
module.exports.addImage = async(req, res, next) => {
    upload(req, res, function (err) {
        if (req.fileValidationError) {
            return res.send(req.fileValidationError);
        }
        else if (!req.file) {
            return res.send('Please select an image to Upload');
        }
        else if (err instanceof multer.MulterError) {
            return res.send(err);
        }
       
    })
    try {
        const { from, to, Image } = req.body;
        const data = await imageModel.create({
            Image: req.file.filename,
            User_id: from,
            Level: to,
        });
        if (data) return res.json({ msg: 'Message added successfully' });
        return res.json({ msg: "failed to add message to the database" })

    } catch (ex) {
        next(ex);
    }

    res.send(`you have upload this image `);

}