import swal from 'sweetalert';

const btn = document.querySelector(".btn");
btn.addEventListener("click", function () {
    // setTimeout(() => {
    //     swal({
    //         title: "Selamat Datang",
    //         text: "Kamu ada di website Arpsum",
    //         icon: "./img/icon2.png",
    //         button: "Aww yiss!",
    //       });
    // }, 3000);
    swal({
        title: "Selamat Datang",
        text: "Kamu ada di website Arpsum",
        icon: "./img/icon2.png",
        button: "Aww yiss!",
    });
})
