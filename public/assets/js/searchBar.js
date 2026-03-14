const searchInput = document.getElementById("mainSearch");
const clearBtn = document.getElementById("clearSearch");

// Toggle Clear Button visibility
searchInput.addEventListener("input", () => {
    if (searchInput.value.length > 0) {
        clearBtn.classList.replace("hidden", "block");
    } else {
        clearBtn.classList.replace("block", "hidden");
    }
});

// Clear Functionality
clearBtn.addEventListener("click", () => {
    console.log('click')
    searchInput.value = "";
    clearBtn.classList.replace("block", "hidden");
    searchInput.focus();
});
