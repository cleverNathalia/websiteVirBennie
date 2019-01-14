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
Higuru.WebChat.init({ selector: "#higuru-webchat", token: 'abdcda44-1b14-4249-9849-929d7bb3ad15'});
});
})();
</script> 
EOD;

$questions = array(
    "Hello",
    "Start assessment"
);
