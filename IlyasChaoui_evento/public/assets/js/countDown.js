document.addEventListener('DOMContentLoaded', function () {
    const countdownElements = document.querySelectorAll('.countdown-timer');

    countdownElements.forEach(element => {
        const deadline = new Date(element.getAttribute('data-deadline')).getTime();

        const interval = setInterval(() => {
            const now = new Date().getTime();
            const distance = deadline - now;

            if (distance < 0) {
                clearInterval(interval);
                element.innerHTML = "Event has ended";
                return;
            }

            const days = Math.floor(distance / (1000 * 60 * 60 * 24));
            const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            const seconds = Math.floor((distance % (1000 * 60)) / 1000);

            element.innerHTML = days + "d " + hours + "h "
                + minutes + "m " + seconds + "s ";
        }, 1000);
    });
});
