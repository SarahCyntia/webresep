// const wrapper = document.querySelector(".wrapper"),
// selection = wrapper.querySelector(".select-btn");

// let countries = [""]

// selectBtn.addEventListener("click", () => {
//     wrapper.classList.toggle("active");
// });

// Script to toggle dropdown visibility
document.querySelector('.dropbtn').addEventListener('click', function() {
    document.querySelector('.dropdown-content').classList.toggle('show');
});

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
    if (!event.target.matches('.dropbtn')) {
        var dropdowns = document.getElementsByClassName("dropdown-content");
        for (var i = 0; i < dropdowns.length; i++) {
            var openDropdown = dropdowns[i];
            if (openDropdown.classList.contains('show')) {
                openDropdown.classList.remove('show');
            }
        }
    }
}

// JavaScript untuk memanipulasi data pengguna dan logout
document.getElementById("username").innerText = localStorage.getItem("username") || "Pengguna";  // Mengambil nama pengguna dari localStorage

function logout() {
    // Menghapus data pengguna dari localStorage dan mengarahkan ke halaman login
    localStorage.removeItem("username");
    alert("Anda telah logout!");
    window.location.href = "/makanan/coba/login.php";  // Sesuaikan dengan halaman login Anda
}
