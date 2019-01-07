<?php
$bot = <<<'EOD'
<script src="https://s3-eu-west-1.amazonaws.com/higuru-webchat-stage/v1/higuru-webchat-stage.min.js"></script>
<script>
(function() {
document.addEventListener("DOMContentLoaded", function(){
var body = document.body;
var higuruChatBlock = document.createElement('div');
higuruChatBlock.setAttribute('id', 'higuru-webchat');
body.appendChild(higuruChatBlock);
Higuru.WebChat.init({ selector: "#higuru-webchat", token: '3abeb9b0-be71-4969-a8ef-8b66f138f32c'});
});
})();
</script> 
EOD;

$questions = array(
    "Where is your FAQ?",
    "How do I register?",
    "I want to create a survey",
    "Why should I participate?"
);