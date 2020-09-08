            ScrollOut();

            window.addEventListener("scroll", function(){
                var header = document.querySelector("header");
                header.classList.toggle("sticky",window.scrollY > 0);
            })

            var windowWidth = $(indow).width();

            $('.banner').mousemove(function(event){
                var moveX = (($(window).width() / 2) - event.pageX) * 0.1;
                var moveY = (($(window).height() / 2) - event.pageY) * 0.1;
                $('.banner-back').css('margin-left', moveX + 'px');
                $('.banner-back').css('margin-top', moveY + 'px');
            });

            function toggle(){
                var header = document.querySelector("header");
                header.classList.toggle("active");
            }
