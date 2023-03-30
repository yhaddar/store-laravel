<script>

    const CounteDate = () => {
        let countdown = new Date("May 22, 2023 23:59:59").getTime();
        let counter = setInterval(() => {
            let dateNow = new Date().getTime();
            let date = countdown - dateNow;

            let days = Math.floor(date / 1000 / 60 / 60 / 24);
            let hours = Math.floor((date % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            let minutes = Math.floor((date % (1000 * 60 * 60 )) / (1000 * 60));
            let secondes = Math.floor((date % (1000 * 60 )) / 1000 );

            document.querySelector('.days').innerHTML = days < 10 ? `0${days}d` : `${days}d`;
            document.querySelector('.hours').innerHTML = hours < 10 ? `0${hours}h` : `${hours}h`;
            document.querySelector('.minutes').innerHTML = minutes < 10 ? `0${minutes}m` : `${minutes}m`;
            document.querySelector('.secondes').innerHTML = secondes < 10 ? `0${secondes}s` : `${secondes}s`;




        }, 1000);
        if (countdown == 0 || countdown < 0) {
            clearInterval(counter);
        }
    }
    CounteDate();


</script>
