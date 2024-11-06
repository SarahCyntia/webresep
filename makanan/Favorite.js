// Function to add recipes to favorites
function addToFavorites(recipeName) {
    let favoriteList = JSON.parse(localStorage.getItem('favorites')) || [];
    if (!favoriteList.includes(recipeName)) {
        favoriteList.push(recipeName);
        localStorage.setItem('favorites', JSON.stringify(favoriteList));
        updateFavoriteSection();
    }
}

// Function to update the favorite section
function updateFavoriteSection() {
    let favoriteList = JSON.parse(localStorage.getItem('Favorit')) || [];
    const favoriteSection = document.getElementById('favorite-recipes-list');
    if (favoriteList.length > 0) {
        favoriteSection.innerHTML = favoriteList.map(recipe => `<p>${recipe}</p>`).join('');
    } else {
        favoriteSection.innerHTML = '<p>Belum ada resep favorit. Tambahkan resep dari bagian populer!</p>';
    }
}

// Initialize the favorite section on page load
window.onload = function() {
    updateFavoriteSection();
}
