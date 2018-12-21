<?php
$bot = "
<script src=\"https://s3-eu-west-1.amazonaws.com/higuru-webchat-stage/v1/higuru-webchat-stage.min.js\"></script>
<script>
(function() {
document.addEventListener(\"DOMContentLoaded\", function(){
var body = document.body;
var higuruChatBlock = document.createElement('div');
higuruChatBlock.setAttribute('id', 'higuru-webchat');
body.appendChild(higuruChatBlock);
Higuru.WebChat.init({ selector: \"#higuru-webchat\", token: '41f8d047-c2ff-481e-a550-4957471986dd'});
});
})();</script>
";

$questions = array(
    "Who is hi.guru",
    "How much does it cost?",
    "I'd like to give some feedback",
    "Tell me more about your product"
);
