document.addEventListener('DOMContentLoaded', () => {
      // Create new event, the server script is sse.php
      var eventSource = new EventSource("sse.php");

      // Event when receiving a message from the server
      eventSource.onmessage = function (event) {
          // Append the message to the ordered list
          const currentContent = document.getElementById("content").textContent;
          const newContent = event.data.replace(/<br\s*[\/]?>/gi, "\n");
          if (currentContent != newContent) {
            console.log('ok');
            document.getElementById("content").innerHTML = newContent;
          } else {
            console.log('nope');
          }
      };
});