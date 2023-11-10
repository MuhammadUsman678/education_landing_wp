    $(".carousel .carousel-item").each(function() {
        var minPerSlide = 2;
        var next = $(this).next();
        if (!next.length) {
            next = $(this).siblings(":first");
        }
        next.children(":first-child").clone().appendTo($(this));

        for (var i = 0; i < minPerSlide; i++) {
            next = next.next();
            if (!next.length) {
                next = $(this).siblings(":first");
            }
            next.children(":first-child").clone().appendTo($(this));
        }
    });

      document.addEventListener("DOMContentLoaded", function () {
        const mainHeader = document.getElementById("mainHeader");

        if (mainHeader.classList.contains("isForHome")) {
          mainHeader.style.backgroundColor = "transparent";
          mainHeader.style.position="absolute";
          mainHeader.style.zIndex="1000";
          mainHeader.style.width="100%";
        }

        else{

          mainHeader.style.backgroundColor = "black";
        }
      });
    