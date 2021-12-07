array = ["2", "5", "8", "2", "8", "5", "3", "9", "6", "3",
                    "4", "6", "3", "1", "2", "1", "2", "3", "7", "1"];
array.sort();

var valor = null;
var quantidade = 0;
for (var i = 0; i < array.length; i++) {
    if (array[i] != valor) {
        if (quantidade > 0) {
            document.write("<h3>O numero " + valor + " se repete: " + quantidade + " vezes</h3>");
        }
        valor = array[i];
        quantidade = 1;
    } else {
        quantidade++;
    }
}

if (quantidade > 0) {
    document.write("<h3>O numero " + valor + " se repete: " + quantidade + " vezes</h3>");
}