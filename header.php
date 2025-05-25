<header>
    <nav class="navbar">
        <ul>
            <li><a href="#home">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#projects">Projects</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>
    </nav>
</header>

<style>
/* Fixed Navbar */
.navbar {
    position: fixed;
    top: 0;
    width: 100%;
    background-color: pink;
    padding: 15px 20px;
    text-align: center;
    z-index: 1000;
}

/* Menu Styling */
.navbar ul {
    list-style: none;
    padding: 0;
    display: flex;
    justify-content: flex-end;
    gap: 10px;
}

.navbar li {
    display: inline;
}

.navbar a {
    text-decoration: none;
    color: #333;
    font-size: x-large;
    font-weight: bold;
    padding: 10px 15px;
    transition: color 0.3s ease-in-out;
}

.navbar a:hover {
    color: white;
}

/* Push content down to avoid being overlapped by fixed navbar */
body {
    padding-top: 20px;
}
</style>
