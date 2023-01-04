function openDataFile(namaFile) {
    var xhr = new XMLHttpRequest();
    xhr.open("GET", namaFile, true);
    xhr.onreadystatechange = function() {
      if (xhr.readyState === 4) {  // Makes sure the document is ready to parse.
        if (xhr.status === 200) {  // Makes sure it's found the file.
          // allText = xhr.responseText; 
          //lines = xhr.responseText.split("\n"); // Will separate each line into an array
          document.getElementById('konten').innerHTML = xhr.responseText;
        }
      }
    }
    xhr.send(null);
}