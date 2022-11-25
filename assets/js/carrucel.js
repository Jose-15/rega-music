var slideIndex = 0;
            showSlides();
            function showSlides() {
                var i;
                var slides = document.getElementsByClassName("Carrusel")
                var puntos = document.getElementsByClassName("punto");
                for (i = 0; i < slides.length; i++) {
                    slides[i].style.display = "none";
                }
                slideIndex++;
                if (slideIndex > slides.length) {slideIndex = 1}
                for ( i = 0; i < puntos.length; i++) {
                    puntos[i].className = puntos[i].className.replace(" activo", "");
                }
                slides[slideIndex-1].style.display = "block";
                puntos[slideIndex-1].className += " activo";
                setTimeout(showSlides, 2000); // Cambia la imagen cada dos segundos
            }