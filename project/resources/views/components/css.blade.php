<style>
    body {
        background-color: #111111;
        margin: 0;
        overflow-x: hidden;
    }

    .bg {
        position: fixed;
        top: -50%;
        left: -50%;
        right: -50%;
        bottom: -50%;
        width: 200%;
        height: 200vh;
        background: transparent url('{{ asset('images/bg.png')}}') repeat 0 0;
        background-repeat: repeat;
        animation: bg-animation .2s infinite;
        opacity: .9;
        visibility: visible;
    }

    @keyframes bg-animation {
        0% {
            transform: translate(0, 0)
        }

        10% {
            transform: translate(-5%, -5%)
        }

        20% {
            transform: translate(-10%, 5%)
        }

        30% {
            transform: translate(5%, -10%)
        }

        40% {
            transform: translate(-5%, 15%)
        }

        50% {
            transform: translate(-10%, 5%)
        }

        60% {
            transform: translate(15%, 0)
        }

        70% {
            transform: translate(0, 10%)
        }

        80% {
            transform: translate(-15%, 0)
        }

        90% {
            transform: translate(10%, 5%)
        }

        100% {
            transform: translate(5%, 0)
        }
    }
</style>
