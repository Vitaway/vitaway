<template>
    <div class="absolute top-0 right-0 bottom-0 left-0 w-full flex items-center justify-center">
        <svg aria-hidden="true" role="status" class="inline h-20 w-20 animate-spin text-indigo-300" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="currentColor"></path>
          <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="rgb(79 70 229)"></path>
        </svg>
    </div>
</template>

<script>
    export default {
        name: "Loader",
    };
</script>

<style>
@import url("https://fonts.googleapis.com/css?family=Roboto+Mono&display=swap");

.loader-wrapper{
    display: flex;
    justify-content: center;
    align-items: center;
}
.content {
    width: 300px;
    height: 300px;
    position: relative;
    display: flex;
    justify-content: center;
    align-items: center;
}

.content .planet {
    width: 65%;
    height: 65%;
    background-color: #546c8c;
    border-radius: 100%;
    position: absolute;
    display: flex;
    align-items: center;
    transform-origin: center center;
    box-shadow: inset 2px -10px 0px rgba(0, 0, 0, 0.1);
    -webkit-animation: planet 5s ease infinite alternate;
    animation: planet 5s ease infinite alternate;
    /* planet ring */
    /* to cover the back of the ring */
    /* planet spots */
}
@-webkit-keyframes planet {
    0% {
        transform: rotate(10deg);
    }
    100% {
        transform: rotate(-10deg);
    }
}
@keyframes planet {
    0% {
        transform: rotate(10deg);
    }
    100% {
        transform: rotate(-10deg);
    }
}
.content .planet .ring {
    position: absolute;
    width: 300px;
    height: 300px;
    border-radius: 100%;
    background-color: #bacbd9;
    display: flex;
    align-items: center;
    justify-content: center;
    transform-origin: 33% center;
    box-shadow: 2px -10px 0px rgba(0, 0, 0, 0.1),
        inset -5px -10px 0px rgba(0, 0, 0, 0.1);
    -webkit-animation: ring 3s ease infinite;
    animation: ring 3s ease infinite;
    /* small ball */
    /* inner ring */
}
@-webkit-keyframes ring {
    0% {
        transform: rotateX(110deg) rotateZ(0deg) translate(-50px, 5px);
    }
    100% {
        transform: rotateX(110deg) rotateZ(360deg) translate(-50px, 5px);
    }
}
@keyframes ring {
    0% {
        transform: rotateX(110deg) rotateZ(0deg) translate(-50px, 5px);
    }
    100% {
        transform: rotateX(110deg) rotateZ(360deg) translate(-50px, 5px);
    }
}
.content .planet .ring:before {
    content: "";
    position: absolute;
    width: 10px;
    height: 30px;
    border-radius: 100%;
    background-color: #7ea1bf;
    z-index: 2;
    left: calc(0px - 5px);
    box-shadow: inset -3px 3px 0px rgba(0, 0, 0, 0.2);
}
.content .planet .ring:after {
    content: "";
    position: absolute;
    width: 240px;
    height: 240px;
    border-radius: 100%;
    background-color: #7ea1bf;
    box-shadow: inset 2px -10px 0px rgba(0, 0, 0, 0.1);
}
.content .planet .cover-ring {
    position: absolute;
    width: 100%;
    height: 50%;
    border-bottom-left-radius: 80%;
    border-bottom-right-radius: 80%;
    border-top-left-radius: 100px;
    border-top-right-radius: 100px;
    transform: translate(0px, -17px);
    background-color: #546c8c;
    z-index: 2;
    box-shadow: inset 0px -2px 0px rgba(0, 0, 0, 0.1);
}
.content .planet .spots {
    width: 100%;
    height: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
    position: absolute;
    z-index: 2;
}
.content .planet .spots span {
    width: 30px;
    height: 30px;
    background-color: #3c4359;
    position: absolute;
    border-radius: 100%;
    box-shadow: inset -2px 3px 0px rgba(0, 0, 0, 0.3);
    -webkit-animation: dots 5s ease infinite alternate;
    animation: dots 5s ease infinite alternate;
}
@-webkit-keyframes dots {
    0% {
        box-shadow: inset -3px 3px 0px rgba(0, 0, 0, 0.3);
    }
    100% {
        box-shadow: inset 3px 3px 0px rgba(0, 0, 0, 0.3);
    }
}
@keyframes dots {
    0% {
        box-shadow: inset -3px 3px 0px rgba(0, 0, 0, 0.3);
    }
    100% {
        box-shadow: inset 3px 3px 0px rgba(0, 0, 0, 0.3);
    }
}
.content .planet .spots span:nth-child(1) {
    top: 20px;
    right: 50px;
}
.content .planet .spots span:nth-child(2) {
    top: 40px;
    left: 50px;
    width: 15px;
    height: 15px;
}
.content .planet .spots span:nth-child(3) {
    top: 80px;
    left: 20px;
    width: 25px;
    height: 25px;
}
.content .planet .spots span:nth-child(4) {
    top: 80px;
    left: 90px;
    width: 40px;
    height: 40px;
}
.content .planet .spots span:nth-child(5) {
    top: 160px;
    left: 70px;
    width: 15px;
    height: 15px;
}
.content .planet .spots span:nth-child(6) {
    top: 165px;
    left: 125px;
    width: 10px;
    height: 10px;
}
.content .planet .spots span:nth-child(7) {
    top: 90px;
    left: 150px;
    width: 15px;
    height: 15px;
}
.content p {
    color: #bacbd9;
    font-size: 14px;
    z-index: 2;
    position: absolute;
    bottom: -20px;
    font-family: "Roboto Mono", monospace;
    -webkit-animation: text 4s ease infinite;
    animation: text 4s ease infinite;
    width: 100px;
    text-align: center;
}
@-webkit-keyframes text {
    0% {
        transform: translateX(-30px);
        letter-spacing: 0px;
        color: #bacbd9;
    }
    25% {
        letter-spacing: 3px;
        color: #7ea1bf;
    }
    50% {
        transform: translateX(30px);
        letter-spacing: 0px;
        color: #bacbd9;
    }
    75% {
        letter-spacing: 3px;
        color: #7ea1bf;
    }
    100% {
        transform: translateX(-30px);
        letter-spacing: 0px;
        color: #bacbd9;
    }
}
@keyframes text {
    0% {
        transform: translateX(-30px);
        letter-spacing: 0px;
        color: #bacbd9;
    }
    25% {
        letter-spacing: 3px;
        color: #7ea1bf;
    }
    50% {
        transform: translateX(30px);
        letter-spacing: 0px;
        color: #bacbd9;
    }
    75% {
        letter-spacing: 3px;
        color: #7ea1bf;
    }
    100% {
        transform: translateX(-30px);
        letter-spacing: 0px;
        color: #bacbd9;
    }
}
</style>
