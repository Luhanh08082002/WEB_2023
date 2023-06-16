const mongoose = require("mongoose");
const userSchema = new mongoose.Schema({
    username:{
        type:String,
        required:true,
        unique:true,
        min:6,
        max:20,
    },
    email:{
        type:String,
        required:true,
        unique:true,
        minlength:10,
        maxlength:50,
    },
    password:{
        type:String,
        required:true,
        
        min:8,
       
    },
    isAvatarImageSet:{
        type: Boolean,
        default:false,
    },
    avatarImage:{
        type:String,
        default:"",
    }
});
module.exports = mongoose.model("Users",userSchema);