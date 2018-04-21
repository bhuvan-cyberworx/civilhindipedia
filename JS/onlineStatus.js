window.addEventListener('load', function() {
  
  var status = document.getElementById("online-status");
  
  function updateOnlineStatus(event) {
    var condition = navigator.onLine ? "online" : "offline";
    if(condition =="offline"){
        status.classList.remove("fade");
        status.classList.add("offline");
        status.classList.remove("online");
        status.innerHTML = 'condition.toUpperCase()';
        status.innerHTML = '<i class="fa fa-exclamation-circle"></i> It seems like you are offline! Please check your network connection.';
        }

    else if(condition =="online"){
        status.classList.add("online");
        setTimeout(function(){
          status.classList.add("fade");
        }, 5000);
        status.classList.remove("offline");
        status.innerHTML = '<i class="fa fa-check-circle "></i> Hurray. You are back online! Enjoy your tests.';
        }

  }

  window.addEventListener('online',  updateOnlineStatus);
  window.addEventListener('offline', updateOnlineStatus);
});

