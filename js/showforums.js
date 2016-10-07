((window.gitter = {}).chat = {}).options = {
 disableDefaultChat: true
};

 document.addEventListener('gitter-sidecar-ready', function(e) {
     var GitterChat = e.detail.Chat;
     var chat;
     function createNewChatRoom(roomname) {
         if (typeof(chat) != "undefined") { chat.destroy() }
           console.log('Create');
           chat = new GitterChat({
             room: roomname,
             showChatByDefault: 'true'
         });
     }
     document.getElementById('create-python-chat-btn').addEventListener('click', function() {createNewChatRoom('clemsonciti/python-for-research')});
     document.getElementById('create-chemistry-chat-btn').addEventListener('click', function () {createNewChatRoom('clemsonciti/test-room')});
 });

