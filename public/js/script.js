const backToTopButton = document.createElement("button");
backToTopButton.innerText = "↑";
backToTopButton.style.cssText = `
position: fixed;
bottom: 20px;
right: 20px;
background: var(--color-dark);
color: var(--color-light);
border: none;
padding: 10px;
border-radius: 50%;
font-size: 18px;
box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
cursor: pointer;
display: none;
`;
document.body.appendChild(backToTopButton);

window.addEventListener("scroll", () => {
    if (window.scrollY > 200) {
        backToTopButton.style.display = "block";
    } else {
        backToTopButton.style.display = "none";
    }
});

backToTopButton.addEventListener("click", () => {
    window.scrollTo({ top: 0, behavior: "smooth" });
});

document.addEventListener("DOMContentLoaded", function () {
    const navbar = document.querySelector(".navbar");

    if (navbar) {
        window.addEventListener("scroll", function () {
            if (window.scrollY > 50) {
                navbar.classList.add("scrolled");
            } else {
                navbar.classList.remove("scrolled");
            }
        });
    }
});
