const {addMessage,getAllMessage } = require('../controllers/MessageController');
const router = require('express').Router();


router.post("/addmessages" ,addMessage );
router.post("/getallmessages" ,getAllMessage );


module.exports = router;