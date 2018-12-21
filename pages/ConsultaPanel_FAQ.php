<?php
$bot = "<script src=\"https://s3-eu-west-1.amazonaws.com/higuru-webchat-stage/v1/higuru-webchat-stage.min.js\"></script>
      <script>
        (function() {
        document.addEventListener(\"DOMContentLoaded\", function(){
        var body = document.body;
        var higuruChatBlock = document.createElement('div');
        higuruChatBlock.setAttribute('id', 'higuru-webchat');
        body.appendChild(higuruChatBlock);
        Higuru.WebChat.init({ selector: \"#higuru-webchat\", token: 'cfb41e2b-a00f-4228-b4c9-e31d60c60225'});
        });
        })();
      </script>";

$questions = array(
    "Will I get paid?",
    "How did you get my information?",
    "I forgot my password?",
    "Who is SACSI?"
);