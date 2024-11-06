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

// // Function to add recipes to favorites
// function addToFavorites(recipeName) {
//     let favoriteList = JSON.parse(localStorage.getItem('favorites')) || [];
//     if (!favoriteList.includes(recipeName)) {
//         favoriteList.push(recipeName);
//         localStorage.setItem('favorites', JSON.stringify(favoriteList));
//         updateFavoriteSection();
//     }
// }

// // Function to update the favorite section
// function updateFavoriteSection() {
//     let favoriteList = JSON.parse(localStorage.getItem('favorites')) || [];
//     const favoriteSection = document.getElementById('favorite-recipes-list');
//     if (favoriteList.length > 0) {
//         favoriteSection.innerHTML = favoriteList.map(recipe => `<p>${recipe}</p>`).join('');
//     } else {
//         favoriteSection.innerHTML = '<p>Belum ada resep favorit. Tambahkan resep dari bagian populer!</p>';
//     }
// }

// // Initialize the favorite section on page load
// window.onload = function() {
//     updateFavoriteSection();
// }
