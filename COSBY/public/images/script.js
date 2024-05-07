const COLOR_CHECKBOXES = document.querySelectorAll('.color-checkbox');
COLOR_CHECKBOXES.forEach(colorCheckbox => {
    colorCheckbox.addEventListener('change', () => {
        if (colorCheckbox.checked) {
            let colorName = colorCheckbox.value;
            setNewColor(colorName);
            resetOtherCheckboxes(colorCheckbox);
            // Store selected color in localStorage
            localStorage.setItem('selectedColor', colorName);
        }
    });
});

function resetOtherCheckboxes(checkedCheckbox) {
    COLOR_CHECKBOXES.forEach(colorCheckbox => {
        if (colorCheckbox !== checkedCheckbox) {
            colorCheckbox.checked = false;
        }
    });
}

// set new color on the banner right 
function setNewColor(color) {
    document.querySelector('.banner-right img').src = `images/tshirt_${color}.png`;
}

window.onload = function () {
    var tblsize = document.getElementById("tblsize");
    var chks = tblsize.getElementsByTagName("INPUT");
    for (var i = 0; i < chks.length; i++) {
        chks[i].onclick = function () {
            for (var i = 0; i < chks.length; i++) {
                if (chks[i] != this && this.checked) {
                    chks[i].checked = false;
                }
            }
        };
    }
};
window.onload = function () {
    var tblpockets = document.getElementById("tblpockets");
    var chks = tblpockets.getElementsByTagName("INPUT");
    for (var i = 0; i < chks.length; i++) {
        chks[i].onclick = function () {
            for (var i = 0; i < chks.length; i++) {
                if (chks[i] != this && this.checked) {
                    chks[i].checked = false;
                }
            }
        };
    }
};