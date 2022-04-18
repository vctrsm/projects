document.getElementById("FotoI").onchange = function(e){
    let reader = new FileReader();
    reader.readAsDataURL(e.target.files[0]);
    reader.onload = function() {
        let preview = document.getElementById("FotoP");
        imagen = document.createElement('Img');
        imagen.src = reader.result;
        imagen.style.width = "200px";
        imagen.style.height = "auto";
        preview.innerHTML = "";
        preview.append(imagen);
    }
}