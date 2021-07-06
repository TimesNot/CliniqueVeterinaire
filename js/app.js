window.onscroll = function () {
    if(document.documentElement.scrollTop > 500) {
      document.getElementById("navbar").style.background = "black";
      document.getElementById("navbar").style.height = "10%";
      document.getElementById("content").style.transform = "translateY(0%)";
      document.getElementById("content").style.backgroundColor = "black";
      document.getElementById("content").style.transition = "2s";
      document.getElementById("content").style.backgroundColor = "transparent";
    }
    else {
        document.getElementById("navbar").style.background = "transparent";
        document.getElementById("content").style.transform = "translateY(100%)";
    }

    if(document.documentElement.scrollTop > 1350) {
      document.getElementById("content").style.transform = "translateY(100%)";
      document.getElementById("content").style.transition = "2s";
    }
};

