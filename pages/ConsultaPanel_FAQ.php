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
        Higuru.WebChat.init({ selector: "#higuru-webchat", token: '306180fa-d145-414c-a8ec-e4361f92823c'});
});
})();
</script>
EOD;

$questions = array(
    "Will I get paid?",
    "How did you get my information?",
    "I forgot my password?",
    "Who is SACSI?"
);