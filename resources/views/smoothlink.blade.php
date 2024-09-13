<script>
    document.addEventListener("DOMContentLoaded", function() {
        const menuLinks = document.querySelectorAll('a[href^="#"]');

        function getDistanceFromTheTop(element) {
            const id = element.getAttribute("href");
            const targetElement = document.querySelector(id);
            if (targetElement) {
                return targetElement.offsetTop;
            } else {
                return 0;
            }
        }

        function scrollToSection(event) {
            event.preventDefault();
            const distanceFromTheTop = getDistanceFromTheTop(event.target) - 90;
            smoothScrollTo(0, distanceFromTheTop, 600);
        }

        menuLinks.forEach((link) => {
            link.addEventListener("click", scrollToSection);
        });

        function smoothScrollTo(endX, endY, duration) {
            const startX = window.scrollX || window.pageXOffset;
            const startY = window.scrollY || window.pageYOffset;
            const distanceX = endX - startX;
            const distanceY = endY - startY;
            const startTime = performance.now();

            duration = duration || 400;

            const easeInOutQuart = (time, from, distance, duration) => {
                time /= duration / 2;
                if (time < 1) {
                    return (distance / 2) * time * time * time * time + from;
                }
                time -= 2;
                return (-distance / 2) * (time * time * time * time - 2) + from;
            };

            function animation(currentTime) {
                const time = currentTime - startTime;

                if (time >= duration) {
                    window.scrollTo(endX, endY);
                    return;
                }

                const newX = easeInOutQuart(time, startX, distanceX, duration);
                const newY = easeInOutQuart(time, startY, distanceY, duration);
                window.scrollTo(newX, newY);
                requestAnimationFrame(animation);
            }

            requestAnimationFrame(animation);
        }
    });
</script>