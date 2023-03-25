let darkmode = document.querySelector("#darkmode")

darkmode.onclick = () => {
    if (darkmode.contains("bx-moon")) {
        darkmode.toggle("bx-sun")
        document.body.add("color");
    }
    else {
        darkmode.toggle("bx-moon")
        document.body.remove("color")
    }
}