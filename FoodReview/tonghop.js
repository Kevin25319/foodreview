    var bigImg = document.querySelector(".big-img");
    var currentImg = document.querySelectorAll(".img");
    bigImg.style.backgroundImage =
      "url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAA1BMVEUAAACnej3aAAAASElEQVR4nO3BgQAAAADDoPlTX+AIVQEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADwDcaiAAFXD1ujAAAAAElFTkSuQmCC)";
    currentImg.forEach((currentImg) => {
      currentImg.onmouseover = (e) => {
        bigImg.style.backgroundImage = `url(${e.target.src})`;
      };
    });
