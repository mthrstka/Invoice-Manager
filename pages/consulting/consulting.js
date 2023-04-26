import { mariadb } from "../../Backend/mariadb.js";


const table = mariadb("SELECT * FROM `Consulting`");


document.getElementById("datatable").innerHTML = "test";
// document.write(`<h2>${table}</h2>`);