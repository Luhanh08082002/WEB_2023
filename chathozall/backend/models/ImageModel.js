const mongoose  =  require("mongoose");
const ImageSchema = new mongoose.Schema({
    Image:String,
    User_id:String,
    Level:Number,
});
module.exports = mongoose.model("Image" ,ImageSchema);