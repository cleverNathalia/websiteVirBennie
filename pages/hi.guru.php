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
Higuru.WebChat.init({ selector: "#higuru-webchat", token: 'a5991268-79e0-4f4d-bbb8-2b91d66bb464'});
});
})();
</script> 
EOD;

$questions = array(
    "Who is hi.guru",
    "How much does it cost?",
    "I'd like to give some feedback",
    "Tell me more about your product"
);
